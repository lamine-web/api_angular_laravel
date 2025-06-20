<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatController extends Controller
{
    //
      public function chat(Request $request)
    {
    $message = strtolower($request->input('message'));

        $reply = match (true) {
            str_contains($message, 'bonjour') => 'Salut ! Comment puis-je vous aider ?',
            str_contains($message, 'merci') => 'Avec plaisir !',
            str_contains($message, 'aide') => 'Je suis là pour vous aider. Posez votre question.',
            default => "Désolé, je n'ai pas compris.",
        };

        return response()->json(['reply' => $reply]);
    }
}
