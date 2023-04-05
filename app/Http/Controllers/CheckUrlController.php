<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Imagick;

use Intervention\Image\Facades\Image;
class CheckUrlController extends Controller
{
    public function urlForm(){
        return view('form');
    }
    public function checkUrl(Request $request){
        $urls=explode(" ",$request->url);
        $url_note=array();
        $passOrFail=empty($url_note) ? "Fail":"Pass";

        foreach($urls as $url){

        //1 Check the Image Url quality 
        $resolution=getimagesize($url);
        
        //1.1 Check the quality of image 
        if(50>=$resolution && $resolution>=1){
            array_push($url_note,'Image Not High Quality');
        }

        //2 Check Language of Pages 

        $pages=["home"]; //We Can get Pages From Database and This is only ex
        foreach($pages as $page ){
            //2.2 Check if page trans into hindi or not 
            if(!trans()->has($page,'hi')){
                array_push($url_note,$page." ".'Not Translate');
            }
         }

       //3 Return Data
        }
        $data=[
            "Pass Or Fail"=>$passOrFail,
            "Reason"=>$url_note
            ];


        return $data;


       
    }
}