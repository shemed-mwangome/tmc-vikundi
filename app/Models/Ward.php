<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;

    protected $table = "wards";

    protected $primaryKey  = "id";

    public $timestamps = false;

    public $fillable = ['name'];

    public function street(){
        return $this->hasMany(Street::class);
    }


}
