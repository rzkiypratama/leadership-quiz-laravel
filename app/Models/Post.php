<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     *
     * @var string
     */
    protected $table = 'wpvrk_quiz_3';
    // Use 'test' table if you want to test the model without affecting the actual data

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'phone_number',
        'school',
        'grade',
        'email_address',
        'interest_major',
        'result',
        'date_time',
    ];
}
