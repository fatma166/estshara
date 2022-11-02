<?php 
namespace App\Interfaces;

interface PlaceInterface
{
    // Define all methods here but remember not to use curly braces.
    public function getGovernment($request); // Like this..
    public function getCity($govern_id);
}