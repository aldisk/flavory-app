<!DOCTYPE html>
<html lang="en" data-bs-theme="">

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
    
    <!-- Search -->
    <div class="container">
        <div class="row">
            <div class="col-10">
                <form action="{{ route('searchResep') }}" method="get" id="searchResep">
                    <div class="input-group mt-4 " style="height: 50px">
                        <input type="text" class="form-control rounded-corner"
                            placeholder="&#xF002; Cari Resep yang Kamu Inginkan!" aria-label="Recipient's username"
                            aria-describedby="button-addon2"
                            style="background-color: #EDA60E; font-family:Arial, FontAwesome; border-radius:15px" name="searchToken">
                        <input type="hidden" name="page" value="1">
                    </div>
                </form>
            </div>
            <div class="col-2">
                <button class="btn btn btn-outline-light mt-4 rounded-corner shadow-lg"
                    style="height: 50px; width :100%; border-color :#EDA60E; color :#EDA60E; border:2px solid; border-radius:15px"
                    type="submit" id="button-addon2" form="searchResep"><Strong>Search</Strong></button>
            </div>
        </div>
    </div>
    <!-- Title -->
    <br>
    <div class="container">
            <div class="carousel-inner rounded-corner" style="border-radius:15px">
                <div class="carousel-item active">
                    <img src="./img/messageImage_1685123214170.jpg" class="d-block w-100" alt="...">
                    <div class="container d-flex justify-content-end align-items-end">
                        <div class="carousel-caption text-end my-5">
                            <a class="btn btn-lg me-3 rounded-corner"
                                style="border-radius:15px; background-color: #BC1823; color:white" href="#">Browse
                                gallery</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="./img/messageImage_1685123214170.jpg" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-end my-5">
                            <a class="btn btn-lg me-3 rounded-corner"
                                style="border-radius:15px; background-color: #BC1823; color:white" href="#">Browse
                                gallery</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="./img/messageImage_1685123214170.jpg" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-end my-5">
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img src="https://source.unsplash.com/1257x553/?food" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/1257x553/?food" class="d-block w-100" alt="...">
                </div> -->
            </div>
    </div>
    <!-- Recipe -->
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-5">
            <h2 class="text-body-emphasis">Popular Recipe</h2>
            <div class="container marketing mt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-3 mb-5">
                        <a href=""><img src="./img/messageImage_1685092689597.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Roti</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <a href=""><img src="./img/messageImage_1685092701658.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Kue</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <a href=""><img src="./img/messageImage_1685092710858.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Pasta</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 mb-5">
                        <a href=""><img src="./img/messageImage_1685092800868.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Ayam</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <a href=""><img src="./img/messageImage_1685092807648.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Sarapan</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href=""><img src="./img/messageImage_1685092812795.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Minuman</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href=""><img src="./img/messageImage_1685092817276.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Daging Sapi</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href=""><img src="./img/messageImage_1685092823007.jpg" alt=""
                                class="bd-placeholder-img rounded-circle" width="125" height="125"></a>
                        <a href="" class="text-decoration-none" style="color:inherit">
                            <p class="fs-5 fw-bold">Ikan</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Article -->


    <!-- About -->

    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-5">
            <h2 class="text-body-emphasis">About</h2>
            <div class="row row-cols-1 row-cols-sm-2 g-5 d-flex align-items-center">
                <div class="col pt-5 rounded-5 d-none d-sm-none d-md-none d-lg-none d-xl-flex"
                    style="position: relative;">
                    <img src="./img/messageImage_1685118554573.jpg" style="width: 686px;">
                </div>
                <div class="col pt-5 d-none d-sm-none d-md-none d-lg-none d-xl-flex">
                    <div class="col rounded-end-5 d-none d-lg-none d-xl-flex justify-content-start align-items-center"
                        style="height: 550px; background-color: #F0E6E6 ;">
                        <div class="col p-5 align-item rounded-5 d-none d-sm-none d-md-none d-lg-none d-xl-flex align-items-center"
                            style="height: 450px;width: 450px; background-color: white; position: absolute;">
                            <p class="fs-4">Flavory merupakan sebuah platform yang memberikan kemudahan bagi
                                para pecinta kuliner
                                untuk mengembangkan hobi dalam
                                memasak dengan mencoba resep atau menambahkan resep dan dibagikan.</p>
                        </div>
                        <div class="col align-item rounded-5 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-none align-items-center"
                            style="height: 450px;width: 525px; background-color: white; position: absolute;">
                            <p class="fs-4">Flavory merupakan sebuah platform yang memberikan kemudahan bagi
                                para pecinta kuliner
                                untuk mengembangkan hobi dalam
                                memasak dengan mencoba resep atau menambahkan resep dan dibagikan.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="col pt-3 rounded-5 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-none d-xxl-none justify-content-center align-content-start w-100">
                    <div class="col rounded-5" style="height: 100%;   background-color: white;">
                        <p class="fs-4">Flavory merupakan sebuah platform yang memberikan kemudahan bagi
                            para pecinta kuliner
                            untuk mengembangkan hobi dalam
                            memasak dengan mencoba resep atau menambahkan resep dan dibagikan.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Features -->
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-5">
            <h2 class="text-body-emphasis">Features</h2>
            <div class="row row-cols-1 row-cols-sm-2 g-5">
                <div class="col pt-5">
                    <div class="card shadow-lg">
                        <a href="">
                            <img src="./img/messageImage_1685111677464.jpg" alt="" width="100%">
                        </a>
                        <div class="card-body">
                            <p class="card-text text-center">Cari Resep Kesukaanmu dengan Filter yang Mempermudah
                                Pencarian.</p>
                        </div>
                    </div>
                </div>
                <div class="col pt-5">
                    <div class="card shadow-lg">
                        <a href="">
                            <img src="./img/messageImage_1685111685773.jpg" alt="" width="100%">
                        </a>

                        <div class="card-body">
                            <p class="card-text text-center">Tulis Resep Andalanmu dan Bagikan dengan Penikmat
                                Kuliner
                                lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tips -->
    <!-- <div class="container">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div> -->

    <!-- Footer -->
    @include('footer')
</body>

</html>