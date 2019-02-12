<h3>Name: {{$name}}</h3>
<p>Email: {{$email}}</p>
<p>Message: {{$text}}</p>
<p>Date: {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $date)->format('n-d-Y') }} at {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $date)->format('g:i A') }}</p>
