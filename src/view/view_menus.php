<?php
/**
 * La classe ViewMenu permet produit les élements d'un menu au format html
 */
class ViewMenu{
    /**
     * @var string an html usable menu
     * @param $menuArray an array wich contains most of time elements with pairs[page:"value", titre:"value"]
     */
    private $viewMenu=" ";
    public function getViewMainMenu(array $menuArray, $singlePage=false){
        foreach($menuArray as $item){
            if($singlePage){
                $this->viewMenu.="<a href=#".$item->page.">".$item->titre."</a>";
            }else $this->viewMenu.="<a href="."?page=".$item->page.">".$item->titre."</a>";
            
        }
        $viewMenu=$this->viewMenu;
        return $viewMenu;
    }

}
