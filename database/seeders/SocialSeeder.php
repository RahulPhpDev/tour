<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Social;
class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data  = [
            'mobile' => '9891161011',
            'email' => 'info@sakshamholidays.com',
            'whats_app' => '9891161011',
            'address' => 'Hindolakhal, Devprayag , Distt: Tehri Garhwal, Uttarakhand - 249122',
            'branch_address' => 'Branch Address: D - 595, Sector - 1, Rohini, New Delhi - 110085',
            'facebook' => 'www.facebook.com/SakshamHolidays',
            'instagram' => null,
            'twitter' => null,
            'youtube' => null,
            'linkedin' => 'www.linkedin.com/company/saksham-holidays/'
        ];
        Social::truncate();
        Social::create( $data );
    }
}
