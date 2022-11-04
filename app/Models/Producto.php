<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $serie
 * @property $tipo_id
 * @property $modelo_id
 * @property $marca_id
 * @property $color_id
 * @property $dimensiones_id
 * @property $peso_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Color $color
 * @property Dimensione $dimensione
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Peso $peso
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{

    static $rules = [
		'serie' => 'required',
		'tipo_id' => 'required',
		'modelo_id' => 'required',
		'marca_id' => 'required',
		'color_id' => 'required',
		'dimensiones_id' => 'required',
		'peso_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'producto';
    protected $fillable = ['serie','tipo_id','modelo_id','marca_id','color_id','dimensiones_id','peso_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function color()
    {
        return $this->hasOne('App\Models\Color', 'id', 'color_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dimensione()
    {
        return $this->hasOne('App\Models\Dimensione', 'id', 'dimensiones_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'modelo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function peso()
    {
        return $this->hasOne('App\Models\Peso', 'id', 'peso_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'tipo_id');
    }


}
