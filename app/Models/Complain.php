<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'request_id',
        'head_line',
        'details',
        'branch_name',
        'branch_code',
        'occur_time',
        'file',
        'request_type',
        'priority',
        'problem_url',
        'contact_persone',
        'phone',
        'status',
    ];
}
