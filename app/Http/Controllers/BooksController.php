<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\CommonHelper;
use Validator;
use App\Models\book;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BooksController extends Controller
{
    public function getAllBooks()
    {
        return Book::all();
    }

    public function getBookById(int $bookId)
    {
        return Book::all()->find($bookId);
    }

    public function booksUpdate(Request $request, int $bookId)
    {
        // Getting values from the blade template form
        $books = Book::all()->find($bookId);
        $books->update([
            'name' => $request->get('name'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'whenWritten' => $request->get('whenWritten')
        ]);
        return response()->json(['status' => 'success'], 201);
    }

    public function bookCreate(Request $request)
    {
        $add = Book::create($request->all());
        if (!$add) {
            return response()->json(['status' => 'error'], 400);
        }
        return response()->json(['status' => 'success'], 201);
    }

    public function getbyIdDelete(int $bookId)
    {
        $booksDelete = Book::all()->where('id', $bookId)->each->delete();
        if (!$booksDelete) {
            return response()->json(['status' => 'error'], 400);
        }
        return response()->json(['status' => 'success'], 201);
    }
}
