@component('mail::message')
# Dear {{ $last_name }}

<p style="text-align: center;">
Your deposit for the investment plan ({{ $name }}, ${{ $amount }}) has been approved, visit your dashboard for more details
</p>

{{--@component('mail::button', ['url' => route('user_plans')])--}}
{{--View Details--}}
{{--@endcomponent--}}

You are now part of our thousands of investors, Enjoy! <br>
feel free to contact support if you have any complain.
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
