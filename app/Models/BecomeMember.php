<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomeMember extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_email',
        'pan_number',
        'register_file',
    ];
}
