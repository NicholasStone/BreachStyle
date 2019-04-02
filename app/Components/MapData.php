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
            $datas[] = [
                'id' => $province->id,
                'name' => $province->name,
                'rate' => $rate,
            ];
        }
        return $datas;
    }
}