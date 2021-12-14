<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\TrainingPoint;


class TrainingPointTableSeeder extends Seeder
{
    
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = storage_path() . '/masterData/training_point.csv';
        $records = read_csv_file($filePath);
        DB::transaction(function() use ($records) {
            TrainingPoint::query() -> delete();
            foreach($records as $record) {
                TrainingPoint::create($record);
            }
        });
        //
    }
}
