<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Crud;
// use Illuminate\Support\Facades\DB;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json=file_get_contents('database/json/crud.json');
        $data=collect(json_decode($json));
        $data->each(function ($crud) {
            crud::create([
                'name' => $crud->name,
                'email' => $crud->email,
                'city' => $crud->city,
                'age' => $crud->age
            ]);
        });
    }
}
