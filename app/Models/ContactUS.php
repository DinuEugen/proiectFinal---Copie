<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    use HasFactory;
    protected $table = 'contacts_us';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        ];
}
