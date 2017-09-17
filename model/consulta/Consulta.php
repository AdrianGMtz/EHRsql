<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 04:54 PM
 */


use Illuminate\Database\Eloquent\Model;
class Consulta extends Model
{
    protected $table = 'consulta';


    public function paciente() {
        return $this->belongsTo('Model\Pacientes\Paciente', 'id_paciente');
    }

    public function doctor(){
        return $this->belongsTo('Model\Doctor\doctor', 'id_doctor');
    }

}