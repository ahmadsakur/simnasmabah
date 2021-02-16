<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class finalNilai extends Model
{
    use HasFactory;

    protected $table = "final_nilai";

    public static function getNilai($id, $mapel)
    {
        //var
        $US = ujianSekolah::getNilai($id);
        $UP = ujianPraktek::getNilai($id);
        $setting = setting::first();
        $persenUS = $setting->presentase_US;
        $persenUP = $setting->presentase_UP;
        //algorythm
        if ($UP[$mapel] > 0) {
            $res = (($persenUS * $US[$mapel]) + ($persenUP * $UP[$mapel])) / ($persenUS + $persenUP);
        } else {
            $res = $US[$mapel];
        }

        return  $res;
    }
}
