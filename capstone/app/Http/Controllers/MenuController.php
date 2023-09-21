<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;



class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $menu = Product::all()->sortBy('updated_at')->reverse()->values();
       return view('menu.index', compact('menu'));
     
    }


    public function store(Request $request)
    {
        //validation
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'category' => 'required',
            'color' => 'required',
            'size' => 'required|int',
        ]);

        if ($validated) {

        $Menu = null;

            if ( isset($request->product_id) == false ) {
                //saving process new Menu
                $Menu = new Menu;
                $Menu->created_by = Auth::user()->id;
                $Menu->product_name = $request->product_name;
                $Menu->category = $request->category;
                $Menu->save();
    

            } else {

                //editing process, existing Menu
                $Menu = Menu::find($request->product_id);
                $Menu->updated_by = Auth::user()->id;
                $Menu->product_name = $request->product_name;
                $Menu->category = $request->category;
                $Menu->save();
    
            }

         

        return redirect()->route('menu_index');

        }
    }

    public function edit($id)
    {
       
       /*
        $result = Product::where('product_name', $id)
        ->where('category',  $category)
        ->where('color', $color)
        ->first();

        echo $result->created_by;

        $result =  Product::where('product_name', $id)
        ->where('category',  $category)
        ->where('color', $color)
        ->get();

        echo $result[0]->created_by;
*/

$Menu = Menu::find($id); //primary key


    public function delete($id)
    {
        $Menu = Menu::find($id);

        if ($Menu == null) {
            return response('Invalid ID', 403);
        }

        $Menu->delete();

        return redirect()->route('Menu_index');

    }


    public function view($id)
    {
        $Menu = Menu::find($id);

        if ($Menu == null) {
            return response('Invalid ID', 403);
        }

        return view('Menu.view', compact('Menu'));

    }
   
}
