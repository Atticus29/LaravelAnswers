<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //fetch all records
        $questions = Question::orderBy('id', 'desc')->paginate(5);

        //return the view and pass in the records fetched above
        return view('questions.index')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the form data
        $this->validate($request, [
            'title' => 'required | max:255', // 255 in order to be compatible with the db varchar type
        ]);

        // process the data and submit it
        $question = new Question();
        $question->title = $request->title;
        $question->description = $request->description;

        //redirect to show page if successful
        if($question->save()){
            return redirect()->route('questions.show', $question->id);
        }else{
            return redirect()->route('questions.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // use model to get one record from db
        $question = Question::findOrFail($id);
        return view('questions.show')->with('question',$question);
        // pass the record to view and show view
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
