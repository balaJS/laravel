<?php

namespace App\Http\Controllers;

use App\SiteUser as MyUsers;
use Illuminate\Http\Request;

class SiteUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = MyUsers::get();
        $data = [
            'title' => 'User list',
            'pageClass' => 'user-list-page',
            'users' => $users
        ];
        return view('/admin/user/list', $data);
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
     * @param  \App\SiteUser  $siteUser
     * @return \Illuminate\Http\Response
     */
    public function show(SiteUser $siteUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteUser  $siteUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteUser $siteUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteUser  $siteUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteUser $siteUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteUser  $siteUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteUser $siteUser)
    {
        //
    }
}
