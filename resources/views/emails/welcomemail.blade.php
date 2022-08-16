@component('mail::message')
# Dear {{ $last_name }}

## Welcome Aboard
Your account with Airline Trade has been approved

<p>You can now deposit and withdraw at max anytime</p>
    {{--@component('mail::button', ['url' => '', 'color' => 'success'])--}}
    {{-- Goto--}}
    {{--@endcomponent--}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
