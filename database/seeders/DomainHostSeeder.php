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


        DB::table('domain_host_features_title_desc')->insert([
            'title' => 'সার্ভিস ফিচার',
            'description' => 'আপনার ওয়েবসাইটের ভিত্তি তৈরি করুন আমাদের নির্ভরযোগ্য ডোমেইন ও হোস্টিং সার্ভিসের মাধ্যমে।',
            
        ]);


        DB::table('domain_host_features')->insert([

            [
                'title' => 'ডোমেইন রেজিস্ট্রেশন',
                'description' => 'আপনার ব্যবসার জন্য পছন্দের ডোমেইন নাম সহজে রেজিস্টার করুন।',
                'icon' => 'domainIcon_2',
            ],
            [
                'title' => 'ফাস্ট SSD হোস্টিং',
                'description' => 'SSD সার্ভারে দ্রুত ও নির্ভরযোগ্য ওয়েবসাইট পারফরম্যান্স।',
                'icon' => 'ssdIcon_2',
            ],
            [
                'title' => 'ফ্রি SSL সার্টিফিকেট',
                'description' => 'আপনার ওয়েবসাইটকে সুরক্ষিত রাখতে SSL সম্পূর্ণ ফ্রি।',
                'icon' => 'sslIcon_2',
            ],
            [
                'title' => '৯৯.৯% আপটাইম গ্যারান্টি',
                'description' => 'আপনার ওয়েবসাইট সবসময় অনলাইনে থাকবে – গ্যারান্টিযুক্ত।',
                'icon' => 'upIcon_2',
            ],
            [
                'title' => 'ইজি কন্ট্রোল প্যানেল',
                'description' => 'cPanel এর মাধ্যমে সহজে ফাইল, ইমেইল ও ডাটাবেস ম্যানেজ করুন।',
                'icon' => 'cpanelIcon_2',
            ],
            [
                'title' => '২৪/৭ কাস্টমার সাপোর্ট',
                'description' => 'লাইভ চ্যাট ও কল সাপোর্ট দিয়ে সর্বদা পাশে আছি।',
                'icon' => 'supportIcon_2',
            ],
           

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
