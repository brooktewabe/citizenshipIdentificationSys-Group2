<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\CisUser;

class CisUserController extends Controller
{
    //
    public function register(Request $request){

        return view('CisUser.register');
        }
         function store(Request $request)
        {
            $CisUser = new CisUser();
            $CisUser->fname= $request->fname;
            $CisUser->lname= $request->lname;
            $CisUser->sex = $request->sex;
            $CisUser->username = $request->username;
            $CisUser->password= $request->password;

            $is_saved = $CisUser->save();
    
            if($is_saved){
                echo "Record saved successfully.";
                }
            else{
              echo "Sorry, try again something went wrong.";
                 }
                   
        }
        public function get_all()
        {
         $CisUser = CisUser::all();
         return view('CisUser.get_all', compact('CisUser'));
        }
        public function get_by_id($id)
        {
         $CisUser = CisUser::where('id', $id)->first();
         return view('CisUser.get_by_id', compact('CisUser'));
         }
 public function edit($id)
 {
 $CisUser = CisUser::find($id);
 return view('CisUser.edit', compact('CisUser'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['fname' => 'required' ]);
  $CisUser = CisUser::find($request->id);
  $CisUser->fname= $request->fname;
  $CisUser->lname= $request->lname;
  $CisUser->sex = $request->sex;
  $CisUser->username = $request->username;
  $CisUser->password= $request->password;

  $is_saved = $CisUser->save();
  return redirect('CisUser/get_all');
  }
  public function delete($id)
 {
 CisUser::where('id', $id)->delete();
 return redirect('CisUser/get_all');
 }
       /* function get_all(){
            $CisUser=CisUser::all();
            return view('CisUser.list' $CisUser);
        }
    */
}
