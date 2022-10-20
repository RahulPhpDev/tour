<!DOCTYPE html>
<html>
<head>
    <title>Saksham Holidays</title>
</head>
<body>
    <h1>Name: {{ $details['name'] }}</h1>
    <h1>Email: {{ $details['email'] }}</h1>
    <h1>Mobile: {{ $details['mobile'] }}</h1>
    <h1>Expected Date: {{ $details['date'] }}</h1>
    <h1>Adult Count: {{ $details['adult'] }}</h1>
    <h1>Child Count: {{ $details['child'] }}</h1>
    <p>{{ $details['enquiry'] }}</p>
   
    <p>Thank you</p>
    <h5> Created At: {{$details['created_at']}}</h5>
</body>
</html>