<?php

namespace App\Controller;

abstract class Controller  {

    protected function getData(string $sql): array{

        $pdo = new \PDO('mysql:dbname=webstart_bar;host=localhost', 'webstart_bar','webstart_bar_pwd');
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES,false);
        $state = $pdo->prepare($sql);
        
        if (!$state) {
            print_r($pdo->errorInfo());
         }

         $state->execute();
        $results = $state->fetchAll();
        
        return $results;
    }

    protected function render($variables, $template) {
        ob_start();
        extract($variables);
        ob_get_clean();
        Require_once ROOT.'/App/Views/'.$template.'.php';
    }

}