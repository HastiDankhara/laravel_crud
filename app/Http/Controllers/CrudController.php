<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Crud;

class CrudController extends Controller
{
    // show user
    public function showuser(){

                // paginate()
        $user = db::table('cruds')->paginate(5);
        return view('crud', ['data' => $user]);
        // paginate with thier 4 parameters
            // $user = db::table('cruds')->paginate(5, ['*'], 'page', 2);
            // return view('crud', ['data' => $user]);
        // paginate with appends method
            // $user = db::table('cruds')->paginate(5)->appends(['sort' => 'votes']);
            // return view('crud', ['data' => $user]);

                // simplePaginate()
        // normal pagination
            // $user = db::table('cruds')->simplePaginate(5);
            // return view('crud', ['data' => $user]);

        // pagination using orderBy
            // $user = db::table('cruds')->orderby('age')->simplePaginate(5);
            // return view('crud', ['data' => $user]);

        // pagination using where
            // $user = db::table('cruds')->where('age',22)->orderby('age')->simplePaginate(5);
            // return view('crud', ['data' => $user]);

                // cursorPaginate()
            // $user = db::table('cruds')->orderBy('id')->cursorPaginate(5);
            // return view('crud', ['data' => $user]);
    }

    // single user
    public function singleuser($id){

        $user = db::table('cruds')->where('id',$id)->get();
        return view('singleuser', ['data' => $user]);
    }
    
    // insert user
    public function insertuser(Request $r){
        // return $r;
        // insert data into database
        $user = DB::table('cruds')->insert([
            'name' => $r->name,
            'email' => $r->email,
            'city' => $r->city,
            'age' => $r->age
        ]);

        if($user){
            return redirect('/');
        }else{
            return redirect('/')->with('error', 'User not added');
        }
    }

    // delete user
    public function deleteuser($id){
        // $user = db::table('cruds')->where('id',$id)->delete();
        $user = db::table('cruds')->where('id',$id)->delete();
        return redirect('/');
    }

    // update user
    public function updateuser(string $id){
        $user = db::table('cruds')->find($id);
        return view('update', ['data' => $user]);
    }
    // update record
    public function updatedata(Request $r, $id){
        // return $r;
        $user = db::table('cruds')->where('id',$id)->update([
            'name' => $r->name,
            'email' => $r->email,
            'city' => $r->city,
            'age' => $r->age
        ]);
        if($user){
            return redirect('/');
        }else{
            return redirect('/')->with('error', 'User not updated');
        }
    }
}
