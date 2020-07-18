<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Kernel;

use ETaobao\Kernel\Exceptions\Exception;
use ETaobao\Kernel\Support;

/**
 * Class BaseClient.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class BaseClient
{
    /**
     * @var \ETaobao\Kernel\ServiceContainer
     */
    protected $app;

    /**
     * @var
     */
    protected $baseUri;

    /**
     * @var array
     */
    protected $globalConfig = [];

    /**
     * BaseClient constructor.
     *
     * @param \ETaobao\Kernel\ServiceContainer $app
     */
    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->globalConfig = $this->app->getConfig();
        if ($this->globalConfig['sandbox']) {
            $this->baseUri = $this->globalConfig['api_box_uri'];
        } else {
            $this->baseUri = $this->globalConfig['api_uri'];
        }
    }

    /**
     * GET request.
     *
     * @param array $query
     * @return ServiceContainer
     */
    public function httpGet(array $query = [])
    {
        return $this->baseUri;
    }

    /**
     * POST request.
     * @param $method 接口名称
     * @param array $data 请求参数
     * @param bool $auth 是否需要授权
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function httpPost($method, array $data = [], $auth = false)
    {
        //组装系统参数
        $sysParams["app_key"] = $this->globalConfig['appkey'];
        $sysParams["v"] = $this->globalConfig['apiVersion'];
        $sysParams["format"] = $this->globalConfig['format'];
        $sysParams["sign_method"] = $this->globalConfig['signMethod'];
        $sysParams["method"] = $method;
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        if ($auth){
            if (isset($this->globalConfig['session']) && !empty($this->globalConfig['session'])){
                $sysParams["session"] = $this->globalConfig['session'];
            }else{
                $result['code'] = 0;
                $result['msg'] = "NEED TO SET SESSION";
                return $result;
            }
        }
        $sysParams["sign"] = Support\generateSign(array_merge($data, $sysParams), $this->globalConfig['secretKey']);
        $requestUrl = $this->baseUri . '?';
        foreach ($sysParams as $sysParamKey => $sysParamValue) {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }
        $requestUrl = substr($requestUrl, 0, -1);
        try {
            $resp = $this->curl($requestUrl, $data);
        } catch (Exception $e) {
            $result['code'] = $e->getCode();
            $result['msg'] = $e->getMessage();
            return json_encode($result);
        }

        unset($data);

        // 解析返回
        return $this->parseRep($resp);
    }

    /**
     * 请求方式
     * @param $url
     * @param null $postFields
     * @return mixed
     */
    public function curl($url, $postFields = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        if ($this->readTimeout) {
//            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
//        }
//        if ($this->connectTimeout) {
//            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
//        }
//        curl_setopt($ch, CURLOPT_USERAGENT, "top-sdk-php");
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if (is_array($postFields) && 0 < count($postFields)) {
            $postBodyString = "";
            $postMultipart = false;
            foreach ($postFields as $k => $v) {
                if ("@" != substr($v, 0, 1))//判断是不是文件上传
                {
                    $postBodyString .= "$k=" . urlencode($v) . "&";
                } else//文件上传用multipart/form-data，否则用www-form-urlencoded
                {
                    $postMultipart = true;
                    if (class_exists('\CURLFile')) {
                        $postFields[$k] = new \CURLFile(substr($v, 1));
                    }
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart) {
                if (class_exists('\CURLFile')) {
                    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
                } else {
                    if (defined('CURLOPT_SAFE_UPLOAD')) {
                        curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
                    }
                }
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            } else {
                $header = array("content-type: application/x-www-form-urlencoded; charset=UTF-8");
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString, 0, -1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new Exception($reponse, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    /**
     * 解析数据
     * @param $response
     * @return array|mixed|\SimpleXMLElement
     */
    public function parseRep($response)
    {
        //解析返回结果
        $respWellFormed = false;
        $respObject = array();
        if ("json" == $this->globalConfig['format']) {
            $respObject = json_decode($response);
            if (null !== $respObject) {
                $respWellFormed = true;
                $respObject = @current($respObject);
//                foreach ($respObject as $propKey => $propValue) {
//                    $respObject = $propValue;
//                }
            }
        } else if ("xml" == $this->globalConfig['format']) {
            $respObject = @simplexml_load_string($response);
            if (false !== $respObject) {
                $respWellFormed = true;
            }
        }
        //返回的HTTP文本不是标准JSON或者XML，记下错误日志
        if (false === $respWellFormed) {
            $result['code'] = 0;
            $result['msg'] = "HTTP_RESPONSE_NOT_WELL_FORMED";
            return $result;
        }

        return $respObject;
    }
}
