<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'persons';

    protected $fillable = [
        'id',
        'name',
        'email',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
