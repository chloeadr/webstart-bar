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
            $age = $waiter['age'];
            $presentation = $waiter['presentation'];
		    $waiter = ['firstName' => $firstName, 'lastName' => $lastName, 'age' => $age, 'presentation' => $presentation];
		    array_push($arrayToTemplate["waiters"], $waiter);
        } 

        /* echo '<pre>';
        var_dump($arrayToTemplate);
        echo '</pre>'; */

        $this->render($arrayToTemplate, 'waiter');
    }
}