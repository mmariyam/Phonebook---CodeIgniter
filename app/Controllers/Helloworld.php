<?php


namespace App\Controllers;


class Helloworld extends BaseController
{

    public function index()
    {
        echo "<h1>Hello World!</h1>";
    }

    public function test()
    {
        echo "<h1>Привет мир!</h1>";
    }

    public function show($slug = 'test')
    {
        echo "<h1>Show Page {$slug}</h1>";
    }

}