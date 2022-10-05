<?php

namespace App\Services;

class VegeRegisterData
{

  public static function checkMethod($data){
    if($data->method === 0){
        $method = '冷凍';
      }
    if($data->method === 1){
        $method = '冷蔵';
      }
    if($data->method === 2){
        $method = '常温';
      }

      return $method;

  }
  
  public static function VegeName($data2){
    $vege_name = $data2->vege_name;
    //賞味期限表示
    if($data2->vege_name === 1){ 
        $vege_name = '枝豆';
      }
    if($data2->vege_name === 2){ 
        $vege_name = 'オクラ';
      }
    if($data2->vege_name === 3){ 
        $vege_name = 'カボチャ';
      }
    if($data2->vege_name === 4){ 
        $vege_name = 'きゅうり';
      }
    if($data2->vege_name === 5){ 
        $vege_name = 'ゴーヤ';
      }
    if($data2->vege_name === 6){ 
        $vege_name = 'さやいんげん';
      }
    if($data2->vege_name === 7){ 
        $vege_name = 'さやえんどう';
      }
    if($data2->vege_name === 8){ 
        $vege_name = 'ズッキーニ';
      }
    if($data2->vege_name === 9){ 
        $vege_name = 'そら豆';
      }
    if($data2->vege_name === 10){ 
        $vege_name = 'とうもろこし';
      }
    if($data2->vege_name === 11){ 
        $vege_name = 'トマト';
      }
    if($data2->vege_name === 12){ 
        $vege_name = 'なす';
      }
    if($data2->vege_name === 13){ 
        $vege_name = 'ピーマン';
      }
    if($data2->vege_name === 14){ 
        $vege_name = 'もやし';
      }
    if($data2->vege_name === 15){ 
        $vege_name = 'アスパラガス';
      }
    if($data2->vege_name === 16){ 
        $vege_name = 'カリフラワー';
      }
    if($data2->vege_name === 17){ 
        $vege_name = 'キャベツ';
      }
    if($data2->vege_name === 18){ 
        $vege_name = '小松菜';
      }
    if($data2->vege_name === 19){ 
        $vege_name = '春菊';
      }
    if($data2->vege_name === 20){ 
        $vege_name = 'セロリ';
      }
    if($data2->vege_name === 21){ 
        $vege_name = '玉ねぎ';
      }
    if($data2->vege_name === 22){ 
        $vege_name = 'ちんげん菜';
      }
    if($data2->vege_name === 23){ 
        $vege_name = 'にら';
      }
    if($data2->vege_name === 24){ 
        $vege_name = 'ニンニク';
      }
    if($data2->vege_name === 25){ 
        $vege_name = '長ネギ';
      }
    if($data2->vege_name === 26){ 
        $vege_name = '青ネギ';
      }
    if($data2->vege_name === 27){ 
        $vege_name = '白菜';
      }
    if($data2->vege_name === 28){ 
        $vege_name = 'ブロッコリー';
      }
    if($data2->vege_name === 29){ 
        $vege_name = 'ほうれん草';
      }
    if($data2->vege_name === 30){ 
        $vege_name = '水菜';
      }
    if($data2->vege_name === 31){ 
        $vege_name = 'モロヘイヤ';
      }
    if($data2->vege_name === 32){ 
        $vege_name = 'レタス';
      }
    if($data2->vege_name === 33){ 
        $vege_name = 'かぶ';
      }
    if($data2->vege_name === 34){ 
        $vege_name = 'ごぼう';
      }
    if($data2->vege_name === 35){ 
        $vege_name = 'さつまいも';
      }
    if($data2->vege_name === 36){ 
        $vege_name = '里芋';
      }
    if($data2->vege_name === 37){ 
        $vege_name = 'じゃがいも';
      }
    if($data2->vege_name === 38){ 
        $vege_name = '生姜';
      }
    if($data2->vege_name === 39){ 
        $vege_name = '大根';
      }
    if($data2->vege_name === 40){ 
        $vege_name = '長芋';
      }
    if($data2->vege_name === 41){ 
        $vege_name = 'にんじん';
      }
    if($data2->vege_name === 42){ 
        $vege_name = 'レンコン';
      }
    return $vege_name;

    }
    public static function limit($data2){
      $bestby = $data2->bestby;
      //賞味期限表示
      if($data2->vege_name === 1){ 
          $bestby = '常温：×  冷蔵:1〜2日　冷凍：2ヶ月,枝をわずかに残して切り、新聞紙に包んでポリ袋に入れ、冷蔵室で保存。';
        }
      if($data2->vege_name === 2){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 3){ 
          $bestby = '常温：２〜３ヶ月  冷蔵：１週間　冷凍：１ヶ月
                    新聞紙で丸ごと包み、室内の風通しの良い冷暗所で保存。
                    カットしたものは種とワタを取り除き、切り口にびっちりラップをして野菜室に保存。';
        }
      if($data2->vege_name === 4){ 
          $bestby = '常温：1〜２日  冷蔵：１ヶ月　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 5){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 6){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 7){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 8){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 9){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 10){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 11){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 12){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 13){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 14){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 15){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 16){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 17){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 18){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 19){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 20){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 21){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 22){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 23){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 24){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 25){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 26){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 27){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 28){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 29){ 
          $vege_name = 'ほうれん草';
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 30){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 31){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 32){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 33){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 34){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 35){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 36){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 37){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 38){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 39){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 40){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 41){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      if($data2->vege_name === 42){ 
          $bestby = '常温：1日  冷蔵：３〜４日　冷凍：１ヶ月
                     ペーパータオルで包んでポリ袋に入れ、野菜室で保存。';
        }
      return $bestby;
  
      }
 }