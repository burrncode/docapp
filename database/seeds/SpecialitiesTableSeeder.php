<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SpecialitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialities = [
        	'Accident and emergency medicine',
			'Allergology',
			'Anaesthetics',
			'Biological hspecialitiesematology',
			'Cardiology',
			'Child psychiatry',
			'Clinical biology',
			'Clinical chemistry',
			'Clinical neurophysiology',
			'Craniofacial surgery',
			'Dental, oral and maxillo-facial surgery',
			'Dermatology',
			'Endocrinology',
			'Gastro-enterologic surgery',
			'Gastroenterology',
			'General hematology',
			'General Practice',
			'General surgery',
			'Geriatrics',
			'Immunology',
			'Infectious diseases',
			'Laboratory medicine',
			'Maxillo-facial surgery',
			'Microbiology',
			'Nephrology',
			'Neuro-psychiatry',
			'Neurology',
			'Neurosurgery',
			'Nuclear medicine',
			'Obstetrics and gynecology',
			'Occupational medicine',
			'Ophthalmology',
			'Orthopaedics',
			'Otorhinolaryngology',
			'Paediatric surgery',
			'Paediatrics',
			'Pathology',
			'Pharmacology',
			'Physical medicine and rehabilitation',
			'Plastic surgery',
			'Podiatric Surgery',
			'Psychiatry',
			'Public health and Preventive Medicine',
			'Radiation Oncology',
			'Radiology',
			'Respiratory medicine',
			'Rheumatology',
			'Stomatology',
			'Thoracic surgery',
			'Tropical medicine',
			'Urology',
			'Vascular surgery',
			'Venereology'
        ];

        foreach($specialities as $speciality) {
        	$specialityData['name'] = $speciality;
        	$specialityData['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        	$specialityData['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
        	App\Speciality::insert($specialityData);
        }

    } 
}
