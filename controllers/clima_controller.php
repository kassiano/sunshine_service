<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 27/06/2016
 * Time: 08:35
 */


class ClimaController{

    public function getPrevisoes(){

       $agora = Previsao::getNow();
       $list = Previsao::all();
       $ret = array("agora" => $agora , "previsoes" => $list );


        echo json_encode($ret);
    }


    public function letras(){

        $nome = $_GET["id"];
        $ret = array('nome' => $nome , 'letras' =>  $nome.length  );

        echo json_encode($ret);

    }

}
