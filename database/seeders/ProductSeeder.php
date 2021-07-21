<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
            
                'name'=>' Product Name 1',
            "price"=>"$1500.00",
            "description"=>"Flight Time: 31
             minutesCamera: 4K/30 fpsSmartphone
              Controlled: YesFAA 
              Registration: Not requiredIndoor Use
             NoRotors: 4 (2 blades per rotor, replaceable)Size (unfolded): 9.6 x 11.4 x 2.1 inchesWeight: 8.8 ounces",
            "gallery"=>"frontend/assets/products/product-1.jpg"
            
            ],
            
            [
            
                'name'=>' Product Name2 ',
            "price"=>"$150.00",
            "description"=>"Flight Time: 34 minutes
            Camera: 4K/60 fpsSmartphone Controlled: YesFAA 
            Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)Size (folded): 7.1 x 3.8 x 3.3 inchesSize (unfolded: 9.96 x 7.2 x 3 inchesWeight: 1.25 pounds",
            "gallery"=>"frontend/assets/products/product-2.jpg"
            
            ],
            [
            
                'name'=>' Product Name 3',
            "price"=>"$1501.00",
            "description"=>"Flight Time: 3-5 minutes
            Camera: 720pSmartphone Controlled: OptionalFAA 
            Registration: Not RequiredIndoor Use
             YesRotors: 4 (2 blades per rotor, replaceable)Size: 6 x 6 x 1.3 inchesWeight: 3 ounces",
            "gallery"=>"frontend/assets/products/product-3.jpg"
            
            ],
            [
            
                'name'=>' Product Name4 ',
            "price"=>"$123.00",
            "description"=>"Flight Time: 31 minutes
            Camera: 4K/30 fpsSmartphone Controlled: YesFAA 
            Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)Size: 12.7 x 9.5 x 3.3 inchesWeight: Pro: 32 ounces; Zoom: 31.9 ounces",
            "gallery"=>"frontend/assets/products/product-4.jpg"
            
            ],
            
            [
            
                'name'=>' Product Name 5',
            "price"=>"$452.00",
            "description"=>"Flight Time: 31 minutes
            Camera: 4K/30 fpsSmartphone Controlled: YesFAA 
            Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)",
            "gallery"=>"frontend/assets/products/product--5.jpg"
            
            ],
            [
            
                'name'=>' Product Name6 ',
            "price"=>"$111.00",
            "description"=>"Flight Time: 31 minutes
            Camera: 4K/30 fpsSmartphone Controlled: YesFAA 
            Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)",
            "gallery"=>"frontend/assets/products/product-6.jpg"
            
            ],
            [
            
                'name'=>' Product Name 7',
            "price"=>"$21.00",
            "description"=>"Flight Time: 31 minutes 
            Camera: 5.4K/30 fpsFAA 
            Registration: RequiredIndoor Use: 
            NoRotors: 4 (3 blades per rotor, replaceable)Size (folded): 7.1 x 3.8 x 3.1 inchesSize (unfolded: 10 x 7.2 x 3 inchesWeight: 1.3 pounds",
            "gallery"=>"frontend/assets/products/product-7.jpg"
            
            ],
            
            [
            
                'name'=>' Product Name 8',
            "price"=>"$44.00",
            "description"=>"Flight Time: 20 minutes
            Camera: 4K/60 fpsSmartphone 
            Controlled: NoFAA Registration: RequiredIndoor 
            Use: NoRotors: 4 (3 blades per rotor, replaceable)Size: 12.2 x 10 x 5 inchesWeight: 1.8 pounds",
            "gallery"=>"frontend/assets/products/product-8.jpg"
            
            ],
            [
            
                'name'=>' Product Name 9 ',
            "price"=>"$45.00",
            "description"=>"Flight Time: 25 minutes
            Camera: 4K/30 fpsSmartphone Controlled: YesFAA
             Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)Size: 18 x 18 inches x 4 inchesWeight: 1.9 pounds",
            "gallery"=>"frontend/assets/products/product-9.jpg"
            
            ],
            [
            
                'name'=>' Product Name 10',
            "price"=>"$150.00",
            "description"=>"Flight Time: 31 minutes
            Camera: 5.4K/30 fpsFAA Registration: 
            RequiredIndoor Use: NoRotors: 4 (3 blades per rotor, replaceable)Size (folded): 7.1 x 3.8 x 3.1 inchesSize (unfolded: 10 x 7.2 x 3 inchesWeight: 1.3 pounds",
            "gallery"=>"frontend/assets/products/product-10.jpg"
            
            ],
            
            [
            
                'name'=>' Product Name 11',
            "price"=>"$77.00",
            "description"=>"Flight Time: 25 minutes
            Camera: 4K/30 fpsSmartphone Controlled: YesFAA 
            Registration: RequiredIndoor Use: NoRotors: 4 (2 blades per rotor, replaceable)Size: 10.8 x 3.5 x 3 inchesWeight: 1.9 pounds",
            "gallery"=>"frontend/assets/products/product-11.jpg"
            
            ],
            [
            
                'name'=>' Product Name12 ',
            "price"=>"$43.00",
            "description"=>"Flight Time: 31 minutes
            Camera: 5.4K/30 fpsFAA Registration: 
            RequiredIndoor Use: NoRotors: 4 (3 blades per rotor, replaceable)Size (folded): 7.1 x 3.8 x 3.1 inchesSize (unfolded: 10 x 7.2 x 3 inchesWeight: 1.3 pounds",
            "gallery"=>"frontend/assets/products/product-12.jpg"
            
            ],



        ]);
    }
}
