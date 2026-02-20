<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facade\FlareClient\Http\Response;
use App\Models\Author;

class AuthorController extends Controller
{
    public $objectAuthor;

    function __construct(Author $author)
    {
        $this->objectAuthor = $author;
    }

    public function getAllAuthors()
    {
        return response()
            ->json([
                'data'=>
                $this->objectAuthor->getAllAuthors()
            ]);  
    }
}
