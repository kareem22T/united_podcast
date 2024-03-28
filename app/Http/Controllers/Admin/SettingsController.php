<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\About;
use App\Models\Contact;

class SettingsController extends Controller
{
    use DataFormController;

    public function addAbout(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'about' => ['required'],
        ], [
            'title.required' => 'عنوان الصفحة مطلوب',
            'about.required' => 'وصف الصفحة مطلوب',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $about = About::first();
        
        if ($about) {
            $about->title = $request->title;
            $about->about = $request->about;
            $about->save();
        } else {
            $about = About::create([
                "title" => $request->title,
                "about" => $request->about
            ]);
        }

        if ($about)
            return $this->jsondata(true, 'Your About page has updated successfully', [], []);
        
    }
    
    public function addContact(Request $request) {
        $contact = Contact::first();
        
        if ($contact) {
            $contact->phone = $request->phone ? $request->phone : null;
            $contact->email = $request->email ? $request->email : null;
            $contact->facebook = $request->facebook ? $request->facebook : null;
            $contact->instagram = $request->instagram ? $request->instagram : null;
            $contact->tiktok = $request->tiktok ? $request->tiktok : null;
            $contact->youtube = $request->youtube ? $request->youtube : null;
            $contact->x = $request->x ? $request->x : null;
            $contact->spotify = $request->spotify ? $request->spotify : null;
            $contact->anghami = $request->anghami ? $request->anghami : null;
            $contact->save();
        } else {
            $contact = Contact::create([
                "phone" => $request->phone ? $request->phone : null,
                "email" => $request->email ? $request->email : null,
                "facebook" => $request->facebook ? $request->facebook : null,
                "instagram" => $request->instagram ? $request->instagram : null,
                "tiktok" => $request->tiktok ? $request->tiktok : null,
                "youtube" => $request->youtube ? $request->youtube : null,
                "x" => $request->x ? $request->x : null,
                "spotify" => $request->spotify ? $request->spotify : null,
                "anghami" => $request->anghami ? $request->anghami : null,
            ]);
        }

        if ($contact)
            return $this->jsondata(true, 'Your Contact page has updated successfully', [], []);
        
    }
    
    public function getAbout() {
        $about = About::first();
        
        return $this->jsondata(true, 'get Successfuly', [], ["about" => $about]);
    }
    public function getContact() {
        $contact = Contact::first();
        
        return $this->jsondata(true, 'get Successfuly', [], ["contact" => $contact]);
    }
}
