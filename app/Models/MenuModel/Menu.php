<?php

namespace App\Models\MenuModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuModel\Category;


class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','image','description','price'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
