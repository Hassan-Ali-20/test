<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
   protected $table ="Offers";
   protected $fillable=["name","details", "price", 'image',"created_at","update_at"]; // االاعمده التي يمكن الاضافه لها والتعديل عليها
   protected $hidden=["created_at","update_at"];// هنا معناه ماتظهر في جمله السيلكت يعني يمكن اننا نيف بيانات لها لاكن يتم استثناءها من السيلكت
//    public $timestamps=false


}
