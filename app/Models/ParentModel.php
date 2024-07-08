<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_parent';
    protected $fillable = ['Name', 'email'];

    public function students()
    {
        return $this->hasMany(Student::class, 'fk_parent_id');
    }
}
