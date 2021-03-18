<?php

namespace App\Controller;

class DrinkController extends Controller {
    public function show(){
        $drink = $this->getData('SELECT * FROM drink WHERE id='.$_GET['drink']);
        $arrayToTemplate['drink'] = ['id' => $drink[0]['id'], 'name'=> $drink[0]['name'], 'price' => $drink[0]['price'], 'alcohol_level' => $drink[0]['alcohol_level'], 'description' => $drink[0]['description'], 'composition' => $drink[0]['composition']];
        $this->render($arrayToTemplate, 'drink');
    }
}