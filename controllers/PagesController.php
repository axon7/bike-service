<?php

require 'vendor/autoload.php';
require 'helpers.php';

class PagesController {
    private $pdo;
    private $query;
    public function __construct(){
        $config = require 'config.php';
        $this->pdo = Connection::make($config['database']);
        $this->query = new QueryBuilder($this->pdo);
    }

    public function repairList(){
        $names = $this->query->selectAll('names');
//        require 'views/repair_list.view.php';
        return view('repair_list', ['names'=> $names]);
    }

    public function addRepair(){
        $repairs = $this->query->selectAll('repairs');

        if(!empty($_POST['brand'])){
            $this->query ->insert('names', [
                'brand' => $_POST['brand'],
                'model' => $_POST['model']
            ]);

            header("Location: /bike-service");
        }
         return  view('add_repair', ['repairs' => $repairs]);
//        require 'views/add_repair.view.php';
    }

    public function login(){
        return  view('login');
    }

    public function register(){
        return  view('register');
    }




}