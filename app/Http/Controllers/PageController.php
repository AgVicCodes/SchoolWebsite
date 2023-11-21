<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {return view("index");}

    public function blog($slime) {
        
        // return $slime;
        $path =  __DIR__ . "../../../../resources/blog/{$slime}.html";
        
        if (! file_exists($path)) {
            // dd("File does not exist");
            // abort(500);
            return redirect("/");

        }

        $post = cache()->remember("blog.{slime}", 3, function () use($path) {
            
            // var_dump($path);
            return file_get_contents($path);
            
        });


        return view("blog", ["post" => $post]);

    }

    public function blogs() {return view("blogs");}

    public function staff() {return view("staff");}

    public function about() {return view("about");}

    public function location() {return view("location");}


}