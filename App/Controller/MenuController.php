<?php

namespace App\Controller;

class MenuController extends Controller {
    public function show(){

        /* $sql = "SELECT *
        FROM `menu`, `category`, `drink`, `menu_has_drink` 
        WHERE `menu`.`active` = 1 
        AND `drink`.`category_id` = `category`.`id` 
        AND `menu_has_drink`.`drink_id` = `drink`.`id` 
        AND `menu_has_drink`.`menu_id` = `menu`.`id` 
        ORDER BY `menu`.`id`, `category`.`name`"; */
        /* $sql = "SELECT * FROM `menu` WHERE `active` = 1";*/
        
        $menus =  $this->getData('SELECT * FROM `menu` WHERE `menu`.`active` = 1');

        $categories = $this->getData('SELECT * FROM `category`');

        $countArray = count($menus);
        $arrayToTemplate = array();

        for ($i = 0; $i < $countArray; $i++) {
            array_push($arrayToTemplate, ['menu' => $menus[$i]['name']]);
        }

        // $arrayToTemplate = ['menu' => $menus[0]['name']];
        echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>';

        /* foreach ($menus as $menu) {
            $menuTitle = $menu['name'];
            $drinks = $this->getDrinks($menu['id']);
            $menuContent = ['title' => $menuTitle, 'drinks' => $drinks];
            array_push($arrayToTemplate, ['menu' => $menuContent]);
        } */

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */
        foreach ($menus as $menu) {
            $this->render($arrayToTemplate, 'menu');
        }
        
    }

    private function getCategories() {
        $sql = "SELECT * FROM category";
        $results = $this->getData($sql);
        return $results;
    }

    private function getDrinks($menuId) {
        $sql = "SELECT * FROM `drink`, `menu_has_drink`
        WHERE `menu_has_drink`.`drink_id`= `drink`.`id`
        AND `menu_has_drink`.`menu_id` =".$menuId;
        $results = $this->getData($sql);
        return $results;
    }
}