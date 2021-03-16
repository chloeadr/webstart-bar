<?php

namespace App\Controller;

class HomeController extends Controller {
    public function show() {
        $nothing = array();
        $this->render($nothing, 'home');
    }

}

