@component('mail::message')
<p><strong>Feedback type: </strong>{{ $message['feedback_type'] }}</p>
<p><strong>Email: </strong>{{ $message['email'] }}</p>
<p><strong>Message: </strong>{{ $message['message'] }}</p>
@endcomponent
