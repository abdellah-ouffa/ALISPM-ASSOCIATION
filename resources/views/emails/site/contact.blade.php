@component('mail::message')
Vous avez un nouveau message de l apart de <strong>{{ $mailRequest['senderName'] }}</strong> 
<br>
<br>
<strong>Message :</strong> {{ $mailRequest['message'] }}
@endcomponent
