<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:13 PM
 */

use Iluminate\Database\Eloquent\Model;
class AbusoDeSubstancias extends Model
{
    protected $table = 'abuso_de_substancias';

    public function paciente(){
        return $this->belongsTo('Model\Paciente\Paciente', 'id_paciente');
    }
}