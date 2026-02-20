<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class MyController extends Controller
{
    public function test()
    {
        $model= new Author();
        $model->getAllAuthors();
    }
}
