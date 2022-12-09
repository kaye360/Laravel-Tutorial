<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // 
    // Show all listings
    // 
    public function index() {
        return view('listings/index', [
            'listings' => Listing::latest()->filter( request(['tag', 'search']) )->paginate(10)
        ]);
    }

    // 
    // Show single listing
    // 
    public function show(Listing $listing){
        return view('listings/show', [
            'listing' => $listing
        ]);
    }

    // 
    // Show create form
    // 
    public function create() {
        return view('listings/create');
    }

    // 
    // Store Listing
    // 
    public function store(Request $request) {
        $post_data = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')) {
            $post_data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($post_data);

        return redirect('/')->with('message', 'Listing Created Successfully');
    }

    // 
    // Show edit listing form
    // 
    public function edit(Listing $listing) {
        return view('listings/edit', ['listing' => $listing]);
    }

    // 
    // Update Listing
    // 
    public function update(Request $request, Listing $listing) {
        $post_data = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')) {
            $post_data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($post_data);

        return back()->with('message', 'Listing Updated Successfully');
    }

    // 
    // Destroy listing
    // 
    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
