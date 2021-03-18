<?php

namespace App\Controller;

class MenuController extends Controller {
    public function show(){

        $sql = "SELECT id, name as menu_name
        FROM `menu`
        WHERE `menu`.`active` = 1 "; 
  
        $menus = $this->getData($sql);

        $arrayToTemplate["Menus"] = array();
	    foreach ($menus as $menu) {
		    $menuTitle = $menu['menu_name'];
		    $drinks = $this->getDrinks($menu['id']);
		    //var_dump($drinks);
		    $menuContent = ['title' => $menuTitle, 'categories' => $drinks];
		    array_push($arrayToTemplate["Menus"], $menuContent);
        } 

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */

        $this->render($arrayToTemplate, 'menu');
        
    }

    function getDrinks($menuId) {
		$sql = "select * from category";
		$categories = $this->getData($sql);
		$drinks_menu = array();
		foreach($categories as $category) {
			$category_id = $category["id"];
			$sql = "SELECT  distinct `drink`.`name` as drink_name, description
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