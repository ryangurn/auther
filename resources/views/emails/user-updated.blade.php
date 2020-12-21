@component('mail::message')
    # account information updated

    your account has been updated within auther.
    @if (isset($password) && $password != null)
    your password has also been reset and thus your temporary password is {{ $password }}, please use this to login and reset your password.
    @endif

    please login to your account and head to the profile to see the changes that have been made.

    @component('mail::button', ['url' => route('profile.show')])
        user profile
    @endcomponent

    thanks,<br>
    {{ config('app.name') }}
@endcomponent
