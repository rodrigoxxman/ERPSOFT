<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cliente';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Nombre',
                  'Direccion',
                  'Email',
                  'Telefono',
                  'Empresa_Id'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the empresa for this model.
     */
    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa','Empresa_Id','Id');
    }

    /**
     * Get the oportunidad for this model.
     */
    public function oportunidad()
    {
        return $this->hasOne('App\Models\Oportunidad','Cliente_Empresa_Id','Empresa_Id');
    }



}
