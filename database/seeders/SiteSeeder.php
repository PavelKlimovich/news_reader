<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'name'              => 'Capital',
            'url'               => 'https://www.capital.fr',
            'google_news_url'   => 'https://www.capital.fr/sitemap-google-news.xml',
            'category_id'       => Category::where('name','Economie')->first()->id,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
