<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mayosol extends Model
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
    protected $table = 'mayosol';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'Mayorista_Id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'Solucion_Id'
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
     * Get the mayorista for this model.
     */
    public function mayorista()
    {
        return $this->belongsTo('App\Models\Mayorista','Mayorista_Id','Id');
    }

    /**
     * Get the solucion for this model.
     */
    public function solucion()
    {
        return $this->belongsTo('App\Models\Solucion','Solucion_Id','Id');
    }



}
