<?php 
namespace App\Interfaces;

interface ConsulationInterface
{
    // Define all methods here but remember not to use curly braces.
    public function list_consultation($status,$start,$end,$id); // Like this..
    public function cancle_consultation($id); 
    public function get_invoice($id); 
    public function details_consultation($id);
   

}