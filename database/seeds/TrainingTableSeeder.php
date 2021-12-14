<?php

use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $filePath = storage_path() . '/masterData/training.csv';
        $records = read_csv_file($filePath);
        DB::transaction(function() use ($records) {
            Training::query() -> delete();
            foreach($records as $record) {
                Training::create($record);
            }
        });
        //
    }
}
