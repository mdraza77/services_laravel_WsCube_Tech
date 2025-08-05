<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    /**
     * Handle the file upload.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);

        try {
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $filename = time() . "ws." . $request->file('image')->getClientOriginalExtension();
                $path = $request->file('image')->storeAs('uploads', $filename, 'public');
                return redirect()->back()->with('success', 'File uploaded successfully! Path: ' . $path);
            } else {
                return redirect()->back()->with('error', 'No file uploaded or file is invalid.');
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred during file upload. Please try again.');
        }
    }
}
