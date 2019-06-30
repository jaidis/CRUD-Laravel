<?php

namespace App\Repositories;

use App\Models\Articulos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticulosRepository
 * @package App\Repositories
 * @version June 30, 2019, 8:57 am UTC
 *
 * @method Articulos findWithoutFail($id, $columns = ['*'])
 * @method Articulos find($id, $columns = ['*'])
 * @method Articulos first($columns = ['*'])
*/
class ArticulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cantidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Articulos::class;
    }
}
