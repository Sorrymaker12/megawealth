<?php

namespace Database\Seeders;

use App\Models\RealEstate;
use Illuminate\Database\Seeder;

class RealEstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create real estates
        // 1 to 10
        RealEstate::create([
            'location' => 'Milan',
            'type' => 'House',
            'sales_type' => 'Rent',
            'price' => 10000000,
            'image' => 'https://architecturebeast.com/wp-content/uploads/2018/04/Simple-modern-house-with-an-amazing-floating-stairs-Architecture-Beast-33-main-min-2-min.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Paris',
            'type' => 'House',
            'sales_type' => 'Rent',
            'price' => 11000000,
            'image' => 'https://architecturebeast.com/wp-content/uploads/2018/04/Simple-modern-house-with-an-amazing-floating-stairs-Architecture-Beast-28-min.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'London',
            'type' => 'House',
            'sales_type' => 'Rent',
            'price' => 12000000,
            'image' => 'https://i.pinimg.com/originals/ad/3c/aa/ad3caa4acea87354ed9d8432af7cbc11.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Monaco',
            'type' => 'House',
            'sales_type' => 'Rent',
            'price' => 13000000,
            'image' => 'https://archello.s3.eu-central-1.amazonaws.com/images/2018/05/11/tobiarchitects1.1526035990.6946.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Doha',
            'type' => 'House',
            'sales_type' => 'Rent',
            'price' => 14000000,
            'image' => 'https://www.mydomaine.com/thmb/LhwJEsBuRKPcFOhlKbig422LrK4=/2048x1536/filters:fill(auto,1)/SuCasaDesign-Modern-9335be77ca0446c7883c5cf8d974e47c.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Abu Dhabi',
            'type' => 'House',
            'sales_type' => 'Buy',
            'price' => 15000000,
            'image' => 'https://cdn.houseplansservices.com/product/6ek8jns2uvt3p24kbigoctc4ih/w800x533.jpg?v=13',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Phoenix',
            'type' => 'House',
            'sales_type' => 'Buy',
            'price' => 16000000,
            'image' => 'https://cdn1.epicgames.com/ue/product/Screenshot/ForestHouse0-1920x1080-c854bb9b293be858a30a60776f486f6c.jpg?resize=1&w=1920',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Los Angeles',
            'type' => 'House',
            'sales_type' => 'Buy',
            'price' => 17000000,
            'image' => 'https://image.digitalinsightresearch.in/uploads/imagelibrary/Archive/Main/01_Casa%20Cruzada.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Las Vegas',
            'type' => 'House',
            'sales_type' => 'Buy',
            'price' => 18000000,
            'image' => 'http://cdn.home-designing.com/wp-content/uploads/2017/05/wood-white-and-charcoal-modern-exterior-paint-themes.jpg',
            'status' => 'Available',
        ]);
        RealEstate::create([
            'location' => 'Dallas',
            'type' => 'House',
            'sales_type' => 'Buy',
            'price' => 19000000,
            'image' => 'https://images.adsttc.com/media/images/6233/1933/24a2/8301/69ea/797b/newsletter/2fd74fa5-4d7b-4172-97a6-abd4ab2171f1.jpg?1647516014',
            'status' => 'Available',
        ]);
    }
}
