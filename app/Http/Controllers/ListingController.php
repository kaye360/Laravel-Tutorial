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

        $post_data['user_id'] = auth()->id();

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

        // Check if logged in user is owner
        if( $listing->user_id != auth()->id() ) {
            abort(403, 'Unauthorized Action');
        }

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

        // Check if logged in user is owner
        if( $listing->user_id != auth()->id() ) {
            abort(403, 'Unauthorized Action');
        }
        
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // 
    // Manage Page
    // 
    public function manage() {
        return view('listings/manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
