<?php
 $menuMain_model=$menus->getMenu("Main_menu");
 require_once("../src/view/view_menus.php");
 $menusView=new ViewMenu;
 $menuMain_view=$menusView->getViewMainMenu($menuMain_model);
 ?>
<nav class="responsiveMenu" id="responsiveMenu">
        <?php
        echo $menuMain_view;
        ?>
        <a href="javascript:void(0);" class="icon" onclick="responsiveMenu()">
            <img src="img/deco/menu-responsive-btn.svg" alt="bouton menu-toggle">
        </a>
</nav>