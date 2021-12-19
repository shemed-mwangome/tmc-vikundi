<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $table = "streets";

    protected $primaryKey = "id";

    public $timestamps = false;

    public $fillable = ['name', 'ward_id'];

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }
}
