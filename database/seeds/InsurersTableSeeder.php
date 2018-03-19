<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InsurersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$insurers = [
    		'Life Insurance Corporation of India',
			'Aegon Life Insurance Company',
			'Aviva India',
			'Bajaj Allianz Life Insurance',
			'Birla Sun Life Insurance Company Limited',
			'Exide Life Insurance',
			'HDFC Standard Life Insurance',
			'ICICI Prudential Life Insurance',
			'IDBI Federal Life Insurance',
			'IndiaFirst Life Insurance Company',
			'Kotak Life Insurance',
			'Max Life Insurance',
			'Peerless Group',
			'PNB MetLife India Insurance Company',
			'Reliance Life Insurance',
			'Sahara India Pariwar',
			'SBI Life Insurance Company',
			'TATA AIG',
			'National Insurance Company',
			'New India Assurance',
			'The Oriental Insurance Company',
			'United India Insurance Company',
			'Agriculture Insurance Company of India',
			'Export Credit Guarantee Corporation of India',
			'Apollo Munich Health Insurance',
			'Cholamandalam MS General Insurance',
			'Bajaj Allianz General Insurance',
			'Bharti AXA General Insurance',
			'Cigna TTK',
			'Future Generali India Insurance',
			'HDFC ERGO General Insurance Company',
			'ICICI Lombard',
			'IFFCO Tokio',
			'Kotak Mahindra General Insurance',
			'Liberty Videocon General Insurance',
			'Reliance General Insurance',
			'Royal Sundaram General Insurance',
			'Star Health and Allied Insurance',
			'Tata AIG General',
			'Universal Sompo General Insurance Company',
			'Cholamandalam MS General Insurance',
			'Religare Health Insurance Company Limited'
    	];

    	// Insert data into DB
    	foreach ($insurers as $insurer) {
    		$insurerData['name'] = $insurer;
        	$insurerData['created_at'] = Carbon::now()->format('Y-m-d H:i:s');
        	$insurerData['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');

        	App\Insurer::insert($insurerData);
    	}

    }
}
