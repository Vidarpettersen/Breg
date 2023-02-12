<?php

namespace Smbpartner\Breg;

use Illuminate\Support\Facades\Http;

class Breg
{
    private static function getOrgNr($query)
    {
        if(is_numeric($query)){
            $orgnr = str_replace(" ", "", $query);
            return $query;
        }
        $query = urlencode($query);
        $url = 'https://proff.no/bransjes%C3%B8k?q='.$query;
        $result = file_get_contents($url);
        $result = str($result);
        preg_match("#Org nr (.*?)\n(.*?)#", $result, $match);
        if(count($match) == 0){
            return false;
        }
        $explode = explode('</span>', $match[1]);
        $orgnr = $explode[0];
        $orgnr = str_replace(" ", "", $orgnr);
        return $orgnr;
    }
    public static function enheter(string $query)
    {       
        $orgnr = Breg::getOrgNr($query);
        if(!$orgnr){
            return false;
        }

        $url = 'https://data.brreg.no/enhetsregisteret/api/enheter/'.$orgnr;
        try {
            $res = Http::get($url);
            $res = json_decode($res);
            if(isset($res->status)){
                return false;
            }
            return $res;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }

    public static function roller(string $query)
    {
        $orgnr = Breg::getOrgNr($query);
        if(!$orgnr){
            return false;
        }
        $url = 'https://data.brreg.no/enhetsregisteret/api/enheter/'.$orgnr.'/roller';
        try {
            $res = Http::get($url);
            $res = json_decode($res);
            if(isset($res->status)){
                return false;
            }
            return $res;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }
}