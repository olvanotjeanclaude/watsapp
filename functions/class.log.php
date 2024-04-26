<?php

require_once "fnGeneral.php";

class Log
{
    private static function path($file)
    {
        $path = __DIR__ . "/../logs/$file";
    
        if (!file_exists($path)) {
            $dirname = dirname($path);
            if (!is_dir($dirname)) {
                mkdir($dirname, 0755, true);
            }

            file_put_contents($path, '');
        }
    
        return $path;
    }
    

    public static function info($message, $file = "logs.log")
    {
        $message = json_encode($message);
        $now = date("Y-m-d H:i:s");
        $ip= ip();
        $message = "[$now : $ip]  $message";
        
        file_put_contents(static::path($file), $message . "\n", FILE_APPEND);
    }

    public static function error($message)
    {
        $message = json_encode($message);
        $now = date("Y-m-d H:i:s");
        $ip= ip();
        $message = "[$now : $ip]  $message";
        file_put_contents(static::path("errors.log"), $message . "\n", FILE_APPEND);
    }

    public static function append(array $newData, $file)
    {
        if (!$file && !is_array($newData)) return;

        $newData["datetime"] = date("Y-m-d H:i:s");

        $data = json_decode(file_get_contents($file), true)??[];

        $data[] = $newData;

        $jsonData = json_encode(array_reverse($data), JSON_PRETTY_PRINT);

        file_put_contents(static::path($file), $jsonData);
    }
}
