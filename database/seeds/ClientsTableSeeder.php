<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Card;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 10)->create()->each(function($client) {
            if ($client->flotilla == 1) {
                $client->cards()->save(factory(Card::class)->make());
            }
        });
    }
}
