@component('mail::message')
# Hello {{ $last_name }} {{ $first_name }}

You've requested to withdraw ${{ $amount }} <br>
to this address: {{ $btc_wallet }}

<p>Note that before we can proceed to approve your investment withdrawals your recycle must be completed as required  due to the company's software mining policy kindly check carefully the target address</p>
<br>
<strong>Be aware that if you confirm an incorrect address,we won't be able to assist you to recover your assets</strong>
<p>If you did not make this request contact support for verification</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
