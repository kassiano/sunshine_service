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

    public function __construct($tempMax, $tempMin, $descricao, $imagem) {

        $this->tempMax  = $tempMax;
        $this->tempMin = $tempMin;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
    }

    public static function all() {
        $list = [];

        $list[] = new Previsao( "30", "26", "Ensolarado", "http://sunshineapp.heroku.com/content/img/img32.png");
        $list[] = new Previsao( "25", "17", "Ensolarado", "http://sunshineapp.heroku.com/content/img/img34.png");
        $list[] = new Previsao( "17", "11", "Nublado", "http://sunshineapp.heroku.com/content/img/img26.png");
        $list[] = new Previsao( "18", "9", "Chuvas", "http://sunshineapp.heroku.com/content/img/img40.png");
        $list[] = new Previsao( "22", "13", "Parcialmente nublado", "http://sunshineapp.heroku.com/content/img/img30.png");
        $list[] = new Previsao( "16", "10", "Risco de chuvas", "http://sunshineapp.heroku.com/content/img/img42.png");
        $list[] = new Previsao( "15", "8", "Chuvas fortes", "http://sunshineapp.heroku.com/content/img/img39.png");
        return $list;
    }

    public static function getNow() {
          return new Previsao( "33", "21", "Ensolarado", "http://sunshineapp.heroku.com/content/img/img36.png");
    }

}
