<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalReport extends Model
{
    use HasFactory;

    protected $table = 'final_reports';

    protected $fillable = [
        'group_id',
        'report_file',
        'comments',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
