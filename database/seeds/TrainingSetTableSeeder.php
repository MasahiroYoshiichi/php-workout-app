<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\TrainingSet;
class TrainingSetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $filePath = storage_path() . '/masterData/training_set.csv';
        $records = read_csv_file($filePath);
        DB::transaction(function() use ($records) {
            TrainingSet::query() -> delete();
            foreach($records as $record) {
                TrainingSet::create($record);
            }
        });
    }
}
