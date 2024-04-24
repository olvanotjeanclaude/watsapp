<?php

class HTTPRequest
{
    private static $defaultHeaders = array(
        'Content-Type: application/json',
    );

    public static function get($url, $headers = [])
    {
        $mergedHeaders = array_merge(self::$defaultHeaders, $headers);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        if (!empty($mergedHeaders)) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $mergedHeaders);
        }
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function post($url, $data, $headers = [])
    {
        $mergedHeaders = array_merge(self::$defaultHeaders, $headers);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        if (!empty($mergedHeaders)) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $mergedHeaders);
        }
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
