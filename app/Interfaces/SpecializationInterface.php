<?php 
namespace App\Interfaces;

interface SpecializationInterface
{
    // Define all methods here but remember not to use curly braces.
    public function lastSpcializationsConsultation($limit); // Like this..
    public function get_specification_question($request);
    public function add_patient_answers($request);
}