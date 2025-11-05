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
                'name' => 'বেসিক',
                'price' => 5000,
                'duration' => 'মাস',
                'popular' => false,
                'features' =>json_encode( ['৫ পেজ', 'রেসপন্সিভ ডিজাইন', 'বেসিক এসইও', 'জ্বাল']),
                'span' => null,
            ],
            [
                'name' => 'স্ট্যান্ডার্ড',
                'price' => 10000,
                'duration' => 'মাস',
                'popular' => true,
                'features' => json_encode( ['১০ পেজ', 'রেসপন্সিভ ডিজাইন', 'অ্যাডভান্স এসইও', 'কন্টাক্ট ফর্ম']),
                'span' => null,
            ],
            [
                'name' => 'প্রিমিয়াম',
                'price' => 20000,
                'duration' => 'মাস',
                'popular' => false,
                'features' => json_encode( ['আনলিমিটেড পেজ', 'কাস্টম ডিজাইন', 'প্রিমিয়াম এসইও', 'ই-কমার্স']),
                'span' => 2,
            ],

       ]);



        // packages data
        /* $packages = [
            [
                'name' => 'বেসিক',
                'price' => 5000,
                'duration' => 'মাস',
                'popular' => false,
                'features' => ['৫ পেজ', 'রেসপন্সিভ ডিজাইন', 'বেসিক এসইও'],
                'span' => null,
            ],
            [
                'name' => 'স্ট্যান্ডার্ড',
                'price' => 10000,
                'duration' => 'মাস',
                'popular' => true,
                'features' => ['১০ পেজ', 'রেসপন্সিভ ডিজাইন', 'অ্যাডভান্স এসইও', 'কন্টাক্ট ফর্ম'],
                'span' => null,
            ],
            [
                'name' => 'প্রিমিয়াম',
                'price' => 20000,
                'duration' => 'মাস',
                'popular' => false,
                'features' => ['আনলিমিটেড পেজ', 'কাস্টম ডিজাইন', 'প্রিমিয়াম এসইও', 'ই-কমার্স'],
                'span' => 2,
            ],
        ];

        foreach ($packages as $package) {
            WebdevPackages::firstOrCreate(
                ['name' => $package['name']], // condition for uniqueness
                $package // the rest of the data to insert if not found
            );
        } */
    }
}