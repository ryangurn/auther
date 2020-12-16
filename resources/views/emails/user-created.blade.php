@component('mail::message')
    # account created

    you account has been created within auther.
    your temporary password is {{ $password }}, please use this to login and reset your password.

    @component('mail::button', ['url' => config('app.url')])
        login
    @endcomponent

    thanks,<br>
    {{ config('app.name') }}

    ps. you will probably recieve an email asking you to verify your account, please make sure to address this email.
@endcomponent
