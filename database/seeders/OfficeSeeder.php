<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 to 10
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office A',
            'image' => 'https://images.adsttc.com/media/images/6201/6b87/44ba/f701/6424/bce1/large_jpg/pir-exterior-kyrre-sundal-13.jpg?1644260270',
            'address' => '123 Main Street',
            'contact_name' => 'John Doe',
            'phone_number' => '123-456-7890',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office B',
            'image' => 'https://www.property-forum.eu/feltoltesek/cikkek/7162/1500/eq2_warynski-834.jpg',
            'address' => '234 Main Street',
            'contact_name' => 'Mark Doe',
            'phone_number' => '123-456-7891',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office C',
            'image' => 'https://images.adsttc.com/media/images/6053/5eaf/f91c/8187/aa00/0486/large_jpg/YMS_0001.jpg?1616076378',
            'address' => '345 Main Street',
            'contact_name' => 'Jane Doe',
            'phone_number' => '123-456-7892',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office D',
            'image' => 'https://images.unsplash.com/photo-1574958269340-fa927503f3dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b2ZmaWNlJTIwYnVpbGRpbmd8ZW58MHx8MHx8&w=1000&q=80',
            'address' => '456 Main Street',
            'contact_name' => 'Michael Doe',
            'phone_number' => '123-456-7893',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office E',
            'image' => 'https://archello.s3.eu-central-1.amazonaws.com/images/2020/11/23/tchoban-voss-architekten-spreeoffice-office-building-offices-archello.1606113057.6458.jpg',
            'address' => '345 Main Street',
            'contact_name' => 'Bryan Doe',
            'phone_number' => '123-456-7894',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office F',
            'image' => 'https://images.unsplash.com/photo-1593054538306-3e61b738a10c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG9mZmljZSUyMGJ1aWxkaW5nfGVufDB8fDB8fA%3D%3D&w=1000&q=80',
            'address' => '567 Main Street',
            'contact_name' => 'George Doe',
            'phone_number' => '123-456-7895',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office G',
            'image' => 'https://imageio.forbes.com/specials-images/imageserve/5ee3a915d8bc730007cc76b3/0x0.jpg?format=jpg&width=1200',
            'address' => '789 Main Street',
            'contact_name' => 'Mohamed Doe',
            'phone_number' => '123-456-7896',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office H',
            'image' => 'https://www.property-forum.eu/feltoltesek/cikkek/5061/1500/fod-131.jpg',
            'address' => '901 Main Street',
            'contact_name' => 'Lewandowski Doe',
            'phone_number' => '123-456-7897',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office I',
            'image' => 'https://image.architonic.com/prj2-3/20137273/elkus-manfredi-architects-pier-4-office-building-architonic-2-magdabiernat-02-arcit18.jpg',
            'address' => '332 Main Street',
            'contact_name' => 'Rick Doe',
            'phone_number' => '123-456-7898',
        ]);
        Office::create([
            'id' => Str::uuid(),
            'office_name' => 'Office J',
            'image' => 'https://i.pinimg.com/originals/41/50/ba/4150ba7a3b9fe74626533a8b43b32e3d.jpg',
            'address' => '433 Main Street',
            'contact_name' => 'Evan Doe',
            'phone_number' => '123-456-7899',
        ]);
    }
}
