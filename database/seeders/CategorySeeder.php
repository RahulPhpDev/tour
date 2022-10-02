<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Camp & Adventure Tours', 
'Family & Group Tours',
 'Famous Short Tours',
  'Hill Tours',
   'Historical & Cultural Tours', 'Honeymoon Tours' , 'Religious & Spiritual Tours' , 'Village & Nature Tours' , 'Water & Beaches Tours' , 'Weekend Tours' , 'Wildlife Tours' , 'Yoga & Meditation Tours' 
        ];
        foreach($data as $val) {
            // dd($val);
            Category::create(['type' =>$val]);
        }
    }
}
