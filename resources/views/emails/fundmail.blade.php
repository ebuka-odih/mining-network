@component('mail::message')
# Hello {{ $name }}

Your account has been funded with the sum of $@convert($add_amt)


Thanks,<br>
{{ config('app.name') }}
@endcomponent
