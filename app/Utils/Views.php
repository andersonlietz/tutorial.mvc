<?php


namespace App\Utils;

class View{
    
/**
 * método responsável por retornar o conteúdo de uma view
 * @param string $view
 * @return string
 */
    private static function getContentView($view){
        $file = __DIR__.'/../../ressources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /** 
    * #método responsável por retornar o conteúdo renderizado de uma view
    * @param  string 
    * @param array 
    * @return string
    */
    public static function render($view){
        // conteúdo da view
        $contentView = self::getContentView($view);
        //retorna o conteúdo renderizado
        return $contentView;

    }
}






