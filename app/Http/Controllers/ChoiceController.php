<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subTitle = "Choices";
        $choices = \App\Choice::all();
        return view('choice.index', compact('subTitle', 'choices'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subTitle = "Choices";
        $choice = new \App\Choice;
        return view('choice.create', compact('subTitle', 'choice'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //return($request->all());
        $choice = \App\Choice::create($request->all());
        $choice->save();
        return(redirect('choice')->with('message', 'Choice Created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $subTitle = "Choice";
        $choice = \App\Choice::find($id);
        return view('choice.show', compact('subTitle', 'choice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subTitle = "Edit Choice";
        $choice = \App\Choice::find($id);
        return view('choice.edit', compact('subTitle', 'choice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $choice = \App\Choice::find($id)->update($request->all());
        return(redirect('choice/')->with('message', 'Choice Updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
