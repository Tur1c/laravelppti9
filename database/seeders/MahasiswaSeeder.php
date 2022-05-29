<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 50; $i++) {
            DB::table("mahasiswas")->insert([
                "nim" => $faker->randomNumber($nbDigits = 8, $strict = false),
                "nama_lengkap" => $faker->name,
                "tempat_lahir" => $faker->city,
                "tanggal_lahir" => $faker->date("Y-m-d"),
                "alamat" => $faker->address,
                "fakultas" => $faker->company,
                "jurusan" => $faker->company
            ]);
        }
    }
}
