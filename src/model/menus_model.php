<?php
/**
 * @author Kievu 
 *@param $srcJson A string wich define the url of the json file wich feed this datas 
 *
 */
class MenusModel{
    private $srcJson;
    private $menus;
    private $types;
    public function __construct(string $srcJson){
        $this->srcJson=$srcJson;
        $this->menus=json_decode(file_get_contents($srcJson));
    }
    /**
     * @param string $menuType could be "main","RS",..
     * @return array $menu_array wich could feed an instance of menuView
     */
    public function getMenu(string $menuType){
        $menu_array=$this->menus->$menuType;
        return $menu_array;
    }
}