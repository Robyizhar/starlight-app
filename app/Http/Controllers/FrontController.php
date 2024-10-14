<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCatalog;
use App\Models\BookCategory;

class FrontController extends Controller
{
    public function index() {
        $books = BookCatalog::orderBy('id', 'desc')->paginate(20);
        $categories = BookCategory::get();
        return view('front.pages.index', [
            'books' => $books,
            'categories' => $categories
        ]);
    }

    public function bookCatalog() {
        $books = BookCatalog::orderBy('id', 'desc')->paginate(20);
        $categories = BookCategory::get();
        return view('front.pages.book-catalog', [
            'books' => $books,
            'categories' => $categories
        ]);
    }

    public function bookDetail($slug) {
        $book = BookCatalog::with('bookCategory')->where('slug', $slug)->first();
        // return response()->json($book, 200);
        return view('front.pages.book-detail', [
            'book' => $book
        ]);
    }

    public function aboutUs() {
        $books = BookCatalog::orderBy('id', 'desc')->paginate(20);
        $categories = BookCategory::get();
        return view('front.pages.about-us', [
            'books' => $books,
            'categories' => $categories
        ]);
    }
}
