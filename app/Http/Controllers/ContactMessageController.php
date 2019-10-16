<?php

namespace App\Http\Controllers;

use App\Exports\ContactMessagesExport;
use App\Http\Resources\ContactMessageResource;
use App\Mail\ContactMail;
use App\Mail\GenericEmailMarkdown;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\HtmlString;
use Maatwebsite\Excel\Facades\Excel;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $messages = ContactMessage::all();

        return ContactMessageResource::collection($messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return ContactMessageResource
     */
    public function store(Request $request)
    {
        $data = [
            'first_name' => $request->get('firstname'),
            'last_name' => $request->get('lastname'),
            'email' => $request->get('email'),
            'zip_code' => $request->get('field')[6],
            'interest' => $request->get('field')[1],
        ];
        $data['receive_newsletter'] = empty($request->get('field')[4]) ? false : true;
        $message = new ContactMessage($data);
        $message->save();

        return new ContactMessageResource($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export()
    {
        return Excel::download(new ContactMessagesExport, 'Contact Messages.xlsx');
    }
}
