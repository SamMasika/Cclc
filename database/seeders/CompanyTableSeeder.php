<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $companyRecords=[[
                'id'=>'1','name'=>'CUMMULATIVE CONSULTANCY (T) LIMITED','motto'=>'Building Africa’s Future with ICT.','mission'=>'To empower businesses with innovative technology solutions and exceptional service, enabling
                them to achieve their goals and succeed in an ever-evolving digital landscape.','vision'=>'To be the leading provider of technology services, recognized for our expertise, integrity, and
                commitment to delivering exceptional outcomes for our clients.','phone1'=>'+255-735433954','phone2'=>'+255-756433954','email'=>'amillinga@ccltz.co.tz','location'=>'Dar es Salaam-Tanzania',
                'postal_address'=>'67597','about_us'=>'Welcome to CUMMULATIVE CONSULTANCY (T) LIMITED, a leading IT consultancy firm that provides innovative technology solutions to businesses of all sizes. 
                With a team of highly skilled and experienced consultants, we have a proven track record of delivering results that drive growth, efficiency, and customer satisfaction.'
               ], 
            ];
            Company::insert($companyRecords);
        }
    }
}
