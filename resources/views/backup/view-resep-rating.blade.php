<html>
    <head>
        <title>Flavory</title>
    </head>
    <body>
        <strong>Review Untuk {{ $resep->nama }}</strong>
        @if(isset($reviews))
        <ul>
            @foreach($reviews as $reviewData)
            <li>{{ '"'.$reviewData->review.'" -'.$reviewData->user_id.' '.$reviewData->rating.'/5' }}</li>
            @endforeach
        </ul>
        @endif
    </body>
</html>