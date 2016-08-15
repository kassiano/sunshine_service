<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 27/06/2016
 * Time: 08:35
 */


class ClimaController{

    public function getPrevisoes(){

        $list = Previsao::all();
        echo json_encode($list);
    }
}
