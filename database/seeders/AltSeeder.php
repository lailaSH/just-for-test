<?php

namespace Database\Seeders;

use App\Models\Alt;
use Database\Factories\AltFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[];
        // $name=collect(Str::random(5));
        // dd($name);
        // $slug=collect([Str::random(16),Str::random(12),Str::random(7)]);

        // for( $i=0;$i<10;$i++){
        // DB::table('alts')->insert([
        //     'name' => Str::random(10),
        //     'slug' => Str::random(10),
        // ]);
        // }

      //          for( $i=0;$i<3;$i++){

      //            $data[]
      //              =[
      //                'name'=>Str::random(5),
      //                'slug'=>Str::random(8)
      //              ];
      //          }

      //  foreach($data as $alt){
      //      Alt::create($alt);
      

      Alt::factory()->count(50)->create(['text'=>'text']);

    }}

