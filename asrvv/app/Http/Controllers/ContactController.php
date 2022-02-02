<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Повідомлення було додано');
        //dd($req->input('subject'));
        //$validation = $req->validate([
         //   'subject' => 'required|min:5|max:50',
         //   'message' => 'required|min:15|max:500'
        //]);
    }

    public function allData(){
        //dd(Contact::all());
        return view('messages', ['data' => Contact::all()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
    }
    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {

        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Повідомлення було оновлено');
        //dd($req->input('subject'));
        //$validation = $req->validate([
         //   'subject' => 'required|min:5|max:50',
         //   'message' => 'required|min:15|max:500'
        //]);
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Повідомлення було видалено');
    }
}
