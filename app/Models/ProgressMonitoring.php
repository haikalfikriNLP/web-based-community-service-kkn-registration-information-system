<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressMonitoring extends Model
{
    use HasFactory;

    protected $table = 'progress_monitorings';

    protected $fillable = [
        'group_id',
        'progress_date',
        'progress_description',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
