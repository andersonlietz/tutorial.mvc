<?php

namespace App\Controller\Pages;

class Home{
    #método responsável por retornar o conteúdo (view) da página home
    public static function getHome(){
        return "Olá Mundo!";
    }
}