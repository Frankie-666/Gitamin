<?php

/*
 * This file is part of Gitamin.
 * 
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Gitamin\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    /**
     * Array of sub-menu items.
     *
     * @var array
     */
    protected $subMenu = [];

    /**
     * Creates a new project controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->subMenu = [
            'profiles' => [
                'title'  => trans('gitamin.profiles.profiles'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-user',
                'active' => false,
            ], 
            'account'   => [
                'title'  => trans('gitamin.profiles.account'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-gear',
                'active' => false,
            ],
            'applications' => [
                'title'  => trans('gitamin.profiles.applications'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-cloud',
                'active' => false,
            ],
            'emails' => [
                'title'  => trans('gitamin.profiles.emails'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-envelope-o',
                'active' => false,
            ],
            'password' => [
                'title'  => trans('gitamin.profiles.password'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-lock',
                'active' => false,
            ],
            'notifications' => [
                'title'  => trans('gitamin.profiles.notifications'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-inbox',
                'active' => false,
            ],
            'ssh_keys' => [
                'title'  => trans('gitamin.profiles.ssh_keys'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-key',
                'active' => false,
            ],
            'preferences' => [
                'title'  => trans('gitamin.profiles.preferences'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-image',
                'active' => false,
            ],
            'audit_log' => [
                'title'  => trans('gitamin.profiles.audit_log'),
                'url'    => route('profile.index'),
                'icon'   => 'fa fa-history',
                'active' => false,
            ],
        ];

        View::share([
            'sub_menu'  => $this->subMenu,
            'sub_title' => trans_choice('dashboard.projects.projects', 2),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAction()
    {
        //
        $this->subMenu['profiles']['active'] = true;
        return View::make('profiles.index')
            ->withSubMenu($this->subMenu)
            ->withPageTitle(trans('gitamin.profiles.profiles').' - '.trans('dashboard.dashboard'));
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