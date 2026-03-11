<?php
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function getCategories()
    {
        return Category::select('id', 'category_name')->take(8)->get();
    }

    public function getAllBooks()
    {
        return DB::table('books')->select('books.id','books.book_name','books.author','books.rate','books.image')
        ->join('categories', 'books.category_id', '=', 'categories.id')
        ->whereIn('categories.id', range(1,8))->inRandomOrder()
        ->get();
    }

    public function getBooksByCategory(int $categoryId)
    {
        return DB::table('books')->select('id','book_name','author','rate','image')
        ->where('category_id',$categoryId)->get();
    }

    public function getBookDetails(int $bookId)
    {
        return DB::table('books')->where('id',$bookId)->get();
    }

    public function getAudioBook()
    {
        return DB::table('audio__books')->select('id','name','author','rate','image')
        ->get();
    }

    public function getAudioBookData(int $bookId)
    {
        return DB::table('audio__books')->select('id','path','image','book_details')
        ->where('id',$bookId)->get();
    }
}
