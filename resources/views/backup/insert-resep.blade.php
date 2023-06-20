<html>
    <head>
        <title>Flavory - Login</title>
    </head>
    <body>
        <h1>Insert Resep Page</h1>
        @if ($errors->any())
        <ul>
            @foreach($errors -> all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{ route('insertResep') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>nama resep</h2>
            <input type="text", name="nama", required>
            <h2>langkah</h2>
            <textarea name="langkah" cols="30" rows="10"></textarea>
            <h2>bahan</h2>
            <textarea name="bahan" cols="30" rows="10"></textarea>
            <h2>alat</h2>
            <textarea name="alat" cols="30" rows="10"></textarea>
            <h2>waktu</h2>
            <input type="number", name="waktu", required>
            <input type="file" name="foto-resep" accept="image/png, image/jpeg, image/gif" required>
            <input type="submit", value="Submit">
        </form>
    </body>
</html>