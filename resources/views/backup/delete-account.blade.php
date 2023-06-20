<html>
    <head>
        <title>Flavory - Account Deletion</title>
    </head>
    <body>
        <h1>Account Deletion Page</h1>
        <form action="{{ route('authDelete') }}", method="post">
            @csrf
            <input type="text", name="password", placeholder="insert password to confirm" required> <br>
            <input type="submit", value="Delete">
        </form>
    </body>
</html>