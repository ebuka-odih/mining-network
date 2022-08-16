@component('mail::message')
# Dear {{ $last_name }} {{ $first_name }}

## The sum of ${{ $amount }} has been successfully sent to your Bitcoin wallet from Mining Farm

<br>
Wallet: {{ $btc_wallet }} <br>
Transaction Hash: {{ $code_hash }}


<br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
