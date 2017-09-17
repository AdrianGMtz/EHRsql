<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:26 PM
 */

use illuminate\Database\Eloquent\Model;
class ExamenMental
{
    protected $table = 'examen_mental';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }

}