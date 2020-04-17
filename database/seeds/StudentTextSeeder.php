<?php

use App\StudentText;
use Illuminate\Database\Seeder;

class StudentTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StudentText::class, 10)->create();
    }
}
