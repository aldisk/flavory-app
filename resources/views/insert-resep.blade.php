<!DOCTYPE html>
<html lang="en" data-bs-theme="...">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Navbar -->
    @include('navbar')
    <!-- Tambah resep -->
    <div class="container my-4">
        <form action="{{ route('insertResep') }}" method="post" enctype="multipart/form-data" id="submitResep">
            @csrf
        <div class="row row-cols-1">
            <div class="col rounded-pill d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="w-100 py-4 px-4">
                    <input name="nama" type="text" class="form-control p-0" placeholder="Nama Resep"
                        aria-describedby="button-addon2"
                        style="background-color: #FCF1F1; box-shadow: none; border: 0px solid;">
                </div>
            </div>
            <div class="col rounded-pill d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="w-100 py-4 px-4">
                    <input name="waktu" type="number" class="form-control p-0" placeholder="Total Waktu memasak"
                        aria-describedby="button-addon2"
                        style="background-color: #FCF1F1; box-shadow: none; border: 0px solid;">
                </div>
            </div>
            <div class="col rounded-5 d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="row w-100 ps-4">
                    <div class=" py-3 px-0">
                        <a class="btn text-start" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="false" aria-controls="collapseExample" style="color:#BC1823;width: 1250px;">
                            <strong>
                                Masukkan Bahan
                            </strong>
                        </a>
                    </div>
                    <div class="collapse pb-3 px-0" id="collapseExample">
                        <textarea name="bahan" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="col rounded-5 d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="row w-100 ps-4">
                    <div class=" py-3 px-0">
                        <a class="btn text-start" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                            aria-expanded="false" aria-controls="collapseExample2" style="color:#BC1823;width: 1250px;">
                            <strong>
                                Masukkan Alat
                            </strong>
                        </a>
                    </div>
                    <div class="collapse pb-3 px-0" id="collapseExample2">
                        <textarea name="alat" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="col rounded-5 d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="row w-100 ps-4">
                    <div class=" py-3 px-0">
                        <a class="btn text-start" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                            aria-expanded="false" aria-controls="collapseExample3"
                            style="color:#BC1823; width: 1250px;">
                            <strong>
                                Masukkan Langkah-Langkah
                            </strong>
                        </a>
                    </div>
                    <div class="collapse pb-3 px-0" id="collapseExample3">
                        <textarea name="langkah" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="col rounded-pill d-flex align-items-center w-100 h-100 mb-3"
                style=" background: #FCF1F1; border: 1px solid #BC1823;">
                <div class="w-100 py-4 px-4">
                    Foto Resep <input type="file" name="foto-resep" accept="image/png, image/jpeg, image/gif" required>
                </div>
            </div>
        </div>
        </form>
        <div class="col rounded-pill d-flex justify-content-center align-items-center w-100 h-100 mb-3">
            <div class="w-50 py-4 px-2">
                <button class="btn btn-danger shadow-lg rounded-4" style="height: 50px; width :100%;" type="submit"
                    id="button-addon2" form="submitResep">
                    <strong>Buat Resep
                    </strong>
                </button>
            </div>
        </div>

    </div>
    </div>

    <!-- Footer -->
    @include('footer')
</body>

</html>