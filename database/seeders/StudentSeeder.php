<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $student = User::where('email', 'student@gmail.com')->first();

        if ($student && !DB::table('students')->where('user_id', $student->id)->exists()) {
            DB::table('students')->insert([
                'user_id' => $student->id,
                'full_name' => 'Student A',
                'contact_no' => '0123456789',
                'matric_no' => '2411234',
                'kulliyyah' => 'KICT',
                'department' => 'Department of Information Systems',
                'specialisation' => null,
                'year' => 1,
                'semester' => 2,
            ]);
        }

        $student = User::where('email', 'student2@gmail.com')->first();

        if ($student && !DB::table('students')->where('user_id', $student->id)->exists()) {
            DB::table('students')->insert([
                'user_id' => $student->id,
                'full_name' => 'Student B',
                'contact_no' => '0134567892',
                'matric_no' => '2421234',
                'kulliyyah' => 'KICT',
                'department' => 'Department of Computer Science',
                'specialisation' => null,
                'year' => 1,
                'semester' => 1,
            ]);
        }
    }
}
