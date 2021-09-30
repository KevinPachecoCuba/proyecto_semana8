<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cita_detalle
 * @package App\Models
 * @version September 29, 2021, 10:37 pm UTC
 *
 * @property integer $idcita
 */
class Cita_detalle extends Model
{
    //use SoftDeletes;


    //use HasFactory;

    public $table = 'cita_detalle';
    protected $primaryKey='idcita_detalle';
    public $timestamps=false; 


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcita_detalle' => 'integer',
        'idcita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcita' => 'nullable|integer'
    ];

    
}
