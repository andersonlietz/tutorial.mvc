<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home{
    /** 
    *método responsável por retornar o conteúdo (view) da página home
    *@return string
    */
    
    public static function getHome(){

        return View::render('pages/home');
    }
}