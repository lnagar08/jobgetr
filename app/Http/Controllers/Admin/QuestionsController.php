<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Questions = Questions::get();
        return view('admin.Questions.index',compact('Questions')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Questions.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the incoming request data
         $validatedData = $request->validate([
            'questions' => 'required|string|max:1000',
        ]);
        $Questions = new Questions();
        $Questions->questions = $validatedData['questions'];
        $Questions->save();

        return redirect()->route('questions.index')->with('success', 'Question created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions,$id)
    {
        $questions = questions::find($id);
        return view('admin.Questions.edit', compact('questions','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions ,$id)
    {
        $validatedData = $request->validate([
            'questions' => 'required|string|max:1000',
        ]);
        $Questions = Questions::find($id);
        $Questions->questions = $validatedData['questions'];
        $Questions->save();
        return redirect()->route('questions.index')->with('success', 'Question updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $questions,$id)
    {
        Questions::find($id)->delete();
    }
}
