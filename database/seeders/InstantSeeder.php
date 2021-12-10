<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Instant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class InstantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/imgdata.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Instant::factory()->create(['img'=>$obj->img]);
        }    
    }
}
