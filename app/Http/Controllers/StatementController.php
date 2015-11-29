<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $subTitle = "Statements";
        $statements = \App\Statement::all();
        return view('statement.index', compact('subTitle', 'statements'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $subTitle = "Statements";
        $statement = new \App\Statement;
        return view('statement.create', compact('subTitle', 'statement'));
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
        $statement = \App\Statement::create($request->all());
        $statement->save();
        return(redirect('statement')->with('message', 'Statement Created'));
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
        $subTitle = "Statement";
        $statement = \App\Statement::find($id);
        return view('statement.show', compact('subTitle', 'statement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subTitle = "Edit Statement";
        $statement = \App\Statement::find($id);
        return view('statement.edit', compact('subTitle', 'statement'));
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
        $statement = \App\Statement::find($id)->update($request->all());
        return(redirect('statement/')->with('message', 'Statement Updated'));
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
