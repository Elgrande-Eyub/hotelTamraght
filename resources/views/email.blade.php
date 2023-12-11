<h1>You received a new message from : {{ $contact->name }}</h1>
<h3>
<br>
<strong>Name : </strong> {{ $contact->name }}
<br>
<strong>Phone : </strong> <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
<br>
<strong>Email : </strong> {{ $contact->email }}
<br>
<strong>Message : </strong> {{ $contact->message }}
</h3>
