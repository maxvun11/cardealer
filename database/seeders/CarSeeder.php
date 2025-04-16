<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['brandName' => 'TOYOTA', 'description'=> 'One of the most well known Japanese Brand'],
            ['brandName' => 'NISSAN', 'description'=> 'Well known for its JDM Sport Cars'],
            ['brandName' => 'FERRARI',  'description'=> 'Europe Most Wanted'],
            ['brandName' => 'FORD', 'description'=> 'The American Flag'],
        ]);

        
        DB::table('car_categories')->insert([
            ['categoryName' => 'Supra','imageURL' => 'https://www.pixground.com/wp-content/uploads/2023/08/Toyota-GR-Supra-3.0-MT-4K-Wallpaper-1081x608.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 1],
            ['categoryName' => 'Corolla', 'imageURL' =>'https://www.hdcarwallpapers.com/thumbs/2023/toyota_corolla_sedan_nightshade_edition_2024_8k-t2.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 1],
            ['categoryName' => 'Camry', 'imageURL' => 'https://wallpapercat.com/w/full/7/7/7/1670076-3840x2160-desktop-4k-toyota-camry-wallpaper-photo.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 1],
            ['categoryName' => 'Hilux','imageURL' => 'https://images.alphacoders.com/101/thumb-1920-1010856.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 1],
            ['categoryName' => 'NSX Acura','imageURL' => 'https://images6.alphacoders.com/815/815344.jpg' , 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 2],
            ['categoryName' => 'GTR R-34','imageURL' =>'https://images6.alphacoders.com/503/thumb-1920-503717.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 2],
            ['categoryName' => 'Fairlady','imageURL' => 'https://wallpapercave.com/wp/wp6926985.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 2],
            ['categoryName' => 'Skyline', 'imageURL' => 'https://images7.alphacoders.com/120/thumb-1920-1200438.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 2],
            ['categoryName' => 'F40', 'imageURL' => 'https://images3.alphacoders.com/576/thumb-1920-576239.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 3],
            ['categoryName' => 'Moderna', 'imageURL' =>'https://cdn.rmsothebys.com/5/e/4/8/d/2/5e48d27ea550efc84c8836ae31be9f5e0f5d1df1.webp',  'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 3],
            ['categoryName' => 'Italia', 'imageURL' => 'https://www.funcars.biz/wp-content/uploads/2023/07/1684959048-ferrari-458-002.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 3],
            ['categoryName' => 'Laferarri','imageURL' => 'https://cdn.ferrari.com/cms/network/media/img/resize/6673fe6251b1d700111f8d73-laferrari_20240627_cover_1300x730_v2','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 3],
            ['categoryName' => 'Mustang', 'imageURL' => 'https://images2.alphacoders.com/250/thumb-1920-250920.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 4],
            ['categoryName' => 'Hellcat', 'imageURL' =>'https://images.alphacoders.com/599/thumb-1920-599420.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 4],
            ['categoryName' => 'GT', 'imageURL' => 'https://images4.alphacoders.com/139/thumb-1920-1391093.jpg','brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf', 'brand_id' => 4],
            ['categoryName' => 'Focus', 'imageURL' => 'https://images3.alphacoders.com/273/thumb-1920-273045.jpg', 'brochureLink' => 'https://www.toyota.com.my/content/dam/malaysia/model-brochures/brochures/GR-Supra-2023-Brochure.pdf','brand_id' => 4],
        ]);

        
        DB::table('car_models')->insert([
            ['modelName' => 'Toyota Supra A/T', 'description' => '8-speed ZF automatic with paddle shifters', 'description2' => 'Smooth, effortless, and quicker shifts','description3' => 'Slightly heavier weight due to complex automatic system' ,'car_categories_id' => 1],
            ['modelName' => 'Toyota Supra M/T',  'description' => '6-speed manual with rev-matching', 'description2' => 'Engaging, hands-on driving with full control','description3' => 'Slightly lighter weight due to simpler transmission' , 'car_categories_id' => 1],
        ]);
    }
}
