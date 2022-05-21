<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'en' => ['name' => 'shop'],
                'ar' => ['name' => 'التسوق'],
                'slug' => 'shop',
                'image' => '1.png',

        ];

        foreach ($services as $service) {

            Service::create($service);

        }//end of for each

    }//end of run

}//end of seeder
