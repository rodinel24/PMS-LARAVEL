<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelWebsiteController extends Controller
{
    //

    public function home ()
    {
        return view('website.home');
    }

    public function about()
    {
        //


        return view('website.about');

      }

      public function blog()
      {
          //
  
  
          return view('website.blog');
  
        }
        public function contact()
        {
            //
    
    
            return view('website.contact');
    
          }

          public function gallery()
          {
              //
      
      
              return view('website.gallery');
      
            }
            public function ourRoom()
            {
                //
        
        
                return view('website.room');
        
              }



}
