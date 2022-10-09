<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // contact page (user)
    public function contactPage() {
        return view('customer.contact');
    }

    // contact procress (user)
    public function contact(Request $request) {
        $data = $this->contactData($request);

        Contact::insert($data);

        return back()->with(['sent' => 'Sent Your Message!']);
    }

    // contact page (admin)
    public function adminContact() {
        $data = Contact::get();

        return view('admin.contact.contact')->with(['data' => $data]);
    }

    // get contact data (user)
    private function contactData($request) {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ];
    }
}
