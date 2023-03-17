<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class PageController extends Controller {

   public function index(){
      return view('index');
   }

   public function uploadFile(Request $request){

      // Validation
      $request->validate([
        'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
      ]);

      if($request->file('file')) {
         $file = $request->file('file');
         $filename = time().'_'.$file->getClientOriginalName();

         // File upload location
         $location = 'files';

         // Upload file
         $file->move($location,$filename);

         Session::flash('message','Upload Successfully.');
         Session::flash('alert-class', 'alert-success');
      }else{
         Session::flash('message','File not uploaded.');
         Session::flash('alert-class', 'alert-danger');
      }

      return redirect('/');
   }

}
