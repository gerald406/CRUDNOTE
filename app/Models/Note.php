<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'deadline',
        'done'
    ];

    //relacion de uno a uno
    //una nota pertenece a un usuario
    //relacion de uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }



}
