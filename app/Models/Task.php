<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'description', 'long_description'];
    // do not give sensitive information into fillable like passwords
    // protected $guarded = ['secret'];  fillable kinda safer


    public function toggleComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }

}


// public function getRouteKeyName()
// {
//     return 'slug';
// }

 //the slug model