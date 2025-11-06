<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomainHostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // Hero Data
        DB::table('domain_host_heroes')->insert([
            'title' => 'ডোমেইন ও হোস্টিং সার্ভিস',
            'description' => 'আপনার ওয়েবসাইটের ভিত্তি তৈরি করুন আমাদের নির্ভরযোগ্য ডোমেইন ও হোস্টিং সার্ভিসের মাধ্যমে।',
            'image' => 'https://images...',
            /* 'cta1' => 'প্রজেক্ট শুরু করুন →',
            'cta2' => 'পোর্টফোলিও দেখুন →', */
        ]);
    }
}
