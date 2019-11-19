<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordController extends Controller
{
    public $lastEnglish = 'default';
    public $lastRussian = 'поумолчанию';
    public $lastResult = true;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function check(Request $request)
    {
        $word = Word::find($request['id']);

        if (strcasecmp($word->english, $request['english']))
        {
            echo 'неверно';
            $word->repit++;
            $word->save();
        }
        else {
            echo 'верно';
            $word->repit--;
            $word->save();
        }
        return redirect(route('show'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 1)
    {

        $word = Word::find(mt_rand(1,Word::count()));

        return view('show', [
            'lastEnglish' => $this->lastEnglish,
            'lastRussian' => $this->lastRussian,
            'lastResult' => $this->lastResult,
            'id' => $word->id,
            'russian' => $word->russian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
