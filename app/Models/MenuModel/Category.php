<?php

namespace App\Models\MenuModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MenuModel\Menu;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_title'];


    public function menu()
    {
    	return $this->hasMany(Menu::class);
    }
}
