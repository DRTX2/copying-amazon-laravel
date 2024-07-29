<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
// pa las fechas
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    public function run(): void
    {
        
        //forany key
        $table->unsignedBigInteger('type_id');
        $table->foreign('type_id')->references('id')->on('type_users')->onDelete('restrict');

        User::create([
            "id"=>1,
            "name"=>"Pablo",
            "phone_number"=>"0996541312",
            "email_verified_at"=>"",
            "balance"=>1500.99,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
            // "type_id"=>,
            "email"=>"dadasf@gmail.com",
            "password"=>Hash::make("123456")
        ]);
        User::create([
            "id"=>2,
            "name"=>"Pedro",
            "email"=>"dadasf22@gmail.com",
            "password"=>Hash::make("123456")
        ]);
        User::create([
            "id"=>3,
            "name"=>"Juan",
            "email"=>"dadasf33@gmail.com",
            "password"=>Hash::make("123456")
        ]);
        User::create([
            "id"=>4,
            "name"=>"Alfonso",
            "email"=>"dadasf44@gmail.com",
            "password"=>Hash::make("123456")
        ]);
        //relacionarlo directamente 
        DB::table("role_user")->insert([
            "id"=>5,
            "role_id"=>2,
            "user_id"=>1,
            "added_by"=>"pepito"
        ]);
        
    }
}
