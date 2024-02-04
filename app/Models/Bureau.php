<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'service_id'
    ];
    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}
