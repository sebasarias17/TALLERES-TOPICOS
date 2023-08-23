<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Fíjate que aquí 'View' comienza con mayúscula
use App\Models\Review;

class ReviewController extends Controller{
    public function index(): View {
        $viewData = []; 
        $viewData["title"] = "Product-Reviews";
        $viewData["subtitle"] =  "All reviews of these product";
        $viewData["reviews"] = Review::all();
        return view('review.index') -> with("viewData", $viewData);
    }

    public function show(string $id): View{
        $viewData = [];
        $review = Review::findOrFail($id);
        $name_user = $review->getName();
        $description = $review->getReview();
        $viewData["title"] = "Product-Review";
        $viewData["subtitle"] =  "User review";
        $viewData["review"] = $review;
        $viewData["name_user"] = $name_user;
        $viewData["content"] = $description;
        return view('review.show') -> with("viewData" , $viewData);

    }

    public function delete(string $id, Request $request){
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect(route('review.index'))->with("success","Review deleted successfully");
    }
    

}

