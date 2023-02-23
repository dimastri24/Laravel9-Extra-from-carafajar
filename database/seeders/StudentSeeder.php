<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->truncate();

        $data = ['toni', 'andy', 'amy'];

        foreach ($data as $value) {
            Student::create([
                'id' => Str::uuid(),
                'name' => $value,
            ]);
        }
    }
}
