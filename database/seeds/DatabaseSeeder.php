<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Models\Proof;
use App\Models\Question;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        //$this->call(ProofsTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
		//DB:table
        //$faker= Faker::create();
        //DB:table('proofs')->delete();
       // DB:table('questions')->delete();
        //for ($i=1; $i<10; $i+1) {
            //User::create(['descricao'=> $faker->name,  'tipo' => 'D','peso'=> $i, 'imagem'=> $faker->binary, 'user_id'=> 2+1]);
        //}

        /*for ($i=1; $i < 10 ; $i+1) {
            Proof::create(['tipo_de_prova' => 'PV' , 'user_id' => 1]);
        }*/

        //for ($i=1; $i<10; $i+1) {
            Question::create(['descricao'=> 'bolo ou pacoca?',  'tipo' => 'D','peso'=> '2', 'imagem'=> 'okok', 'user_id'=> '1']);
        //}
  
            //php artisan db:seed
        
        //$faker->name
       dd(Question::all());


     /*   if (!empty($this)) {
            $this->comand->info('DONE!');
        }
*/
    }
}
