<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pqrsf extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_pqrsf',
        'type_document',
        'document',
        'first_name',
        'second_name',
        'first_last_name',
        'second_last_name',
        'phone_number',
        'email',
        'date_of_birth',
        'reason',
        'detail',
        'supports',
        'answered',
    ];
}
