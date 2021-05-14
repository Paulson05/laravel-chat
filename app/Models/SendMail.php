<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMail extends Model
{

    public $table = 'sendmail';
    public $guarded = [];
    use HasFactory;
}
