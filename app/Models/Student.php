<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    protected $fillable = [
        'username','student_first_name','student_last_name','student_email','student_mobile_no','student_address','student_city','student_state','student_zipcode','student_course','student_year','student_semester','student_picture'
    ];

    // public function title()
    // {
    //     return $this->hasOne(Title::class, 'stdID','stdID');
    // }

    // public function detail()
    // {
    //     return $this->belongsTo(users::class, 'stdID', 'userID');
    // }
}