<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skelbimas extends Model
{
    use HasFactory;
    protected $table = 'skelbimas';
    protected $fillable = [
        'id',
        'pavadinimas',
        'user_id',
        'tekstas'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
