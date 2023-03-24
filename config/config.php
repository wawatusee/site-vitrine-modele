<?php 
require_once("../src/model/menus_model.php");
$titleWebSite=["PrénomDuSite","NomDeFamilleDuSite", "Petite phrase d'accroche, morale ou description de l'esprit du site"];
$menus=new MenusModel("../json/menus.json");
$menuRS=$menus->getMenu("RS_menu");