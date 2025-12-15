<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to QR CODE Project</h1>
    <div>
        <div>
            @if(session('success'))
                <p style="color:green;">{{ session('success') }}</p>
            @endif

        </div>
        @if($errors->any())
            <div style="color:red">
                @foreach ($errors->all() as $error )
                    <p>[{{$error}}]</p>   
                @endforeach
            </div>
        @endif
        <form action="{{route('register')}}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>
 

</body>
</html>