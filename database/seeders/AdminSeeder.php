<?php
 namespace Database\Seeders;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

//  class AdminSeeder extends Seeder
//  {
//      /**
//       * Run the database seeds.
//       *
//       * @return void
//       */
//      public function run()
//      {
//          Admin::create([
//              'name' => 'Default Admin',
//              'email' => 'admin@dev.com',
//              'password' => 'admin@dev.com',
//          ]);
//      }
//  }

 class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::firstOrCreate(
            ['email' => 'admin@dev.com'], // condition to check existing record
            [
                'name' => 'Default Admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}