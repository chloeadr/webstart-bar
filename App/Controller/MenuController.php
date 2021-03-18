<?php

namespace App\Controller;

class MenuController extends Controller {
    public function show(){
        $menuId = $_GET['menu'];
        $menu = $this->getData('SELECT name FROM menu WHERE id='.$menuId);
        $drinks = $this->getDrinks($menuId);
        $arrayToTemplate['menu'] = ['name' => $menu[0]['name'], 'alldrinks'=> $drinks];


        echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>';

        $this->render($arrayToTemplate, 'menu');
        
    }

    function getDrinks($menuId) {
		$sql = "select * from category";
		$categories = $this->getData($sql);
		$drinks_menu = array();
		foreach($categories as $category) {
			$category_id = $category["id"];
			$sql = "SELECT  distinct `drink`.`id` as drink_id, `drink`.`name` as drink_name
			FROM `drink`, `menu_has_drink`, `category`
			WHERE `menu_has_drink`.`drink_id`= `drink`.`id`
			AND `menu_has_drink`.`menu_id` =".$menuId."
			AND `drink`.`category_id`=".$category_id;
			$drinks = $this->getData($sql);
			if(count($drinks) >0) {  // If there are drinks for this category in this menu
				$drinkContent = ['category' => $category["name"], 'drinks' => $drinks];
				array_push($drinks_menu, $drinkContent);
			}
		}
        return($drinks_menu);
    }
}