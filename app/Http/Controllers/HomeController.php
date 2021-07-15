<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Displaying all books with a page limit of 5 results
     *
     * @return void
     */
    public function index()
    {
        $default_page_size = 5;
        $books = $this->getAllBooks();
        $index_num = ceil($books->count() / $default_page_size);
        return view('home')
                ->with('books', $books)
                ->with('index_num', $index_num)
                ->with('current_page', 1)
                ->with('page_size',  $default_page_size);
    }


    /**
     * paginating results
     *
     * @param  mixed $page_num
     * @param  mixed $page_size
     * @return void
     */
    public function paginate($page_num, $page_size)
    {
        $response = Http::get('https://www.anapioficeandfire.com/api/books?page='.$page_num.'&pageSize='.$page_size.'')->json();
        $books = collect($response);
        $index_num = ceil($this->getAllBooks()->count() / $page_size);
        return view('home')
                ->with('books', $books)
                ->with('index_num', $index_num)
                ->with('current_page', $page_num)
                ->with('page_size',  $page_size);
    }


    /**
     * Fetching all books from API
     *
     * @return void
     */
    private function getAllBooks()
    {

        $response = Http::get('https://www.anapioficeandfire.com/api/books')->json();
        $books = collect($response);
        return $books;
    }
}
