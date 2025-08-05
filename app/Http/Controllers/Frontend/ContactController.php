<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log; // For logging errors
use Illuminate\Support\Facades\Session; // For flashing messages

class ContactController extends Controller
{
    public function index () {
        return view('frontend.contact');
    }

    public function insertData(Request $request) {
        // $contacted_users = new Contact;
        // $contacted_users->name = $request['name'];
        // $contacted_users->email = $request['email'];
        // $contacted_users->message = $request['message'];
        // $contacted_users->save();
        // return redirect('/contact');

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {
            // 2. Create a new Contact instance and save it to the database
            // Ensure 'name', 'email', and 'message' are in the $fillable array of your Contact model.
            $contacted_users = new Contact;
            $contacted_users->name = $validatedData['name'];
            $contacted_users->email = $validatedData['email'];
            $contacted_users->message = $validatedData['message']; // Corrected typo here!
            $contacted_users->save();

            // 3. Redirect the user with a success message
            // You can display this message in your frontend.contact view or a layout.
            return redirect('/contact')->with('success', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            // 4. Handle any exceptions/errors during the storage process
            Log::error('Error storing contact message: ' . $e->getMessage());

            // Redirect back to the form with an error message and old input
            return redirect()->back()->withInput()->with('error', 'There was an error sending your message. Please try again.');
        }
    }
}
