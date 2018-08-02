<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mayorista extends Model
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
    protected $table = 'mayorista';

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
                  'Nombre'
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
        return $this->hasOne('App\Models\Mayosol','Mayorista_Id','Id');
    }

    /**
     * Get the oportunidad for this model.
     */
    public function oportunidad()
    {
        return $this->hasOne('App\Models\Oportunidad','Mayorista_Id','Id');
    }



}
