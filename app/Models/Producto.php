<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';

    protected function color(){
        return $this->belongsTo(Color::class,'color_id');
    }
    protected function dimensiones(){
        return $this->belongsTo(Dimensiones::class,'dimensiones_id');
    }
    protected function marca(){
        return $this->belongsTo(Marca::class,'marca_id');
    }
    protected function modelo(){
        return $this->belongsTo(Modelo::class,'modelo_id');
    }
    protected function tipo(){
        return $this->belongsTo(Tipo::class,'tipo_id');
    }
    protected function peso(){
        return $this->belongsTo(Peso::class,'peso_id');
    }
}
