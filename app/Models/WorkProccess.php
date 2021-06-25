<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'complain_id', 'request_id', 'message', 'resolving_date'
    ];
}
