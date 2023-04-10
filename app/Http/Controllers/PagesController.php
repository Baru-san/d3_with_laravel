<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use App\Models\Subjects;
 use ConsoleTVs\Charts\Facades\Charts;


  
 class PagesController extends Controller
 {
     public function halamanUtama(){
         return view('index', [
             'title' => 'siakad'
         ]);
     }
  
     public function dashboard(){
  
         $subjects = Subjects::where('users_id', auth()->user()->id)->get();
  
         return view('user.dashboard', [
             'title' => 'Dashboard',
             'subjects' => $subjects
         ]);
     }


 }
  
  