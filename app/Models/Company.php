<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function expenses() {
        return $this->hasMany(Expense::class);
    }
}
