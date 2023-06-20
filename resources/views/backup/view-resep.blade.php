<html>
    <head>
        <title>Flavory - Home</title>
    </head>
    <body>
        <input type="hidden" value="{!! rand() !!}">
        <h1>{{ $data->nama }}</h1>
        @if(file_exists('storage/foto-resep/'.$data->id.'.jpg'))
            <img src="{{ asset('storage/foto-resep/'.$data->id.'.jpg?lastmod') }}" alt="This is you " width="500">
        @endif
        <h2>Bahan</h2>
        @foreach(explode(';', $data->bahan) as $iter)
            <p>{{ $iter }}<p>
        @endforeach
        <h2>Alat</h2>
        @foreach(explode(';', $data->alat) as $iter)
            <p>{{ $iter }}<p>
        @endforeach
        <h2>Waktu Memasak</h2>
        <p>{{ $data->waktu }} menit</p>
        <h2>Langkah</h2>
        @foreach(explode(';', $data->langkah) as $iter)
            <p>{{ $iter }}<p>
        @endforeach
        <h2>Author</h2>
        <p>{{ $data->user_id }}</p>
        <h2>Ulasan</h2>
        @if(isset($topReview))
            {{ $topReview->review }} <br> Oleh {{ $topReview->user_id }}
            {{ $topReview->rating.'/5' }} <br>
            <strong>{{ $avgRating }}/5</strong>
        @else
            Belum Ada Ulasan
        @endif
        <h3>Ulasan Anda</h3>
        @if(isset($userReview))
            <form action="{{ route('updateReview') }}" method="post">
                @csrf
                <input type="hidden" name="rid" value="{!! $data->id !!}">
                <textarea name="review" $id="{!! rand() !!}" cols="30" rows="10">{{ $userReview->review }}</textarea>
                <select name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" value="Update">
            </form>
            <form action="{{ route('deleteReview') }}" method="post">
                @csrf
                <input type="hidden" name="rid" value="{!! $data->id !!}">
                <input type="submit" value="Delete">
            </form>
        @else
            <form action="{{ route('insertReview') }}" method="post">
                @csrf
                <input type="hidden" name="rid" value="{!! $data->id !!}">
                <textarea name="review" id="{!! rand() !!}" cols="30" rows="10"></textarea>
                <select name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" value="Submit">
            </form>
        @endif
        <br>
        <br>
        @if(Session::has('username'))
            @if($data->user_id == Session::get('username'))
                <form action="{{ route('deleteReview') }}", method="post">
                    @csrf
                    <input type="hidden" name="id" value="{!! $data->id !!}">
                    <input type="submit", value="Hapus Resep">
                </form>
            @endif
        @endif
    </body>
</html>