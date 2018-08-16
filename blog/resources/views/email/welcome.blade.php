@component('mail::message')
# Introduction

Danke für ihre Registration !

@component('mail::button', ['url' => ''])
Los gehts!
@endcomponent

@component('mail::panel', ['url' => ''])
Es wird bestimmt interessant.
@endcomponent

Thanks,<br>
 {{ config('app.name') }}

@endcomponent
