<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\select;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class categoriescontroller extends Controller
{
    
    
    
    public function index(Request $request)
    {
        $users = User::with('categories')->paginate(5);
        return view('categories.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('categories.create', compact('users'));
    }

    public function createpost(Request $request)
    {
        
        
            $validatedData = $request->validate([
                'category' => 'required|string|max:255',
                'start' => 'required|date',
                'end' => 'required|date',
                'user_id' => 'required|exists:users,id', 
            ]);
        
            // Create a new category
            $category = new Categories();
            $category->name = $validatedData['category']; 
            $category->start = $validatedData['start'];
            $category->end = $validatedData['end'];
            $category->save();
        
            // Associate the categories with the users
            $user = User::find($validatedData['user_id']);
            if ($user) {
                $user->categories()->attach($category->id, [
                    'start' => $validatedData['start'],
                    'end' => $validatedData['end'],
                ]);
            }
        
            return redirect()->route('index')->with('success', 'Category created successfully');

    }    
        

    
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
    
        // Find the user associated with this category
        $user = User::whereHas('categories', function($query) use ($id) {
            $query->where('categories.id', $id);
        })->with(['categories' => function($query) use ($id) {
            $query->where('categories.id', $id);
        }])->first();
    
        if ($user && $user->categories->isNotEmpty()) {
            $pivotData = $user->categories->first()->pivot;
            return view('categories.edit', compact('category', 'pivotData', 'user'));
        } else {
            return redirect()->route('index')->with('error', 'User associated with this category not found.');
        }
    }
    
    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);
    
        // Find the user associated with this category
        $user = User::whereHas('categories', function($query) use ($id) {
            $query->where('categories.id', $id);
        })->first();
    
        if ($user) {
            $category->name = $request->name;
            $category->start = $request->start;
            $category->end = $request->end;
            $category->save();
    
            // Update the pivot table
            $user->categories()->updateExistingPivot($id, [
                'start' => $request->start,
                'end' => $request->end
            ]);
    
            return redirect()->route('index')->with('success', 'Category updated successfully');
        } else {
            return redirect()->route('index')->with('error', 'User associated with this category not found.');
        }
    }
    

    public function delete($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect('/categories/index')->with('success', 'Category deleted successfully');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'like', '%' . $query . '%')->get(); 
        return view('your_view', compact('users'));
    }
    





}   
