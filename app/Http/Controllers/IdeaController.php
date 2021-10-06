<?php

namespace App\Http\Controllers;


use App\Http\Requests\Ideas\IdeaStoreRequest;
use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< Updated upstream
        $ideas = Idea::latest();
        return view('create',compact('ideas'));
=======
        $ideas = Idea::latest()->paginate(5);
        return view('idea.index',compact('ideas',$ideas));
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('idea.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IdeaStoreRequest $request)
    {
        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        $idea = Idea::create([
            'title' => $request->title,
            'content'=> $request->content,


        ]);
<<<<<<< Updated upstream
        return redirect('/');
=======
        return redirect()->route('idea.index');
>>>>>>> Stashed changes
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idea = Idea::find($id)->all();
        return view('idea.show',compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function edit(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea)
    {
        //
    }
}
