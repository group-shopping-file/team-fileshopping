<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function showcategory($id)
    {
        //=======variabel header and aside ===========================
        $categories = Category::where('chid', 0)->get();
        $bestsellers = Product::orderBy('sales_number', 'desc')->get();
        $favorites = Product::orderBy('download_number', 'desc')->get();
        $newests = Product::orderBy('created_at', 'desc')->get();

        //=============variable page category ========================
        $cat = Category::find($id);
        $c = Category::where('chid',$id)->get();
        $pros=[];
        foreach($c as $item)
        {
            $pros[] = Product::where('category_id',$item->id)->get();
        }


        return view('site.category',compact('pros','cat','categories','bestsellers','favorites','newests'));
    }
    public function showproduct($id)
    {
        //=======variabel header and aside ===========================
        $categories = Category::where('chid', 0)->get();
        $bestsellers = Product::orderBy('sales_number', 'desc')->get();
        $favorites = Product::orderBy('download_number', 'desc')->get();
        $newests = Product::orderBy('created_at', 'desc')->get();


        $pro = Product::find($id);
        $pros = Product::where('category_id',$pro->category_id)->get();
        return view('site.product',compact('pros','pro','categories','bestsellers','favorites','newests'));
    }
}
