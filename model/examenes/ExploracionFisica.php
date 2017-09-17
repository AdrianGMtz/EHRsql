<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:23 PM
 */

use Illuminate\Database\Eloquent\Model;
class ExploracionFisica extends Model
{
    protected $table = 'exploracion_fisica';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }
}