@component('mail::message')
# Welcome to Restaurant In Asia

Explore Now~~~

@component('mail::button', ['url' => '/welcome'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
