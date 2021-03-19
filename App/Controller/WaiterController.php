<?php

namespace App\Controller;

class WaiterController extends Controller {
    public function show() {
        $sql = "SELECT * FROM `waiter`";
  
        $waiters = $this->getData($sql);

        $arrayToTemplate["waiters"] = array();
	    foreach ($waiters as $waiter) {
		    $firstName = $waiter['first_name'];
            $lastName = $waiter['last_name'];
            $picture = $waiter['picture'];
            $age = $waiter['age'];
            $presentation = $waiter['presentation'];
            $lunch = $waiter['lunch'];
            $dinner = $waiter['dinner'];
		    $waiter = ['firstName' => $firstName, 'lastName' => $lastName, 'picture' => $picture, 'age' => $age, 'presentation' => $presentation, 'lunch' => $lunch, 'dinner' => $dinner];
		    array_push($arrayToTemplate["waiters"], $waiter);
        } 

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */

        $this->render($arrayToTemplate, 'waiter');
    }
}