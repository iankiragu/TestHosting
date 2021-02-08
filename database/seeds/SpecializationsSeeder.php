<?php

use Illuminate\Database\Seeder;

class SpecializationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->insert([
            ['name'=>'Psychologist'],
            ['name'=>'Psychiatrist'],
            ['name'=>'Psychoanalyst'],
            ['name'=>'Mental Health Counsellor'],
            ['name'=>'Psychotherapist'],

        ]);
    }
}
