<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function get(Request $req){
        return 'Get method called';
    }
    function post(Request $req){
        return 'Post method called';
    }
    function put(Request $req){
        return 'Put method called';
    }
    function patch(Request $req){
        return 'Patch method called';
    }
    function delete(Request $req){
        return 'Delete method called';
    }
    function any(Request $req){
        return 'Any method called';
    }
    
    function group1(Request $req){
        return 'group1 method called';
    }
    function group2(Request $req){
        return 'group2 method called';
    }
    
}
