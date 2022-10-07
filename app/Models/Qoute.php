<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_qoute',
        'date',
        'time',
        'inactive',
        'office',
        'td_doctor',
        'document_doctor',
        'td_patient',
        'document_patient',
    ];
}
