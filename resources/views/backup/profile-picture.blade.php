<html>
    <head>
        <title>Flavory</title>
    </head>
    <body>
        <form action="{{ route('uploadPP') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="pp" accept="image/png, image/jpeg, image/gif" >
            <input type="submit" value ="upload">
        </form>
    </body>
</html>