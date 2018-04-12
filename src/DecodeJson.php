<?php

namespace Wpkenpachi\WpDecodeJson;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DecodeJson extends Controller
{
    private static $json_regex = '/[^,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]/';
        
    public static function decodeAll(array $array){
        $regex = self::$json_regex;
        array_walk_recursive($array, function(&$value) use ($regex){
            if( is_string($value) ){
                if( preg_match($regex, $value) ){
                    $value = json_decode($value, true);
                }
            }
        });

        return $array;
    }
}
