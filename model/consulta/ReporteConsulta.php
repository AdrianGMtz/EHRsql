<?php
/**
 * Created by PhpStorm.
 * User: 1046877159
 * Date: 17/09/2017
 * Time: 04:57 PM
 */

use Illuminate\Database\Eloquent\Model;
class ReporteConsulta extends Model
{
    protected $table = 'reporte_consulta';


    public function consulta() {
        return $this->belongsTo('Model\Consulta\Consulta', 'id_consulta');
    }

}