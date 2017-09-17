<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:19 PM
 */

use Illuminate\Database\Eloquent\Model;
class HistorialTratamiento extends Model
{
    protected $table = 'historial_tratamiento';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }
}