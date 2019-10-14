<?php

namespace App\Http\Controllers;

use App\Exports\FeedbackExport;
use App\Http\Resources\FeedbackResource;
use App\Mail\FeedbackMail;
use App\Mail\GenericEmailMarkdown;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\HtmlString;
use Maatwebsite\Excel\Facades\Excel;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $feedback = Feedback::all();

        return FeedbackResource::collection($feedback);
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
     * @return FeedbackResource
     */
    public function store(Request $request)
    {
        $data = [
            'feedback_type' => $request->get('field')[5],
            'email' => $request->get('email'),
            'message' => $request->get('field')[6],
        ];
        $feedback = new Feedback($data);
        $feedback->save();

        Mail::to(config('mail.global_to.address'))->send(new FeedbackMail($data));
        if (! empty($data['email'])) {
            Mail::to($data['email'])->send(new GenericEmailMarkdown(
                'MMA & MMA USA Value Your Feedback',
                new HtmlString("<p>Hello,</p><p>Thank you for your feedback. We are committed to providing the best service possible, and appreciate your suggestions. As a reminder, all feedback is anonymous unless you included contact information in your feedback. If you’d like to contact us, call us at <a href='tel:8772797070'>877-279-7070</a></p><p>Sincerely</p><p>Your Medicare Medicaid Advisors Team</p>")
            ));
        }

        return new FeedbackResource($feedback);
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
        return Excel::download(new FeedbackExport, 'feedback.xlsx');
    }
}
