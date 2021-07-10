<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            
            'en_address'=>'Industrial Area Al-Harfeen C, Badr City , Egypt',
            'ar_address'=>'المنطقة الصناعية الحرفين ج ، مدينة بدر ، مصر',
            'phone'=>'+ 1100 8646 94',
            'mobile'=>'+ 1121 2212 08',
            'map_location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.0005909391!2d31.760706915117005!3d30.122796581853788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzDCsDA3JzIyLjEiTiAzMcKwNDUnNDYuNCJF!5e0!3m2!1sen!2seg!4v1622888177790!5m2!1sen!2seg',
            'email'=>'info@upvcp.com',
            'whatsapp'=>'https://api.whatsapp.com/message/D3OUQQSD3L4NM1',
            'header_en_address'=>'Badr City ,Egypt',
            'header_ar_address'=>'مدينة بدر - مصر',
            'header_phone'=>'+ 1100 8646 94',
            'header_mobile'=>'',
            'facebook_url'=>'https://www.facebook.com/Premierupvcsections',
            'linkedin_url'=>'https://www.linkedin.com/company/premier-upvc/mycompany/',
            'instgram_url'=>'https://www.instagram.com/premierupvceg/',
            
          
        ];
  
        
            Company::create($value);
       
    }
    
}
