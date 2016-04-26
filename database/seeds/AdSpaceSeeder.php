<?php

use Illuminate\Database\Seeder;

class AdSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; ++$i) {
            DB::table('ads')->insert(['ad_href' => '#', 'ad_image_file_name' => 'img' . $i . '.jpg',
                'ad_image_file_mime' => 'image/png', 'ad_is_empty' => true]);
        }
    }
}
