<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Paciente
 * @package App\Models
 * @version September 29, 2021, 10:38 pm UTC
 *
 * @property string $ape_nom
 * @property string $dni
 * @property integer $celular
 */
class Paciente extends Model
{
    //use SoftDeletes;

    //use HasFactory;

    public $table = 'paciente';
    protected $primaryKey='idpaciente';
    public $timestamps=false; 
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ape_nom',
        'dni',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idpaciente' => 'integer',
        'ape_nom' => 'string',
        'dni' => 'string',
        'celular' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ape_nom' => 'nullable|string|max:255',
        'dni' => 'nullable|string|max:8',
        'celular' => 'nullable|integer'
    ];

    
}
