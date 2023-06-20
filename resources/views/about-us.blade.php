<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    @include('navbar')
    <!-- about -->
    <div class="album py-5 bg-body-tertiary">
        <div class="container p-5 rounded-5" style="background-color: #F0E6E6;">
            <h1 class="text-body-emphasis text-center mt-2 ">Meet The Team</h1>
            <p class="col-lg-8 mx-auto mb-5 fs-5 text-center text-muted">
                Sekumpulan orang stress yang mengejar deadline tugas akhir Pemweb
            </p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 gap-5 w-100">
                <div class="card" style="width: 22%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <img class="object-fit-contain border rounded-circle" id="preview" src="{!! asset('storage/team/rakan.jpeg') !!}"
                                width="150px" height="150px">
                        </div>
                        <h5 class="card-title">Rakan Fadhil Prayata</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Front-End</h6>
                        <p class="card-text">Kerja lembur bagai quda 🐎 ☝️😔</p>
                        <div class="d-inline-block">
                            <a href="https://www.linkedin.com/in/rakanfadhilp/" class="text-decoration-none me-2"
                                style="color:inherit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg></a>
                            <a href=" https://github.com/Ragraze" class="text-decoration-none" style="color:inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></a>

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 22%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <img class="object-fit-contain border rounded-circle" id="preview" src="{!! asset('storage/team/aldi.jpeg') !!}" width="150px"
                                height="150px">
                        </div>
                        <h5 class="card-title">Aldiansyah Satrio Kabisat</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Back-End</h6>
                        <p class="card-text">Sebaiknya jangan terlalu gegabah</p>
                        <div class="d-inline-block">
                            <a href=" https://github.com/aldisk" class="text-decoration-none" style="color:inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></a>

                        </div>
                    </div>
                </div>
                <div class="card" style="width: 22%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <img class="object-fit-contain border rounded-circle" id="preview" src="{!! asset('storage/team/yohana.jpeg') !!}" width="150px"
                                height="150px">
                        </div>
                        <h5 class="card-title">Yohana Beatrice Nainggolan</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Designer</h6>
                        <p class="card-text">Yang Mulia Yohana</p>
                        <div class="d-inline-block">
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 22%;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <img class="object-fit-contain border rounded-circle" id="preview" src="{!! asset('storage/team/agus.jpeg') !!}" width="150px"
                                height="150px">
                        </div>
                        <h5 class="card-title">Agustinus Parasian Tampubolon</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Front-End</h6>
                        <p class="card-text">Professional Racer</p>
                        <div class="d-inline-block">
                            <a href="https://www.linkedin.com/in/parasian/" class="text-decoration-none me-2"
                                style="color:inherit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg></a>
                            <a href="https://github.com/Parasian14" class="text-decoration-none" style="color:inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-github" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                </svg></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('footer')
</body>

</html>