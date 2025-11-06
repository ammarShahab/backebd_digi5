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

         // packages data
        DB::table('domain_host_packages')->insert([

            [
                'name' => 'ল্যান্ডিং পেজ',
                'price' => 15000,
                'duration' => 'একবার',
                'popular' => false,
                'features' =>json_encode( ["১ পেজ ডিজাইন",
                "রেসপন্সিভ লেআউট",
                "কন্টাক্ট ফর্ম",
                "বেসিক SEO",
                "২ মাস সাপোর্ট",]),
                'span' => null,
            ],
            [
                'name' => 'বিজনেস ওয়েবসাইট',
                'price' => 35000,
                'duration' => '১ বছর',
                'popular' => true,
                'features' => json_encode( ["৫-৭ পেজ ডিজাইন",
                "কাস্টম ডিজাইন",
                "CMS ইন্টিগ্রেশন",
                "এডভান্স SEO",
                "ব্লগ সেকশন",
                "৬ মাস সাপোর্ট",]),
                'span' => null,
            ],
            [
                'name' => 'প্রিমিয়াম',
                'price' => 75000,
                'duration' => '১ মাস',
                'popular' => false,
                'features' => json_encode( [ "আনলিমিটেড পেজ",
                "প্রিমিয়াম ডিজাইন",
                "কাস্টম ফিচার",
                "মাল্টি-ল্যাঙ্গুয়েজ",
                "API ইন্টিগ্রেশন",
                "১ বছর সাপোর্ট",]),
                'span' => 2,
            ],

       ]);
    }
}
