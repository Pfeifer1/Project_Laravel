<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
    * Especificación de la relación de 'Post' con 'User'
    * en este caso, 'Post->user_id' vincula la tabla con 'User'.
    */
    public function user() {
        /*
        * Mediante esta linea se obtiene los datos de 'User' con el 'ID' correspondiente.
        * No se requiere que se especifique la relacion en el Model de 'User'.
        */
        return $this->belongsTo(User::class);
    }
}
