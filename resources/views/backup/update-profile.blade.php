<html>
    <head>
        <title>Flavory - Update Profile</title>
    </head>
    <body>
        <h1>Update Profile</h1>
        <form action="{{ route('authUpdateProfile') }}", method="post">
            @csrf
            <input type="text", name="oldpassword", placeholder="old password" required> <br>
            <input type="text", name="password", placeholder="new password" required> <br>
            <input type="text", name="fullname", value={!! $profile->name !!} required> <br>
            <input type="submit", value="Delete">
        </form>
    </body>
</html>