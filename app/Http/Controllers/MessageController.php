<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\DomainModels\UserDomainModel;
use App\Domains\DomainModels\MessageDomainModel;

class MessageController extends Controller
{
    /**
     * Display the specified message according to user id.
     * @author Alvent
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @author Alvent
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @author Alvent
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @author Alvent
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified message according to user id.
     * @author Alvent
     * @return \Illuminate\Http\Response
     */
    public function showCurrentUserInbox()
    {
        $user = UserDomainModel::getAuthUser();
        if($user){
            $messages = MessageDomainModel::showMessage($user->getId());
            return view('messages.show', ["messages" => $messages]);
        }

        return redirect('login');
    }

    /**
     * Show the form for editing the specified resource.
     * @author Alvent
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @author Alvent
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified message from db.
     * @author Alvent
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MessageDomainModel::deleteMessage($id);
        return back();
    }
}
