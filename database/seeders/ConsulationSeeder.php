<?php

namespace Database\Seeders;
use App\Models\Consulation;
use Illuminate\Database\Seeder;

class ConsulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Consulation::create
        (
            [
            'consultation_key' => '534534',
            'patient_id' => '3',
            'doctor_id' => '2',
            'spacialization_id' => '1',
            'service_type_id' => '1',
            'status'=>'wait',
	
            'date'=>'2022-10-11 15:50:46',
    


        ]
    );
    }
}
