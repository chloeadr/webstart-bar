<?php

namespace App\Controller;

class MenuEditController extends Controller {
    public function show(){

        $sql = "SELECT *
        FROM `menu`"; 
  
        $menus = $this->getData($sql);

        $arrayToTemplate["menus"] = $menus;

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */

        $this->render($arrayToTemplate, 'menu_edit');
        
    }

    public function save() {
		$sql = "SELECT * FROM `menu`;";
		$menus = $this->getData($sql);
		foreach($menus as $menu) {
			$field_name = "Active_".$menu['id'];
			$Active_checked = 0;
			if(isset($_POST[$field_name])) {
				$Active_checked = 1;
			}
			$sql = "update menu set active =".$Active_checked." where id = ".$menu["id"];
			$this->updateData($sql);
    		header('Location: /?page=menuList');
		}
	}
}