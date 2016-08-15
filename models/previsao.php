<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 26/06/2016
 * Time: 16:49
 */

class Previsao{


    public $tempMax;
    public $tempMin;
    public $descricao;
    public $imagem;
    public $data;
    public $diaDaSemana;

    public function __construct($tempMax, $tempMin, $descricao,$data, $diaDaSemana, $imagem) {

        $this->tempMax  = $tempMax;
        $this->tempMin = $tempMin;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->diaDaSemana = $diaDaSemana;
        $this->imagem = $imagem;
    }

    public static function all() {
        $list = [];

        $list[] = new Previsao( "30", "26", "Ensolarado","15/08/2016","Segunda", "http://sunshineapp.heroku.com/content/img/img32.png");
        $list[] = new Previsao( "25", "17", "Ensolarado","16/08/2016","Terça", "http://sunshineapp.heroku.com/content/img/img34.png");
        $list[] = new Previsao( "17", "11", "Nublado","17/08/2016","Quarta" "http://sunshineapp.heroku.com/content/img/img26.png");
        $list[] = new Previsao( "18", "9", "Chuvas","18/08/2016","Quinta" "http://sunshineapp.heroku.com/content/img/img40.png");
        $list[] = new Previsao( "22", "13", "Parcialmente nublado","19/08/2016","Sexta" "http://sunshineapp.heroku.com/content/img/img30.png");
        $list[] = new Previsao( "16", "10", "Risco de chuvas","20/08/2016","Sabado" "http://sunshineapp.heroku.com/content/img/img42.png");

        return $list;
    }

    public static function getNow() {
          return new Previsao( "33", "21", "Ensolarado","14/08/2016","Hoje" "http://sunshineapp.heroku.com/content/img/img36.png");
    }

}
