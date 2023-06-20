<html>
    <head>
        <title>Flavory - Login</title>
    </head>
    <body>
        @if ($errors->any())
        <ul>
            @foreach($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if (Session::has('result'))
        {{ Session::get('result') }}
        @endif
        <h1>Login Page</h1>
        <form action="{{ route('authLogin') }}", method="post">
            @csrf
            <input type="text", name="username", placeholder="Username" required> <br>
            <input type="text", name="password", placeholder="password" required> <br>
            <input type="submit", value="Login">
        </form>
    </body>
</html>