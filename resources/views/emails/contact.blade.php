<!DOCTYPE html>
<html>
<head>
    <title>New Email From mfaridalam.com</title>
</head>
<body>
    {{-- <h1>New email</h1> --}}
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
