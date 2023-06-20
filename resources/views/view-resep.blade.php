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
    <div class="container my-5">
        @if(isset($data->parent_id))
        <a href="{{ '/resep/view/'.$data->parent_id }}" class="btn btn-dark btn-sm"><h5>Kunjungi Resep Parent</h5></a>
        <br> <br>
        @endif
        <div class="py-3 px-5 text-center bg-body-tertiary rounded-5">
            <!-- <h2 class="text-body-emphasis mt-3 mb-0">Resep</h2> -->
            <div class="row  rounded-4 p-2">
                <div class="col-8 h-100 rounded-1 ">
                    <div class="row row-cols-1">
                        <div class="col-12 d-flex justify-content-start align-items-center">
                            @if(file_exists('storage/profile-pic/'.$data->user_id.'.jpg'))
                                <img class="rounded-circle" 
                                src="{!! asset('storage/profile-pic/'.$data->user_id.'.jpg?lastmod'.rand()) !!}" alt="" width="32" height="32">
                            @else
                                <img class="rounded-circle" 
                                src="{!! asset('defaultpp.png') !!}" 
                                alt="" width="32" height="32">
                            @endif
                            <p class="ms-2 mt-3 me-auto"><strong>{{ $data->user_id }}</strong></p>
                            <!-- <button class="btn btn-danger shadow-lg"
                                style="height: 36px; width :48px; border-radius:15px" type="button" id="button-addon2">
                                <strong>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bookmark-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
                                    </svg>
                                </strong>
                            </button> -->

                        </div>
                        <div class="row2">
                            <div class="col-12" style="height: 448px; border: 1px solid;">
                                <!--<iframe width="100%" height="448px" src="https://www.youtube.com/embed/lGvbzHJJ3QM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>-->
                                    <img src="{{ asset('storage/foto-resep/'.$data->id.'.jpg?lastmod'.rand()) }}" alt="Foto Makanan " height="448px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 h-100 rounded-1">
                    <div class="row row-cols-1">
                        <div class="row1 pt-3 ">
                            <h5 class="text-start mb-3">Langkah</h5>
                            <div class="overflow-auto bg-body-tertiary rounded-0 pt-2 px-3"
                                style="max-width: 100%; height: 450px; border: 1px solid black;">
                                @foreach(explode(';', $data->langkah) as $iter)
                                    <div class="langkah">
                                    <p class="text-start">{{ $iter }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-1 rounded-4 p-2">
                <div class="col-8 h-100 rounded-1 ">
                    <div class="row row-cols-1">
                        <div class="row2 my-2 ">
                            <div class="col-12 d-flex justify-content-between ">
                                <div class="col-8">
                                    <h5 class="text-start m-0 pt-2">{{ $data->nama }} - <svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                        </svg>
                                        ({{ $data->waktu }} menit)
                                    </h5>
                                </div>
                                <div class="col-1">
                                    {{ $avgRating }}/5 <span class="fa fa-star checked mx-1"></span>
                                </div>
                            </div>
                            <p class="text-start mt-3"></p>
                            <div class="card border-1">
                                <div class="card-body  pt-3 pb-1 m-0 border-bottom bg-light">
                                    <h4 class="text-start">Ulasan Terbaru  <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-chat-left-heart"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12ZM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Z" />
                                            <path
                                                d="M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                        </svg> </h4>
                                </div>
                                <div class="card-body">
                                    @if(isset($topReview))
                                    <div class="d-flex align-items-center">
                                            @if(file_exists('storage/profile-pic/'.$topReview->user_id.'.jpg'))
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('storage/profile-pic/'.$topReview->user_id.'.jpg?lastmod'.rand()) !!}" 
                                                alt="" width="32" height="32">
                                            @else
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('defaultpp.png') !!}" 
                                                alt="This is you " width="32" height="32">
                                            @endif
                                        <div>
                                            <h6 class="fw-bold text-dark mb-1 text-start">{{ $topReview->user_id }}</h6>
                                        </div>
                                        <div class="ms-auto">
                                            <!-- <span class="heading text-start pb-3">User Rating</span> -->
                                            @for($i = 0; $i < $topReview->rating; $i++)
                                            <span class="fa fa-star checked mx-1"></span>
                                            @endfor
                                        </div>
                                    </div>


                                    <p class="mt-3 mb-1 pb-2 text-start">
                                        {{ $topReview->review }}
                                    </p>


                                    <div class="small d-flex justify-content-between">
                                        <p class="text-start"></p>
                                        <a href="/resep/view/{!! $data->id !!}/review"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                            </svg>Lihat Ulasan lainnya
                                        </a>
                                        <!-- <a href="#!" class="d-flex  me-3  align-items-center text-decoration-none"
                                                                                                            style="color: inherit;">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                                fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                                                                                <path
                                                                                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                                                                                            </svg>
                                                                                                            <p class="mb-0">&nbsp;Like</p>
                                                                                                        </a>
                                                                                                        <a href="#!" class="d-flex  me-3 align-items-center text-decoration-none"
                                                                                                            style="color: inherit;">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                                fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                                                                                                <path
                                                                                                                    d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                                                                <path
                                                                                                                    d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                                                                                                            </svg>
                                                                                                            <p class="mb-0">&nbsp;Comment</p>
                                                                                                        </a>
                                                                                                        <a href="#!" class="d-flex  me-3  align-items-center text-decoration-none"
                                                                                                            style="color: inherit;">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                                                                fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                                                                                                <path
                                                                                                                    d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                                                                                            </svg>
                                                                                                            <p class="mb-0">&nbsp;Share</p>
                                                                                                        </a> -->
                                        <!-- <p class="text-start"> Review at 29 May 2023</p> -->
                                    </div>
                                    @else
                                    Belum Ada Ulasan
                                    @endif
                                </div>
                                <!-- Logged -->
                                <div class="card-footer pt-3 m-0 border-bottom">
                                    <h4 class="text-start">My Review <svg xmlns=" http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chat-square-dots"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path
                                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg> </h4>
                                </div>
                                @if(Session::has('username'))
                                <div class="card-footer m-0 pt-3" style="background-color: #f8f9fa;">
                                    <div class="d-flex flex-start w-100">
                                        <div class="d-flex pt-2">
                                            @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" 
                                                alt="" width="32" height="32">
                                            @else
                                                <img class="rounded-circle shadow-1-strong me-3" 
                                                src="{!! asset('defaultpp.png') !!}" 
                                                alt="This is you " width="32" height="32">
                                            @endif
                                        </div>
                                        <div class="form-outline w-100">
                                            <div class="">
                                                @if(isset($userReview))
                                                <form action="{{ route('updateReview') }}" method="post" id="updateReview">
                                                @else
                                                <form action="{{ route('insertReview') }}" method="post" id="insertReview">
                                                @endif
                                                    @csrf
                                                    <input type="hidden" name="rid" value="{!! $data->id !!}">
                                                    @if(isset($userReview))
                                                    <textarea name="review" class="form-control" placeholder=""
                                                        id="floatingTextarea">{{ $userReview->review }}</textarea>
                                                    @else
                                                    <textarea name="review" class="form-control" placeholder=""
                                                        id="floatingTextarea"></textarea>
                                                    @endif
                                                    <label for="floatingTextarea"></label>
                                                    <div class="form-group py-2">
                                                        <div class="col-md-4 inputGroupContainer">
                                                            <div class="input-group d-flex jus align-items-center ">
                                                                <span class="input-group-addon">Rate by <svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                                    </svg> : </span>
                                                                <select name="rating" class="form-control ms-2 rounded-2" id="rate">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-end mt-2 pt-1">
                                        @if(isset($userReview))
                                        <form action="{{ route('deleteReview') }}" method="post" id="deleteReview">
                                            @csrf
                                            <input type="hidden" name="rid" value="{!! $data->id !!}">
                                        </form>
                                        <button type="submit" class="btn btn-dark btn-sm" form="updateReview">Update Review</button>
                                        <button type="submit" class="btn btn-outline-dark btn-sm" form ="deleteReview">Delete</button>
                                        @else
                                        <button type="submit" class="btn btn-dark btn-sm" form="insertReview">Post Review</button>
                                        @endif
                                    </div>
                                </div>
                                @else
                                   <br> Anda Belum Login <br> <br>
                                @endif
                                
                            </div>
                            <br> <br>
                            <a href="{!! '/resep/insert/'.$data->id.'/fork' !!}" class="btn btn-outline-dark btn-sm">Fork Resep</a>
                            <!-- doesnt logged -->
                            <!-- <h5 class="text-start mt-4">Reviews</h5>
                            <div id="carouselExample" class="carousel slide  py-5 mt-3 bg-white rounded-2"
                                style="border:1px solid">
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <p class="lead font-italic mx-4 mx-md-5">
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
                                            amet
                                            numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"
                                            ⭐⭐⭐⭐
                                        </p>
                                        <div class="mt-4 mb-4">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                                class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                                                width="100" height="100">
                                        </div>
                                        <p class="text-muted mb-0">- User</p>
                                    </div>

                                    <div class="carousel-item">
                                        <p class="lead font-italic mx-4 mx-md-5">
                                            "Neque cupiditate assumenda in maiores repudiandae mollitia adipisci
                                            maiores
                                            repudiandae mollitia consectetur adipisicing architecto elit sed
                                            adipiscing elit."
                                            ⭐⭐⭐⭐⭐
                                        </p>
                                        <div class="mt-4 mb-4">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                                                class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                                                width="100" height="100">
                                        </div>
                                        <p class="text-muted mb-0">- User</p>
                                    </div>

                                    <div class="carousel-item active">
                                        <p class="lead font-italic mx-4 mx-md-5">
                                            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                            dolore eu
                                            fugiat nulla pariatur est laborum neque cupiditate assumenda in
                                            maiores."
                                            ⭐⭐⭐⭐
                                        </p>
                                        <div class="mt-4 mb-4">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                                class="rounded-circle img-fluid shadow-1-strong" alt="smaple image"
                                                width="100" height="100">
                                        </div>
                                        <p class="text-muted mb-0">- User</p>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true">,<svg
                                            xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'
                                            fill='#{$carousel-control-color}'>
                                            <path
                                                d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z' />
                                        </svg>"
                                        ;</span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true">
                                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'
                                            fill='#{$carousel-control-color}'>
                                            <path
                                                d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z' />
                                        </svg>
                                    </span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-4 h-100 rounded-1">
                    <div class="row row-cols-1">
                        <div class="row2 my-2 ">
                            <h5 class="text-start">Bahan</h5>
                            <div class="overflow-auto bg-body-tertiary rounded-3 pt-2 px-3"
                                style="max-width: 100%; max-height: 450px;">
                            @foreach(explode(';', $data->bahan) as $iter)
                                    <p class="text-start">{{ $iter }}</p>
                            @endforeach
                            </div>
                            <h5 class="text-start">Alat</h5>
                            <div class="overflow-auto bg-body-tertiary rounded-3 pt-2 px-3"
                                style="max-width: 100%; max-height: 450px;">
                            @foreach(explode(';', $data->alat) as $iter)
                                <p class="text-start">{{ $iter }}</p>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    @include('footer')
</body>

</html>