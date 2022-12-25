@component('mail::message')
    <h3>New Message Form: {{ $contact_form['email'] }}</h3>

    Name: {{ $contact_form['name'] }}

    Phone: {{ $contact_form['phone'] }}

    Message: {{ $contact_form['message'] }}
@endcomponent
