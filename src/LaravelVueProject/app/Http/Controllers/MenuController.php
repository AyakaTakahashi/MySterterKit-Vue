<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function detail(Menu $menu)
    {
        return $menu;
    }

    public function store(Request $request)
    {
        return Menu::create($request->all());
    }

    public function update(Request $request, Menu $menu)
    {
        $menu->update($request->all());
        return $menu;
    }

    public function delete(Menu $menu){
        $menu->delete();
        return $menu;
    }
}
