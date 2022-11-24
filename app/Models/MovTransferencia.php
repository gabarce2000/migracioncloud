<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MovTransferencia
 *
 * @property $id
 * @property $concepto
 * @property $tipo_transaccion
 * @property $monto
 * @property $user_representante_id
 * @property $user_destino_id
 * @property $fecha_transaccion
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MovTransferencia extends Model
{
    
    static $rules = [
		'concepto' => 'required',
		'tipo_transaccion' => 'required',
		'monto' => 'required',
		'fecha_transaccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['concepto','tipo_transaccion','monto','user_representante_id','user_destino_id','fecha_transaccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userR()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_representante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userD()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_destino_id');
    }
    

}
