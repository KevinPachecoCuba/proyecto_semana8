<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cita
 * @package App\Models
 * @version September 29, 2021, 10:35 pm UTC
 *
 * @property integer $idpaciente
 * @property string|\Carbon\Carbon $fecha_cita
 * @property integer $iddoctor
 */
class Cita extends Model
{
   // use SoftDeletes;

   // use HasFactory;

    public $table = 'cita';
    protected $primaryKey='idcita';
    public $timestamps=false; 

    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idpaciente',
        'fecha_cita',
        'iddoctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita' => 'integer',
        'idpaciente' => 'integer',
        'fecha_cita' => 'datetime',
        'iddoctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idpaciente' => 'nullable|integer',
        'fecha_cita' => 'nullable',
        'iddoctor' => 'nullable|integer'
    ];

    
}
