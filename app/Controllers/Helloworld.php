<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
       // echo $this->name;
       echo $name . "<br>";
       echo $npm . "<br>";
       // echo "Hello nia";
    }

    public function show()
    {
        echo "Nia Nur Atika";
        echo "1817051015";
    }
}