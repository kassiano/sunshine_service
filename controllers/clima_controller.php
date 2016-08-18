<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 27/06/2016
 * Time: 08:35
 */


class ClimaController{

    public function getPrevisoes(){


        $cidade = $_GET["id"];

        $json = file_get_contents('http://api.openweathermap.org/data/2.5/forecast?q='.$cidade.',br&mode=json&appid=eb949f17faa6fbdb7a837ddfc7993348');

        echo $json;
    }


    public function letras(){

        $nome = $_GET["id"];
        $ret = array('nome' => $nome , 'letras' =>  strlen($nome)  );

        echo json_encode($ret);

    }

}
