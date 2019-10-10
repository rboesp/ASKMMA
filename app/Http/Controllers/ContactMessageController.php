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
        $data = $request->all();
        $data['receive_newsletter'] = $request->get('receive_newsletter') === '1' ? true : false;
        $message = new ContactMessage($data);
        $message->save();

        Mail::send(new ContactMail($data));

        Mail::to($data['email'])->send(new GenericEmailMarkdown(
            'MMA',
            new HtmlString("<p>Hello there,</p><p>Thank you for reaching out to us. We know your health coverage is important to you, and we are committed to giving you the help you need. One of our agents will be reaching out to you shortly.</p><p>For immediate assistance, please call  <a href='tel:8772797070'>877-279-7070</a></p><p>Sincerely</p><p>Your Medicare Medicaid Advisors Team</p>")

        ));

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
