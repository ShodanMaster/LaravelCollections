<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Example queries to demonstrate various Eloquent methods

        //Working with Numbers

        //dd(Article::count()); //Count returns the number of articles
        //dd(Article::where('is_published', true)->count()); //Count returns the number of published articles
        // dd(Article::pluck('user_id')->countBy()); //group by perticular column and return the count of group
        // dd(Article::max('minutes_to_read')); //Get the maximum value of a column
        // dd(Article::whereBetween('user_id', [20, 30])->max('minutes_to_read')); //Get the maximum value of a column within a range
        // dd(Article::min('minutes_to_read')); //Get the minimum value of a column
        // dd(Article::pluck('minutes_to_read')->median()); //Get the median of a column
        // dd(Article::pluck('minutes_to_read')->mode()); //Get the mode of a column
        // dd(Article::inRandomOrder()->first()); //Get a random article
        // dd(Article::inRandomOrder()->value('id')); //Get a random article id
        // dd(Article::sum('minutes_to_read')); //Get the sum of a column


        //Working with

        //Where
        $collection = collect([
            ['id' => 1, 'name' => 'Akshay', 'age' => 25],
            ['id' => 2, 'name' => 'John', 'age' => 30],
            ['id' => 3, 'name' => 'Jane', 'age' => 28],
        ]);

        // dd($collection->where('age', 25)); //Filter the collection where age is 25
        // dd($collection->where('age', '>', 25)); //Filter the collection where age is greater than 25

        // dd(Article::where('is_published', true)->get()); //Get all published articles
        // dd(Article::where('is_published', true)->where('minutes_to_read', 7)->get()); //Get all published articles with 7 minutes to read
        // dd(Article::where(function ($query) {
        //     $query->where('is_published', true)
        //         ->where('minutes_to_read', 7);
        // })->get()); //Get all published articles with 7 minutes to read using closure

        //whereStrict
        // dd(Article::whereStrict('is_published', true)->get()); //Get all articles where is_published is true using strict comparison

        //whereBetween
        // dd(Article::whereBetween('minutes_to_read', [5, 10])->get()); //Get all articles where minutes_to_read is between 5 and 10

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
