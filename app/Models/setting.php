<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    public static function getSetting($id)
    {
        $Setting = setting::where('id', $id)->get();

        return $Setting;
    }

    public static function getKKM()
    {
        $KKM = setting::select('KKM')->first();

        return $KKM->KKM;
    }
}
