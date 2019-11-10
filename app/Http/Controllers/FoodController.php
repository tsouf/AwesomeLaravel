<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Food;
use App\User;
use DB;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foods = Food::orderBy('id','desc')->paginate(10);
        return view('food.index')->with('foods',$foods);
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
    public function show($id)
    {
        $food = Food::find($id);
        return view('food.show')->with('food',$food);
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

    /**
     * Add or delete fav food.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addDelFavourite($id)
    {
        $food=Food::find($id);
        $user=User::find(Auth::user()->id);
        $users = DB::table('food_user')->where([
            ['user_id', '=', Auth::user()->id],
            ['food_id', '=', $food->id],
        ])->count();
        if($users>0){
            DB::table('food_user')->where([
                ['user_id', '=', Auth::user()->id],
                ['food_id', '=', $food->id],
            ])->delete();
        }else{
            DB::table('food_user')->insert(
                ['user_id' => Auth::user()->id, 'food_id' => $food->id]
            );
        }
        return redirect('/foods/'.$food->id)->with('error',Auth::user()->id.'Unauthorized page'.$id.'  '.$users);
    }
}
