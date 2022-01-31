<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //remove foreign key check
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //truncate existing table if any
        \DB::table('counties')->truncate();
        \DB::table('counties')->delete();

        \DB::table('counties')->insert(array(
                ['county_code' => 1, 'name' => 'Mombasa',],
                ['county_code' => 2, 'name' => 'Kwale',],
                ['county_code' => 3, 'name' => 'Kilifi',],
                ['county_code' => 4, 'name' => 'Tana River',],
                ['county_code' => 5, 'name' => 'Lamu',],
                ['county_code' => 6, 'name' => 'Taita-Taveta',],
                ['county_code' => 7, 'name' => 'Garissa',],
                ['county_code' => 8, 'name' => 'Wajir',],
                ['county_code' => 9, 'name' => 'Mandera',],
                ['county_code' => 10, 'name' => 'Marsabit',],
                ['county_code' => 11, 'name' => 'Isiolo',],
                ['county_code' => 12, 'name' => 'Meru',],
                ['county_code' => 13, 'name' => 'Tharaka-Nithi',],
                ['county_code' => 14, 'name' => 'Embu',],
                ['county_code' => 15, 'name' => 'Kitui',],
                ['county_code' => 16, 'name' => 'Machakos',],
                ['county_code' => 17, 'name' => 'Makueni',],
                ['county_code' => 18, 'name' => 'Nyandarua',],
                ['county_code' => 19, 'name' => 'Nyeri',],
                ['county_code' => 20, 'name' => 'Kirinyaga',],
                ['county_code' => 21, 'name' => 'Murang\'a',],
                ['county_code' => 22, 'name' => 'Kiambu',],
                ['county_code' => 23, 'name' => 'Turkana',],
                ['county_code' => 24, 'name' => 'West Pokot',],
                ['county_code' => 25, 'name' => 'Samburu',],
                ['county_code' => 26, 'name' => 'Trans-Nzoia',],
                ['county_code' => 27, 'name' => 'Uasin Gishu',],
                ['county_code' => 28, 'name' => 'Elgeyo Marakwet',],
                ['county_code' => 29, 'name' => 'Nandi',],
                ['county_code' => 30, 'name' => 'Baringo',],
                ['county_code' => 31, 'name' => 'Laikipia',],
                ['county_code' => 32, 'name' => 'Nakuru',],
                ['county_code' => 33, 'name' => 'Narok',],
                ['county_code' => 34, 'name' => 'Kajiado',],
                ['county_code' => 35, 'name' => 'Kericho',],
                ['county_code' => 36, 'name' => 'Bomet',],
                ['county_code' => 37, 'name' => 'Kakamega',],
                ['county_code' => 38, 'name' => 'Vihiga',],
                ['county_code' => 39, 'name' => 'Bungoma',],
                ['county_code' => 40, 'name' => 'Busia',],
                ['county_code' => 41, 'name' => 'Siaya',],
                ['county_code' => 42, 'name' => 'Kisumu',],
                ['county_code' => 43, 'name' => 'Homa Bay',],
                ['county_code' => 44, 'name' => 'Migori',],
                ['county_code' => 45, 'name' => 'Kisii',],
                ['county_code' => 46, 'name' => 'Nyamira',],
                ['county_code' => 47, 'name' => 'Nairobi',],
            )
        );
        //reset foreign key check
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
