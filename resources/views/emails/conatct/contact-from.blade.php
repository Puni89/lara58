@component('mail::message')
    ## thakyou for your message
     <h1>CheckOut this message</h1>
    <strong>Name :: </strong> {{ $data['name'] }}
    <strong>Email :: </strong> {{ $data['email'] }}
    <strong>message :: </strong> 
    {{ $data['message'] }}
@endcomponent
