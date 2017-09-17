<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:22 PM
 */

use illuminate\Database\Eloquent\Model;
class HistoriaPsiquiatricaFam extends Model
{
    protected $table = 'historia_psiquiatrica_fam';

    public function paciente(){
        return $this->belongsTo('Model\Pacientes\Paciente','id_paciente');
    }
}