@component('mail::message')
# Hello {{ $name }}

You have received a bonus of $@convert($add_bonus) from Mining Farm



Thanks,<br>
{{ config('app.name') }}
@endcomponent
