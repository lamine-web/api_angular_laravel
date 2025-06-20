<?php

namespace App\Http\Controllers;

use App\Models\ChatBot;
use Illuminate\Http\Request;

class chatController extends Controller
{
    //
      public function chat(Request $request)
    {
    $message = strtolower($request->input('message'));

        $reply = match (true) {
            str_contains($message, 'bonjour') => 'Salut ! Comment puis-je vous aider ?',
            str_contains($message, 'comment ça va') => 'Je vais bien, merci ! Et vous ?',
            str_contains($message, 'je veux des informations') => 'Voici les informations que vous avez demandées.',
            str_contains($message, 'merci') => 'De rien ! Si vous avez d’autres questions, n’hésitez pas.',
            str_contains($message, 'd\'accord') => 'Avec plaisir !',
            str_contains($message, 'aide') => 'Je suis là pour vous aider. Posez votre question.',
            default => "Désolé, je n'ai pas compris.",
        };
        ChatBot::create([
            'message_user' => $message,
            'reponse_bot' => $reply,
        ]);
        return response()->json(['reply' => $reply]);
    }
}
