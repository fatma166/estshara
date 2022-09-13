<?php
namespace App\Modules;

use App\Modules\Common\MyHelpers;

class IntroMapper
{
    public static function mapFrom(array $data): 
    {
        return new IntroCollection( $data);
    }
}