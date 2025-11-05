<?php

namespace Database\Seeders;

use App\Models\WebdevHero;
use App\Models\WebdevPackages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WebdevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('webdev_heroes')->insert([
            'title' => 'আপনার ব্যবসার জন্য পেশাদার ওয়েবসাইট',
            'description' => 'আধুনিক ডিজাইন এবং সর্বশেষ প্রযুক্তি দিয়ে তৈরি আপনার ব্যবসার জন্য একটি সম্পূর্ণ ওয়েবসাইট সমাধান। দ্রুত, নিরাপদ এবং মোবাইল-ফ্রেন্ডলি।',
            'image' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=1200&q=80',
            'cta1' => 'শুরু করুন',
            'cta2' => 'আরও জানুন',
        ]);


        // packages data
       DB::table('webdev_packages')->insert([

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
                'duration' => 'একবার',
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
                'duration' => 'মাস',
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

       DB::table('webdev_portfolios')->insert([
        [
            'name'=> 'রেস্টুরেন্ট ওয়েবসাইট',
            'category'=> 'খাদ্য ও পানীয়',
            'image'=> 'https://i.ibb.co.com/xtzg3wg3/pexels-shkrabaanthony-5588983-1.jpg'

        ],
        [
            'name'=> 'শিক্ষা প্রতিষ্ঠান',
            'category'=> 'শিক্ষা',
            'image'=> 'https://i.ibb.co.com/HL4YSLT5/How-Term-Life-Supports-Mortgage-Protection.jpg'

        ],
        [
            'name'=> 'রিয়েল এস্টেট',
            'category'=> 'সম্পত্তি',
            'image'=> 'https://i.ibb.co.com/d0SSFcCz/amazing-dining-under.jpg'

        ]

       ]);
       
    }
}