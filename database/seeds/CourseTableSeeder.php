<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = storage_path() . '/masterData/course.csv';
        $records = read_csv_file($filePath);
        DB::transaction(function() use ($records) {
            Course::query() -> delete();
            foreach($records as $record) {
                Course::create($record);
            }
        });
        //
    }
}
