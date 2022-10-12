<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company_name' => 'Trenitalia',
                'departure_station' =>'Ortona Centro',
                'arrival_station' =>'Lanciano Stazione',
                'departure_time'=>'12:00:00',
                'arrival_time'=>'12:45:00',
                'train_code'=>'97CA3',
                'wagons'=> rand(1,15),
                'in_time'=>rand(0,1),
                'canceled' =>rand(0,1),
            ],
            [
                'company_name' => 'Sangritana',
                'departure_station' =>'Pescara Nord',
                'arrival_station' =>'Teramo',
                'departure_time'=>'15:00:00',
                'arrival_time'=>'16:12:00',
                'train_code'=>'66BC8',
                'wagons'=> rand(1,15),
                'in_time'=>rand(0,1),
                'canceled' =>rand(0,1),
            ],
            [
                'company_name' => 'Tua',
                'departure_station' =>'Fonte Grande',
                'arrival_station' =>'Ortona Ospedale',
                'departure_time'=>'09:00:00',
                'arrival_time'=>'09:14:00',
                'train_code'=>'29VJ4',
                'wagons'=> rand(1,15),
                'in_time'=>rand(0,1),
                'canceled' => rand(0,1),
            ],

        ];

        foreach($trains as $train){

            $newTrain = new Train();

            $newTrain->company_name = $train['company_name'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->wagons = $train['wagons'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->canceled = $train['canceled'];

            
            $newTrain->save();

        }
    }
}
