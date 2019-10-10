@component('mail::message')
<p><strong>First Name: </strong>{{ $message['first_name'] }}</p>
<p><strong>Last Name: </strong>{{ $message['last_name'] }}</p>
<p><strong>Email: </strong>{{ $message['email'] }}</p>
<p><strong>Zip Code: </strong>{{ $message['zip_code'] }}</p>
<p><strong>Interest: </strong>{{ $message['interest'] }}</p>
@endcomponent
