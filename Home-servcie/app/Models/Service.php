<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $fillable = [
        'title', 'price', 'phone', 'description', 'image_path', 'status', 'admin_comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }
    
}
