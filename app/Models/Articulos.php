<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Articulos
 * @package App\Models
 * @version June 30, 2019, 8:57 am UTC
 *
 */
class Articulos extends Model
{
    use SoftDeletes;

    public $table = 'articulos';
    

    protected $dates = ['deleted_at'];


    public $fillable = ['nombre', 'cantidad'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'cantidad' => 'required'
    ];

    
}
