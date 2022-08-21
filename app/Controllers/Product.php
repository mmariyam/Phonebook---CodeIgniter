<?php

namespace App\Controllers;


class Product extends BaseController
{
    public function show($slug)
    {
        echo "Show product {$slug}";
    }
}
