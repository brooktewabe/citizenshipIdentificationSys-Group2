<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
use App\Models\Citizens;

class CitizensController extends Controller
{
    //
    public function register(Request $request){

        return view('Citizens.register');
        }
         function store(Request $request)
        {
            $Citizens = new Citizens();
            $Citizens->fname= $request->fname;
            $Citizens->lname= $request->lname;
            $Citizens->sex = $request->sex;
            $Citizens->bday = $request->bday;
            $Citizens->mothersname= $request->mothersname;
            $Citizens->nationality= $request->nationality;
            $Citizens->birthplace = $request->birthplace;
            $Citizens->occupation= $request->occupation;
            $Citizens->address= $request->address;
            $Citizens->religion= $request->religion;
            $Citizens->mobile= $request->mobile;
            $Citizens->maritialstatus= $request->maritialstatus;
            $is_saved = $Citizens->save();
    
            if($is_saved){
                echo "Record saved successfully.";
                }
            else{
              echo "Sorry, try again something went wrong.";
                 }
                   
        }
        public function get_all()
        {
         $Citizens = Citizens::all();
         return view('Citizens.get_all', compact('Citizens'));
        }
        public function get_by_id($id)
        {
         $Citizens = Citizens::where('id', $id)->first();
         return view('Citizens.get_by_id', compact('Citizens'));
         }
 public function edit($id)
 {
 $Citizens = Citizens::find($id);
 return view('Citizens.edit', compact('Citizens'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['fname' => 'required' ]);
  $Citizens = Citizens::find($request->id);
  $Citizens->fname= $request->fname;
  $Citizens->lname= $request->lname;
  $Citizens->sex = $request->sex;
  $Citizens->bday = $request->bday;
  $Citizens->mothersname= $request->mothersname;
  $Citizens->nationality= $request->nationality;
  $Citizens->birthplace = $request->birthplace;
  $Citizens->occupation= $request->occupation;
  $Citizens->address= $request->address;
  $Citizens->religion= $request->religion;
  $Citizens->mobile= $request->mobile;
  $Citizens->maritialstatus= $request->maritialstatus;
  $is_saved = $Citizens->save();
  return redirect('Citizens/get_all');
  }
  public function delete($id)
 {
 Citizens::where('id', $id)->delete();
 return redirect('Citizens/get_all');
 }
       /* function get_all(){
            $Citizens=Citizens::all();
            return view('Citizens.list' $Citizens);
        }
    */
}
