<?php

class ConditionsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('conditions')->delete();

        $conditions = array(
                array(
                        'id' => '1',
                        'name' => 'Clouds-NoObs',
                ),
                array(
                        'id' => '2',
                        'name' => 'Rain-NoObs',
                ),
                array(
                        'id' => '3',
                        'name' => 'Snow-NoObs',
                ),
                array(
                        'id' => '4',
                        'name' => 'To windy-NoObs',
                ),
                array(
                        'id' => '5',
                        'name' => 'Poor-ObsDone',
                ),
                array(
                        'id' => '6',
                        'name' => 'Good-ObsDone',
                ),
                array(
                        'id' => '7',
                        'name' => 'VeryGood-ObsDone',
                ),
        );

        // Uncomment the below to run the seeder
        DB::table('conditions')->insert($conditions);
    }

}