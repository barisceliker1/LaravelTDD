<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\CommonHelper;
use Validator;
use App\Models\books;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class BooksController extends Controller
{
    public function getAllbook() {
        $books = books::all();
        return $books;
    }
    public function getbookbyId(int $bookId) {

        $books = books::all()->find($bookId);
        return $books;
    }
    public function BooksUpdate(Request $request, int $bookId) {

        // Getting values from the blade template form
        $books = books::all()->find($bookId);
        $books->update([
            'name' => $request->get('name'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'whenWrited' => $request->get('whenWrited')
        ]);
        return response()->json(['status'=>'success'], 201);



    }
    public function PostCreate(Request $request) {

        $add=books::create($request->all());
    if ($add) {
        return response()->json(['status'=>'success'], 201);
    }
    else {
        return response()->json(['status'=>'error'], 400);
    }
    }
    public function getbyIdDelete(int $bookId) {

        $booksDelete = books::all()->where('id',$bookId)->each->delete();

        if ($booksDelete) {
            return response()->json(['status'=>'success'], 201);
        }
        else {
            return response()->json(['status'=>'error'], 400);
        }
    }





}
