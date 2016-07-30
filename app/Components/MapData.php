<?php
/**
 * Created by PhpStorm.
 * User: xicode
 * Date: 16-7-30
 * Time: 下午4:50
 */

namespace App\Components;


use App\Models\Province;

class MapData
{
    public static function getMapData()
    {
        $provinces = Province::all();
        foreach ($provinces as $province) {
            $province_through_university = $province->universities()->has('branches')->count();
            $province_university = $province->universities()->count();
            if ($province_university !== 0) {
                $decimal = round($province_through_university / $province_university, 4) * 100;
                $rate = $decimal . '%';
            } else {
                $decimal = '0';
                $rate = $decimal . '%';
            }
            if ($decimal >= '80') {
                $color = '0';
            } elseif ($decimal >= '60' && $decimal < '80') {
                $color = '1';
            } elseif ($decimal >= '40' && $decimal < '60') {
                $color = '2';
            } elseif ($decimal >= '20' && $decimal < '40') {
                $color = '3';
            } elseif ($decimal < '20') {
                $color = '5';
            }
            $datas[] = [
                'id' => $province->id,
                'name' => $province->name,
                'rate' => $rate,
                'color' => $color
            ];
        }
        return $datas;
    }
}