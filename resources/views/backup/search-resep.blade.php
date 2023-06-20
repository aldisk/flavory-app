<html>
    <head>
    <title>Flavory</title>
    </head>
    <body>
        <form action="{{ route('searchResep') }}" method="get">
            <input type="text" name="searchToken" value="">
            <input type="hidden" name="page" value="1">
            <input type="submit" value="search">
        </form>
        @if(isset($reseps))
            @if($maxPage > 0)
                has resep
                <ul>
                    @foreach($reseps as $resep)
                    <li>{{ $resep->nama }}</li>
                    @endforeach
                </ul>
                @if($page > 1)
                <form action="{{ route('searchResep') }}" method="get">
                    <input type="hidden" name="searchToken" value="{{ $searchToken }}">
                    <input type="hidden" name="page" value="{{ $page-1 }}">
                    <input type="submit" value="prev">
                </form>
                @endif
                @if($page < $maxPage)
                <form action="{{ route('searchResep') }}" method="get">
                    <input type="hidden" name="searchToken" value="{{ $searchToken }}">
                    <input type="hidden" name="page" value="{{ $page+1 }}">
                    <input type="submit" value="next">
                </form>
                @endif
            @endif
        @endif
    </body>
</html>