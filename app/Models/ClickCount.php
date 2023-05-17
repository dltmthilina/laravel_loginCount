<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClickCount extends Model
{
    protected $table = 'download_counts';
    use HasFactory;

    protected $fillable = [
        'linkId',
        'userId',
        'click_count',
    ];
}
