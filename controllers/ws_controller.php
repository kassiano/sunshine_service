
<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 27/06/2016
 * Time: 08:35
 */


class WsController{

    public function busca(){
      $logradouro ="";
      $bairro ="";
      $cep ="";

      if (isset($_POST)){

        $cep = $_POST["cep"];
        $json = file_get_contents('http://viacep.com.br/ws/'.$cep.'/json/');

        $endereco = json_decode($json);

        $logradouro =$endereco->logradouro;
        $bairro=$endereco->bairro;
      }
      require_once('views/ws/busca.php');
    }
}
