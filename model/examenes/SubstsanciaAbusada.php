<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 05:16 PM
 */

use Illuminate\Database\Eloquent\Model;
class SubstsanciaAbusada extends Model
{
    protected $table = 'substancia_abusada';

    public function substancia(){
        return $this->belongsTo('Model\Examenes\Substancia', 'id_substancia');
    }

    public function  pacienteAbusaSubstancia(){
        return $this->belongsTo('Model\Examenes\AbusoDeSubstancias'. 'id_abuso_de_substancia');
    }
}