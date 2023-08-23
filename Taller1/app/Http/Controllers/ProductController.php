<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Review;

class ProductController extends Controller
{
    public static $products = [
        ["id"=>"1", "img"=>"https://w0.peakpx.com/wallpaper/217/964/HD-wallpaper-falcon-9-alperenpeltek-ap-designs-elonmusk-falcon9-mars-space-spacex.jpg","name"=>"Falcon 9", "description"=>"Cohete reutilizable de space X"],
        ["id"=>"2", "img"=>"https://upload.wikimedia.org/wikipedia/commons/9/9e/Apollo_4_Saturn_V%2C_s67-50531.jpg","name"=>"Saturn V", "description"=>"Cohete que vuela rapido y es ruso"],
        ["id"=>"3", "img"=>"https://assets.newatlas.com/dims4/default/a37fdc5/2147483647/strip/true/crop/864x576+80+0/resize/1200x800!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2Farchive%2Fflacon-heavy.jpg","name"=>"FalconHeavy", "description"=>"Falcon 9 pero mas pesado"],
        ["id"=>"4", "img"=>"https://www.airandspaceforces.com/app/uploads/2022/03/7084700-scaled.jpg","name"=>"Atlas V", "description"=>"Es como el Saturn V pero mas nuevo"]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - StellarCO";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id) : View
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];
        $viewData["title"] = $product["name"]." - StellarCO";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        $viewData["product"] = $product;
        $viewData["reviews"] = Review::all();  // Obtiene todas las reviews
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create a review";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            "name_user" => "required",
            "content" => "required"
        ]);
        session()->flash('success', 'Successfully created');
        
        Review::create($request->only(["name_user", "content"]));
        return back();
    }
}
