<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\DomainModels\ForumDomainModel;
use App\Domains\DomainModels\CategoryDomainModel;
use App\Domains\DomainModels\UserDomainModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Repository\DataModels\Forum;

class ForumController extends Controller
{
    /**
     * Display a listing of the forum.
     * @author Alvent
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = ForumDomainModel::showAllForum();
        return view('forums.index', ["forums" => $forums]);
    }

    /**
     * Show the form for creating a new resource.
     * @author Alvent
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = CategoryDomainModel::showAllCategory();
        $input = [
            'name' => '',
            'category' => '',
            'description' => ''
        ];
        return view('forums.create', compact('input'), compact('categories'));
    }

    /**
     * Store a new forum to database. 
     * @author Alvent
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'category' => 'required'
        ]);
        //

        if($validator->fails()){
            $categories = CategoryDomainModel::showAllCategory();
            return view('forums.create',["categories" => $categories])->
            withErrors($validator)->withInput(Input::all());
        }

        $forum = new Forum();
        $forum->user_id = UserDomainModel::getAuthUser()->getId();
        $forum->category_id = $request->get('category');
        $forum->forum_status_id = 1;
        $forum->title = $request->get('name');
        $forum->description = $request->get('description');
        $forum->created_at = date('Y-m-d H:i:s');
        $forum->updated_at = date('Y-m-d H:i:s');

        $forum->save();
        return redirect()->route('forums.index');
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
     * Remove the specified resource from storage.
     * @author Alvent
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
