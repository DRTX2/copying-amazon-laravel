<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeUser;

class TypeUserSeeder extends Seeder
{
    public function run(): void
    {
        TypeUser::create([
            "id"=>1,
            "name"=>"Administrator",
        ]);
        TypeUser::create([
            "id"=>2,
            "name"=>"Buyer",
        ]);
        TypeUser::create([
            "id"=>3,
            "name"=>"Salesperson",
        ]);
    }
}
