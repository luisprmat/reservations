<x-mail::message>
# {{ __('Hello!') }}

{{ __('Thank you for registering to the activity') }} **{{ $activity->name }}**

{{ __('Start time') }} **{{ $activity->start_time }}**

<x-mail::button :url="route('my-activity.show')">
{{ __('Go To My Activities') }}
</x-mail::button>

{{ __('Thanks') }},<br>
{{ config('app.name') }}
</x-mail::message>
