<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\User;
use App\Flower;
use App\Category;
use App\Exceptions\Handler;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('home', ['categories' => $categories]);
    }

    public function view($id)
    {
        $categories = DB::table('categories')->get();
        $flowers = DB::table('flowers')->where('category', 'like', "$id")->get();
        return view('view', ['categories' => $categories, 'flowers' => $flowers]);
    }

    public function add()
    {
        $categories = DB::table('categories')->get();
        return view('addflower', ['categories' => $categories]);
    }

    public function update($id)
    {
        $categories = DB::table('categories')->get();
        $flowers = DB::table('flowers')->where('id', 'like', "$id")->get()->first();
        return view('updateflower', ['categories' => $categories, 'flowers' => $flowers]);
    }

    public function flowerdetail($id)
    {
        $categories = DB::table('categories')->get();
        $flowers = DB::table('flowers')->where('id', 'like', "$id")->get()->first();
        return view('flowerdetail', ['categories' => $categories, 'flowers' => $flowers]);
    }

    public function addflower(Request $request)
    {
        $last = DB::table('flowers')->latest('id')->first();
        $request->validate([
            'name' => 'required|unique:flowers',
            'category' => 'required',
            'price' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
            'image' => 'required'
        ]);
        $flower = new Flower();
        $flower->category = $request->input('category');
        $flower->name = $request->input('name');
        $flower->price = $request->input('price');
        $flower->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $last->id + 1 . '.' . $extension;

            $file->storeAs('public/flowers/', $filename);
            $flower->image = $filename;
        }
        $flower->save();

        return redirect(route('view', $flower->category));
    }

    public function updateflower(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:flowers,id,$flower->id|min:5',
            'category' => 'required',
            'price' => 'required|numeric|min:50000',
            'description' => 'required|min:20',
        ]);
        $flower = Flower::find($_POST['update']);
        $flower->category = $request->input('category');
        $flower->name = $request->input('name');
        $flower->price = $request->input('price');
        $flower->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $flower->id . '.' . $extension;

            $file->storeAs('public/flowers/', $filename);
            $flower->image = $filename;
        }
        $flower->save();

        return redirect(route('view', $flower->category));
    }

    public function deleteflower()
    {
        $flowers = DB::table('flowers')->where('id', 'like', $_POST['delete'])->get();
        $id = $flowers[0]->category;
        $flowers = DB::table('flowers')->where('id', 'like', $_POST['delete'])->delete();
        return redirect(route('view', $id));
    }

    public function viewcategory()
    {
        $categories = DB::table('categories')->get();
        return view('managecategory', ['categories' => $categories]);
    }

    public function updatecategory($id)
    {
        $categories = DB::table('categories')->get();
        return view('updatecategory', ['categories' => $categories, 'id' => $id]);
    }

    public function submitupdatecategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,id,$category->id|min:5',
        ]);
        $category = Category::find($_POST['update']);
        $category->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $category->id . '.' . $extension;

            $file->storeAs('public/categories/', $filename);
            $category->image = $filename;
        }
        $category->save();

        return redirect(route('managecategory'));
    }

    public function deletecategory()
    {
        DB::table('categories')->where('id', 'like', $_POST['delete'])->delete();
        return redirect(route('managecategory'));
    }

    public function changepassword()
    {
        $categories = DB::table('categories')->get();
        return view('changepassword', ['categories' => $categories]);
    }

    public function updatepassword(Request $request)
    {
        if (Hash::check($request->input('oldpassword'), $request->user()->password)) {
            $request->validate([
                'password' => 'required|min:8|confirmed',
            ]);
            $user = User::find($request->user()->id);
            $user->password = Hash::make($request->input('password'));
            $user->save();
        } else {
            return redirect(route('changepassword'))->withErrors(["Password"=>"Password Doesn't Match!"]);
        }

        return redirect(route('home'));
    }
}
