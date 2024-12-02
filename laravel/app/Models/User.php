<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\project;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'requests_num'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_user');
    }
}
