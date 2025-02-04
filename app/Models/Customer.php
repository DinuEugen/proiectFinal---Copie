<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'address',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
        }
}
