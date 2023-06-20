<html>
    <head>
        <title>Flavory - Login</title>
    </head>
    <body>
        <h1>Insert Resep Page</h1>
        <form action="{{ route('updateResep') }}", method="post" enctype="multipart/form-data">
            @csrf
            <h2>nama resep</h2>
            <input type="text", name="nama", value="{!! $data->nama !!}" required>
            <h2>langkah</h2>
            <textarea name="langkah" cols="30" rows="10">{{ str_replace(";", "\n", $data->langkah) }}</textarea>
            <h2>bahan</h2>
            <textarea name="bahan" cols="30" rows="10">{{ str_replace(";", "\n", $data->bahan) }}</textarea>
            <h2>alat</h2>
            <textarea name="alat" cols="30" rows="10">{{ str_replace(";", "\n", $data->alat) }}</textarea>
            <h2>waktu</h2>
            <input type="number", name="waktu", value={!! $data->waktu !!} required>
            <input type="file" name="foto-resep" accept="image/png, image/jpeg, image/gif">
            <input type="hidden" name ="id", value={!! $data->id !!}>
            <input type="submit", value="Submit">
        </form>
    </body>
</html>