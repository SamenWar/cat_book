<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return false|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|string
     */
    public function search(Request $request){

        $request->get('SearchObj');
        $c=mb_strtolower( $request->get('c'));

        $books = Book::query()->where("$c", 'like', '%'.$request->get('SearchObj').'%')->get();

        return json_encode($books);
    }
    public function index($order='id')
    {

            return view('welcome');
    }
    public function fetchBooks($order){

        $BookList = DB::table('books')
            ->orderBy($order)
            ->get();
        return response()->json(['BookList'=>$BookList, ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        echo "hello";
        $validator = Validator::make($request->all(), [
            'title'       => 'required|max:255',
            'author'=>'required',
            'description' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(
            [
            'status'=>400,
            'errors'=>$validator->messages()
            ]);
        }
        else {


            $book = new book;
            $book->id = $request->id;
            $book->title = $request->title;
            $book->author = $request->author;
            $book->co_author = $request->co_author;
            $book->description = $request->description;
            $book->publications_date = $request->publications_date;
            $book->save();
            return response()->json(
                [
                    'status'=>200,
                    'message'=>"book added"
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    public function edit($id)
    {
        $book=Book::find($id);
        if($book){
            return response()->json(
                [
                    'status'=>200,
                    'book'=>$book
                ]);
        }else{
            return response()->json(
                [
                    'status'=>404,
                    'message'=>"book not faund"
                ]);
        }
    }


    public function update(Request $request, $id)
    {
        echo "hello";
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'author' => 'required',
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'status' => 404,
                    'errors' => $validator->messages()
                ]);
        } else {


            $book = Book::query()->find($id);
            if($book) {
                $book->title = $request->title;
                $book->author = $request->author;
                $book->co_author = $request->co_author;
                $book->description = $request->description;
                $book->publications_date = $request->publications_date;
                $book->update();
                return response()->json(
                    [
                        'status' => 200,
                        'message' => "book UPDATED"
                    ]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        Book::find($id)->delete();

        return response()->json(['status'=>200,
            'message'=>'Book Deleted successfully']);
    }
}
