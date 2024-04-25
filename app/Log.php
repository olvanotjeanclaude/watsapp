<?php

class Log
{
    public static function info($message, $file = "logs.log")
    {
        $message = json_encode($message);
        $now = date("Y-m-d H:i:s");
        $message = "$now : $message";
        file_put_contents($file, $message . "\n", FILE_APPEND);
    }

    public static function error($message)
    {
        $message = json_encode($message);
        $now = date("Y-m-d H:i:s");
        $message = "$now : $message";
        file_put_contents('errors.log', $message . "\n", FILE_APPEND);
    }

    public static function append(array $newData, $file)
    {
        if (!$file && !is_array($newData)) return;

        $newData["datetime"] = date("Y-m-d H:i:s");

        $data = json_decode(file_get_contents($file), true)??[];

        $data[] = $newData;

        $jsonData = json_encode(array_reverse($data), JSON_PRETTY_PRINT);

        file_put_contents($file, $jsonData);
    }
}
