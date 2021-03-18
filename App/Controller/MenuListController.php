<?php

namespace App\Controller;

class MenuListController extends Controller {
    public function show(){

        $sql = "SELECT *
        FROM `menu`
        WHERE `menu`.`active` = 1 "; 
  
        $menus = $this->getData($sql);

        $arrayToTemplate["menus"] = $menus;

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */

        $this->render($arrayToTemplate, 'menu_list');
        
    }
}