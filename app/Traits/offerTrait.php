<?php
namespace App\Traits;
Trait offerTrait

{

     function saveitem($image, $folder)
    {
        $ran = rand(0, 900) . rand(0, 100) . rand(9, 200);
        $file = $image->getclientOriginalExtension(); //get extension like mp4 or jpg
        $file_name = date("Y-m-d-H:i:s-") . $ran . '.' . $file;
        $path = $folder;
        $image->move($path, $file_name);
        return $file_name;
    }

}
