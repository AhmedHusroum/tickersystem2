<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

public function user()
{
    return $this->hasOne(User::class);
}

}