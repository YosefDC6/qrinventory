<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','category_id','user_id','cost','stock'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function qrcode()
    {
        return $this->hasOne(Qrcode::class);
    }
    
    public function movements()
    {
        return $this->hasMany(StockMovement::class);
    }
}