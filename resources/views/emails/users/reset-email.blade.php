@component('mail::message')

Hi {{ $name }}

Here is the password reset link you requested for your MMA account valid for one password reset.

@component('mail::button', ['url' => $link, 'color' => 'blue'])
Reset Your Password
@endcomponent
<br>

Sincerely,

Your MMA Team
@endcomponent
