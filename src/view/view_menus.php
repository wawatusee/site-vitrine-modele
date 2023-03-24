<?php
/**
 * La classe ViewMenu permet d'afficher un menu
 * @param $menuArray an array wich contains most of time elements with pairs[page:"value", titre:"value"]
 * @return $viewMenu an html usable menu
 *  
 */
class ViewMenu{
    private $viewMenu=" ";
    public function getViewMainMenu(array $menuArray){
        foreach($menuArray as $item){
            $this->viewMenu.="<a href=#".$item->page.">".$item->titre."</a>";
        }
        $viewMenu=$this->viewMenu;
        return $viewMenu;
    }

}
