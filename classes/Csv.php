<?php

class Csv{
    public static function read($file){
        $csv = array_map('str_getcsv', file($file));
        array_walk($csv, function(&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });
        array_shift($csv);
        return $csv;
    }


    // public static function write($file, $data){
    //     $fp = fopen($file, 'w');
    //     foreach ($data as $fields) {
    //         fputcsv($fp, $fields);
    //     }
    //     fclose($fp);
    // }
}






?>