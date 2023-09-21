<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;


    protected $table = 'menu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'manu_id', 
        'product_image',                                            
        'product_name',                                               
        'product_image',                                                   
        'price',                                                      
        'created_at',                                               
        'updated_at',
    ];

    public $timestamps = true;
    
}