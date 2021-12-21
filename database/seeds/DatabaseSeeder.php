<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $filePath = storage_path() . '/masterData/training_group.csv';
        $records = read_csv_file($filePath);
        DB::transaction(function() use ($records) {
            TrainingGroup::query() -> delete();
            foreach($records as $record) {
                TrainingGroup::create($record);
            }
        });
    }
}
