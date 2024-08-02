<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelLaravel;

class PageController extends Controller
{
    public function index()
    {

        // Fetch the first 'judul' value from the 'model_laravel' table
        $events = ModelLaravel::all();

        $images = [
            1 => 'image1.jpg',
            2 => 'image2.jpg',
            3 => 'image3.jpg',
            4 => 'image4.jpg',
            5 => 'image5.jpg',
            6 => 'image6.jpg',
            7 => 'image7.jpg',
            // Add more mappings as needed
        ];
        $defaultImage = 'default.jpg';

   // Pass events, images, and defaultImage to the view
   return view('index', compact('events', 'images', 'defaultImage'));
    }
}
