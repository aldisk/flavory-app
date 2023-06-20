<!DOCTYPE html>
<html lang="en" data-bs-theme="lorem">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flavory</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- recipe -->
    <div class="container my-3">
        <div class="py-3 px-3 text-center rounded-5">
            <h2 class="text-center mt-5">Review Resep {{ $resep->nama }} oleh {{ $resep -> user_id }}
                <hr>
            </h2>
            <br>
            <div id="carouselExample" class="carousel slide  py-5 bg-white rounded-2">
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    @foreach($reviews as $reviewData)
                                    <div class="review-container bg-body-tertiary rounded-3 my-3 p-3">
                                        <div class="d-flex align-items-center">
                                            @if(file_exists('storage/profile-pic/'.$reviewData->user_id.'.jpg'))
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('storage/profile-pic/'.$reviewData->user_id.'.jpg?lastmod'.rand()) !!}" 
                                                alt="" width="32" height="32">
                                            @else
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('defaultpp.png') !!}" 
                                                alt="" width="32" height="32">
                                            @endif
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 text-start">{{ $reviewData->user_id }}
                                                </h6>
                                            </div>
                                            <div class="ms-auto">
                                                <!-- <span class="heading text-start pb-3">User Rating</span> -->
                                                @for($i = 0; $i < $reviewData->rating; $i++)
                                                <span class="fa fa-star checked mx-1"></span>
                                                @endfor
                                            </div>
                                        </div>


                                        <p class="mt-3 mb-1 pb-2 text-start">
                                            {{ $reviewData->review }}
                                        </p>


                                        <div class="small d-flex justify-content-between">
                                            <!-- <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                                                                            <path fill-rule="evenodd"
                                                                                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                                                                        </svg>Lihat Ulasan lainnya
                                                                                                    </a> -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @if($page > 1)
                <form action="/resep/view/{!! $resep->id !!}/review" method="get" id="nextPage">
                    <input type="hidden" name="page" value="{{ $page-1 }}">
                </form>
                <button class="carousel-control-prev" type="submit" form="nextPage">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <svg xmlns='http://www.w3.org/2000/svg'
                            viewBox='0 0 16 16' fill='#{$carousel-control-color}'>
                            <path
                                d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z' />
                        </svg>"
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
                @endif
                @if($page < $maxPage)
                <form action="/resep/view/{!! $resep->id !!}/review" method="get" id="nextPage">
                    <input type="hidden" name="page" value="{{ $page+1 }}">
                </form>
                <button class="carousel-control-next" type="submit" form="nextPage">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='#{$carousel-control-color}'>
                            <path
                                d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z' />
                        </svg>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
                @endif
            </div>
        </div>
    </div>
    </div>
    <!-- Footer -->
    @include('footer')
</body>

</html>