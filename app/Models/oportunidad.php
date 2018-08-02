<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class oportunidad extends Model
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
    protected $table = 'oportunidad';

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
                  'FechaOp',
                  'FechaCierre',
                  'MustWin',
                  'MontoUSS',
                  'PercentWin',
                  'Avance',
                  'Ponderado',
                  'Funnel',
                  'Costo',
                  'TipoVenta',
                  'Mes',
                  'Trimestre',
                  'Tamano',
                  'Relevante',
                  'Registrado',
                  'Codigo',
                  'Cliente_Id',
                  'Cliente_Empresa_Id',
                  'Prevend_Id',
                  'vend_Id',
                  'Solucion_Id',
                  'Mayorista_Id'
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
     * Get the cliente for this model.
     */
    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente','Cliente_Empresa_Id','Empresa_Id');
    }

    /**
     * Get the prevend for this model.
     */
    public function prevend()
    {
        return $this->belongsTo('App\Models\Prevend','Prevend_Id','Id');
    }

    /**
     * Get the vend for this model.
     */
    public function vend()
    {
        return $this->belongsTo('App\Models\Vend','vend_Id','Id');
    }

    /**
     * Get the solucion for this model.
     */
    public function solucion()
    {
        return $this->belongsTo('App\Models\Solucion','Solucion_Id','Id');
    }

    /**
     * Get the mayorista for this model.
     */
    public function mayorista()
    {
        return $this->belongsTo('App\Models\Mayorista','Mayorista_Id','Id');
    }

    /**
     * Set the FechaOp.
     *
     * @param  string  $value
     * @return void
     */
    public function setFechaOpAttribute($value)
    {
        $this->attributes['FechaOp'] = !empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Set the FechaCierre.
     *
     * @param  string  $value
     * @return void
     */
    public function setFechaCierreAttribute($value)
    {
        $this->attributes['FechaCierre'] = !empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Get FechaOp in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getFechaOpAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    /**
     * Get FechaCierre in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getFechaCierreAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

}
