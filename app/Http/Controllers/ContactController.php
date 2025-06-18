<?php

# Nouveau code avec affiche de valisation AJAX
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    Mail::raw(
        "Nom: {$data['name']}\nEmail: {$data['email']}\nSujet: {$data['subject']}\nMessage:\n{$data['message']}",
        function ($message) use ($data) {
            $message->to('collinsmomo05@gmail.com')
                    ->subject('NOVA-DEV : ' . $data['subject']);
        }
    );

    return response()->json(['message' => 'Message envoyé avec succès !']);
}

}

# Ancien code simple

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;

// class ContactController extends Controller
// {
//     public function send(Request $request)
//     {
//         $data = $request->validate([
//             'name' => 'required|string',
//             'email' => 'required|email',
//             'subject' => 'required|string',
//             'message' => 'required|string',
//         ]);

//         Mail::raw(
//             "Nom: {$data['name']}\nEmail: {$data['email']}\nSujet: {$data['subject']}\nMessage:\n{$data['message']}",
//             function ($message) use ($data) {
//                 $message->to('collinsmomo05@gmail.com') // change cette adresse
//                         ->subject('Nouveau message du site : ' . $data['subject']);
//             }
//         );

//         return redirect()->route('contact.form')->with('success', 'Message envoyé avec succès !');
//     }
// }

