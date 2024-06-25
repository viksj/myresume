<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resumes';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'summary',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'education',
        'experience',
        'skills',
        'projects',
        'certifications',
    ];

    public function user() {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
