<x-mail::message>
# {{ __('You Have Been Invited') }}

{{ __('You have been invited to the') }} {{ config('app.name') }}

<x-mail::button :url="$inviteUrl">
{{ __('Register') }}
</x-mail::button>

{{ __('Thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
