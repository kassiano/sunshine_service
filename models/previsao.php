<?php
/**
 * Created by PhpStorm.
 * User: kassiano
 * Date: 26/06/2016
 * Time: 16:49
 */

class Previsao{

    public $id;
    public $tempMax;
    public $tempMin;
    public $descricao;
    public $imagem;

    public function __construct($id,$tempMax, $tempMin, $descricao, $imagem) {
        $this->id  = $id;
        $this->tempMax  = $tempMax;
        $this->tempMin = $tempMin;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
    }

    public static function all() {
        $list = [];

        $list[] = new Previsao(1, "30º", "26º", "Ensolarado", "http://sunshineapp.heroku.com/content/img/img32.png");
        $list[] = new Previsao(2, "25º", "17º", "Ensolarado", "http://sunshineapp.heroku.com/content/img/img34.png");
        $list[] = new Previsao(3, "17º", "11º", "Nublado", "http://sunshineapp.heroku.com/content/img/img26.png");
        $list[] = new Previsao(4, "18º", "9º", "Chuvas", "http://sunshineapp.heroku.com/content/img/img40.png");
        $list[] = new Previsao(5, "22º", "13º", "Parcialmente nublado", "http://sunshineapp.heroku.com/content/img/img30.png");
        $list[] = new Previsao(6, "16º", "10º", "Risco de chuvas", "http://sunshineapp.heroku.com/content/img/img42.png");
        $list[] = new Previsao(7, "15º", "8º", "Chuvas fortes", "http://sunshineapp.heroku.com/content/img/img39.png");
        return $list;
    }



}
