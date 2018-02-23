<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Symfony\Component\CssSelector\Exception\InternalErrorException;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {


        $user = new User();
        $user->first_name = $request['firstname'];
        $user->last_name = $request['lastname'];
        $user->gender = $request['gender'];
        $user->newsletter = $request['newsletter'];
        if ($request['newsletter'] === 'yes'){
            $user->newsletter = 'Yes';
        }
        else {
            $user->newsletter = 'No';
        }

            $user->mood = $request['mood'];
        $user->save();

        if ($user->save()){

            $data = [
                'user' => [
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'gender' => $request->input('gender'),
                    'newsletter' => $request->input('newsletter'),
                    'mood' => $request->input('mood'),
                ],
            ];



            return view('user.result', $data);

        }
        else{
            throw new InternalErrorException();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
