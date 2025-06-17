<?php

namespace App\Service;


use App\Models\Message;
use Illuminate\Support\Facades\Auth;


class TemplateService
{
    public function createMessage($r)
    {
        $input = $r->input();

        $message = Message::create([
            'user_id'    => Auth::user()->id,
            'text'       => $input['text'],
            'image_url'  => $input['image_url'] ?? null,
            'created_at' => now(),
            'created_by'  => Auth::user()->id,
            'updated_at' => now(),
            'updated_by'  => Auth::user()->id
        ]);

        if ($message) {
            return redirect()->route('homepage')->with('success', 'Message created successfully.');
        }

        return redirect()->back()->with('error', 'Message creation failed.');

    }

    public function getMessage()
    {
        $data = Message::where('user_id', Auth::user()->id)
        ->get();

        return $data;
    }

}


