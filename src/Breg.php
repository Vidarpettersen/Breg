<?php

namespace Smbpartner\Breg;

use Illuminate\Support\Facades\Http;

class Breg
{
    public static function enheter(string $orgnr)
    {
        $orgnr = str_replace(" ", "", $orgnr);


        $url = 'https://data.brreg.no/enhetsregisteret/api/enheter/'.$orgnr;
        try {
            $res = Http::get($url);
            return json_decode($res);
        }
        catch(\Exception $e)
        {
            return response("Not found", 404);
        }
    }

    public static function roller(string $orgnr)
    {
        $orgnr = str_replace(" ", "", $orgnr);


        $url = 'https://data.brreg.no/enhetsregisteret/api/enheter/'.$orgnr.'/roller';
        try {
            $res = Http::get($url);
            return json_decode($res);
        }
        catch(\Exception $e)
        {
            return response("Not found", 404);
        }
    }
}