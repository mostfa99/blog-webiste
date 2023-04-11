<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    public function index()
    {
        $contactDetails = ContactDetails::all();
        return view('admin.contact.contact_details', compact('contactDetails'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'country' => 'required|string',
            'schedule' => 'required|string',
            'office_time' => 'required|string',
        ]);

        $contactDetails = ContactDetails::first();

        if ($contactDetails) {
            $contactDetails->update($validatedData);
        } else {
            ContactDetails::create($validatedData);
        }

        return redirect()->back()->with('success', 'Contact details updated successfully.');
    }
}
