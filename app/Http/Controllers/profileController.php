<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Support\Facades\Validator;



class profileController extends Controller
{
    private $greeceLocations = [
        "Athens", "Thessaloniki", "Patras", "Heraklion", "Larissa", "Volos",
        "Ioannina", "Chania", "Chalcis", "Rethymno", "Serres", "Katerini",
        "Drama", "Alexandroupoli", "Kozani", "Kavala", "Komotini", "Rhodes",
        "Tripoli", "Lamia", "Corinth", "Sparta", "Mytilene", "Argos",
        "Chios", "Eleusis", "Pyrgos", "Trikala", "Livadeia", "Chalcis",
        "Kalamata", "Heraclion", "Xanthi", "Veria", "Alimos", "Kos",
        "Polichni", "Kifissia", "Nikaia", "Nea Ionia", "Thivai"
    ];

    public function create(){
        $greeceLocations = $this->greeceLocations;
        return view('profile.create', compact('greeceLocations'));
    }

    public function IndexProfile()
    {
        $greeceLocations = $this->greeceLocations;

        // Fetch the authenticated user's profiles
        $user = auth()->user();
        $profiles = $user->profiles; 
        $categories =$user->categories; //adding the categories to the profiles 


        return view('profile.profile', compact('greeceLocations', 'profiles','categories'));
    }

    public function submitForm(Request $request)
    {
        $selectedLocation = $request->input('location');
        $age = $request->input('age');

        return "Selected Location: $selectedLocation, Age: $age";
    }

    public function createPost(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'afm' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $user = auth()->user();
        $profile = new Profile();
        $profile->FirstName = $request->FirstName;
        $profile->LastName = $request->LastName;
        $profile->phone = $request->phone;
        $profile->afm = $request->afm;
        $profile->location = $request->location;
        $profile->age = $request->age;
        $profile->save();

        // Attach the profile to the users
        if ($user) {
            $user->profiles()->attach($profile->id);
        }

        return redirect('profile')->with('success', 'Profile created successfully!');
    }
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        
        $user = auth()->user();
        
        // Checking  if the users has this profiles
        if ($user && $user->profiles->contains($profile)) {
            $greeceLocations = $this->greeceLocations;
            
            return view('profile.edit', compact('profile', 'greeceLocations', 'user'));
        } else {
            return redirect()->route('profile.index')->with('error', 'User associated with this profile not found.');
        }
    }
    

    public function update(Request $request, $id)
    {
    
        $validator = Validator::make($request->all(), [
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'afm' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update the profile
        $profile = Profile::findOrFail($id);
        $profile->FirstName = $request->FirstName;
        $profile->LastName = $request->LastName;
        $profile->phone = $request->phone;
        $profile->afm = $request->afm;
        $profile->location = $request->location;
        $profile->age = $request->age;
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }

    
    public function delete($id){
        $profile = Profile::findOrFail($id);
        $profile->delete(); 
        return redirect('profile')->with('success',' Profile deleted successfully');   
    }

}
