<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    $url = storage_path() . '/public/cities.json';
    $json_string = file_get_contents($url);
    $dict_aa = json_decode ($json_string,true);
    $data = array();

    foreach ($dict_aa as $key => $value)
        {
        $unit_aa = new someclass();
        $unit_aa->id = $key;
        $unit_aa->name = $value["name"];
        $unit_aa->population = $value["population"];
        $unit_aa->date_mod = $value["date_mod"];
        array_push($data,$unit_aa);
        }
    return $data;
}
