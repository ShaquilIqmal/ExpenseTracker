<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Category;



class Expense extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'expense';

    protected $guarded = [];

    public function category() //category_id is foreign key to 'expense_category' id
    {
        return $this->belongsTo(Category::class); //expense belongs to category
    }

    
}