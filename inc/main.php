<main>
<?php if(!$singlePage): ?>
    <?php
//CONTROLEUR CENTRAL
    //$pageArray charge le tableau déclaré dans config.php,
    //Ce tableau est utilisé pour réaliser le menu(view_menu.php)
    $pagesArray = PAGE_ARRAY;
    if (isset($_GET["page"])) {
    $page = $_GET["page"];
    $titre=$page;
        if ( in_array($page, $pagesArray) ) {
        require_once '../inc/pages/' . $page . '.php';
        } else {
        require_once '../inc/pages/accueil.php';
        }
    } else {
        require_once '../inc/pages/accueil.php';
    }
    ?>
<?php else: ?>
    <?php 
    foreach($pagesDuMenus as $page){
        require_once '../inc/pages/' . $page . '.php';
    }
//FIN DE CONTROLEUR CENTRAL
    ?>    
<?php endif ?>
</main>
