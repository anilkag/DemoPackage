<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="{{ route('registration.create') }}" method="POST">
        @csrf
        <input type="text" name="full_name" placeholder="Full Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" />
        <button type="submit">Save</button>
    </form>
</body>
</html>
