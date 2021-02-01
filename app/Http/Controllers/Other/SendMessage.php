<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use App\Model\Contact\ContactForm;
use Illuminate\Http\Request;

class SendMessage extends Controller
{
    /**
     * @param array $form
     */
    public function postMessage(Request $request)
    {

        $validated = $request->validate( [
            'form.subject' => 'string|nullable',
            'form.message' => 'required',
            'form.name_author' => 'required',
            'form.email_author' => 'required'
        ]);



        $cForm = new ContactForm();
        $cForm->fill($validated['form']);
        $saved = $cForm->save();


        $sentStatus = 'success';
        if (!$saved) {
            $sentStatus = 'error';
        }

        return redirect()->route('pages.contact')->with('sent_status', $sentStatus);


    }
}
