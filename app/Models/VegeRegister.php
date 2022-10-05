<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\VegeRegisterData;

    class VegeRegister extends Model
{
    use HasFactory;
    protected $table = 'veges';
    protected $primaryKey = 'vege_id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
      }

    protected $fillable = [
        'vege_name',
        'date_purchase',
        'method',
        'quantity',
        'user_id'
    ];

    public function getVegeNamesAttribute()
    {
        switch($this->attributes['vege_name']) {
            case 1;
                return '枝豆';
            case 2;
                return 'オクラ';
            case 3;
                return 'カボチャ';
            case 4;
                return 'きゅうり';
            case 5;
                return 'ゴーヤ';
            case 6;
                return 'さやいんげん';
            case 7;
                return 'さやえんどう';
            case 8;
                return 'ズッキーニ';
            case 9;
                return 'そら豆';
            case 10;
                return 'とうもろこし';
            case 11;
                return 'トマト';
            case 12;
                return 'なす';
            case 13;
                return 'ピーマン';
            case 14;
                return 'もやし';
            case 15;
                return 'アスパラガス';
            case 16;
                return 'カリフラワー';
            case 17;
                return 'キャベツ';
            case 18;
                return '小松菜';
            case 19;
                return '春菊';
            case 20;
                return 'セロリ';
            case 21;
                return '玉ねぎ';
            case 22;
                return 'ちんげん菜';
            case 23;
                return 'にら';
            case 24;
                return 'ニンニク';
            case 25;
                return '長ネギ';
            case 26;
                return '青ネギ';
            case 27;
                return '白菜';
            case 28;
                return 'ブロッコリー';
            case 29;
                return 'ほうれん草';
            case 30;
                return '水菜';
            case 31;
                return 'モロヘイヤ';
            case 32;
                return 'レタス';
            case 33;
                return 'かぶ';
            case 34;
                return 'ごぼう';
            case 35;
                return 'さつまいも';
            case 36;
                return '里芋';
            case 37;
                return 'じゃがいも';
            case 38;
                return '生姜';
            case 39;
                return '大根';
            case 40;
                return '長芋';
            case 41;
                return 'にんじん';
            case 42;
                return 'レンコン';
            default:
                return '??';
        }
    }

    public function getMethodsAttribute()
    {
        switch($this->attributes['method']) {
            case 0;
                return '冷凍';
            case 1;
                return '冷蔵';
            case 2;
                return '常温';
            default:
                return '??';
        }
    }

}
