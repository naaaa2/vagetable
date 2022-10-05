<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    protected $table = 'shoppings';
    protected $primaryKey = 'shopping_id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
      }

    protected $fillable = [
      'mustbuy',
      'user_id'
    ];
}
