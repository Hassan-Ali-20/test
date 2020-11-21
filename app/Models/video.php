<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //protected $table ="Offers"; //to name table
    protected $fillable = ["name", "viewers"]; // االاعمده التي يمكن الاضافه لها والتعديل عليها
    // هنا معناه ماتظهر في جمله السيلكت يعني يمكن اننا نيف بيانات لها لاكن يتم استثناءها من السيلكت
    public $timestamps=false;
}
