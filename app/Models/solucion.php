<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class solucion extends Model
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
    protected $table = 'solucion';

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
                  'Solucion',
                  'Area',
                  'Marca'
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
     * Get the mayosol for this model.
     */
    public function mayosol()
    {
        return $this->hasOne('App\Models\Mayosol','Solucion_Id','Id');
    }

    /**
     * Get the oportunidad for this model.
     */
    public function oportunidad()
    {
        return $this->hasOne('App\Models\Oportunidad','Solucion_Id','Id');
    }



}
