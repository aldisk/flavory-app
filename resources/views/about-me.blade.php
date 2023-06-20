<!DOCTYPE html>
<html lang="en" data-bs-theme="lorem">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Navbar -->
    @include('navbar')

    <!-- Sidebar -->
    <div class="container my-5">
        <div class="row row-cols-2  py-3 text-center rounded-5">
            <div class="col-3 me-auto h-100">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-start rounded-4" id="accordion"
                    style="width: 100%; background-color: #F0E6E6;">
                    <span class="fs-4 text-start">Profile</span>
                    <hr>
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                            <img class="rounded-circle me-2" src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" alt="" width="32" height="32">
                        @else
                            <img class="rounded-circle me-2"  src="{!! asset('defaultpp.png') !!}" alt="This is you " width="32" height="32">
                        @endif
                        <div>
                            <h6 class="fw-bold text-dark mb-1 text-start">{{ $profile -> name }}
                            </h6>
                            <p class="text-muted small mb-0">
                                {{ '@'.$profile -> username }}
                            </p>
                        </div>
                    </a>
                    <hr>

                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link link-body-emphasis" data-bs-toggle="collapse" href="#collapseExample1"
                                role="button" aria-expanded="false" aria-controls="collapseExample1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                                Account
                            </a>
                        </li>
                        <li>
                            <a class="nav-link link-body-emphasis" data-bs-toggle="collapse" href="#collapseExample2"
                                role="button" aria-expanded="false" aria-controls="collapseExample2">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-card-text" viewBox="0 0 16 16">
                                    <path
                                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                    <path
                                        d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                My Recipe
                            </a>
                        </li>
                        <li>
                            <a class="nav-link link-body-emphasis" data-bs-toggle="collapse" href="#collapseExample4"
                                role="button" aria-expanded="false" aria-controls="collapseExample4">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                    <path
                                        d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                </svg>
                                Settings
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/logout" class="nav-link link-body-emphasis">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg>
                                Sign out
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- <div class="col-4">
                <img src="https://github.com/mdo.png" alt="" width="240" height="180" class="rounded-2">

            </div>
            <div class="col-8">
                <img src="https://github.com/mdo.png" alt="" width="240" height="180" class="rounded-2">

            </div> -->
            <div class="col-9 rounded-4 p-2 " style="background-color: #F0E6E6;">

                <div class="col-12">
                        <div class="card card-body d-flex">
                            <div class="col-12 p-3">
                                <p class="text-start fs-4">
                                    <strong>Account Detail</strong>
                                </p>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-start">
                                        <div class="form-floating mb-3">
                                            <input type="" readonly class="form-control-plaintext p-0 border-0"
                                                id="floatingPlaintextInput" placeholder="" value=""
                                                style="width: 0;height: 0;">
                                            <label class="" for="floatingPlaintextInput">Profile Picture</label>
                                        </div>
                                        <div class=" pt-5">
                                        @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                                            <img class="rounded-circle me-2" src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" alt="" width="150" height="150">
                                        @else
                                            <img class="rounded-circle me-2"  src="{!! asset('defaultpp.png') !!}" alt="This is you " width="150" height="150">
                                        @endif
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="Username" readonly class="form-control-plaintext"
                                                id="floatingPlaintextInput" placeholder="@Username" value="{!! $profile->username !!}">
                                            <label for="floatingPlaintextInput">Username</label>

                                        </div>
                                        <div class="form-floating">
                                            <input type="text" readonly class="form-control-plaintext"
                                                id="floatingPlaintextInput" placeholder="Name" value="{!! $profile->name !!}">
                                            <label for="floatingPlaintextInput">Name</label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="text-start fs-4">
                                    <strong>Change Profile Picture</strong>
                                </p>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <img class="object-fit-contain border rounded-circle" id="preview"
                                                width="150px" height="150px">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-6 d-flex align-items-center justify-content-start">
                                        <form action="{{ route('uploadPP') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input class="form-control" aria-label="file example" type="file"
                                                name="pp" accept="image/jpeg,image/png" onchange="loadPreview(event)">
                                            <br>
                                            <button class="btn btn-danger shadow-lg"
                                                style="height: 50px; width :100%; border-radius:15px" type="submit"
                                                value="Change" id="button-addon2">
                                                <strong>Change</strong></button>
                                        </form>
                                    </div>
                                    <div class="col-3 d-flex align-items-center justify-content-start ps-0">
                                        <div id="passwordHelpBlock" class="form-text" style="font-size: 12px;">
                                            <Strong>
                                                <p class="text-start m-0">Requirement</p>
                                            </Strong>
                                            <p class="text-start m-0">
                                                Supported images are .jpg / .jpeg / .png image formats
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Resep -->
                <div class="col-12">
                    <div class="collapse" id="collapseExample2" id="accordion">
                        <div class="card card-body d-flex">
                            @foreach($reseps as $resep)
                            <div class="col-12 my-2">
                                <div
                                    class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                                    <div class="col-auto d-none d-lg-block">
                                        <a href="{{ 'resep/view/'.$resep->id }}">
                                            <img src="{{ asset('storage/foto-resep/'.$resep->id.'.jpg?lastmod'.rand()) }}" alt=""
                                                style="width: 390px; height: 274px;">
                                        </a>
                                    </div>
                                    <div class="col pt-2 pb-2 px-4 d-flex flex-column">
                                        <div class="col-12 d-flex justify-content-between ">
                                            <div class="col-9">
                                                <a href="/recipes/Ayam Goreng Tepung"
                                                    class="text-decoration-none text-dark">
                                                    <h5 class="mt-2 text-start">{{ $resep->nama }}</h5>
                                                    <div class="text-start">
                                                        <!-- <span class="heading text-start pb-3">User Rating</span> -->
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6">
                                                <a href="{{ 'resep/update/'.$resep->id }}" class="btn btn-danger shadow-lg"
                                                    style="height: 42px; width :100%; border-radius:15px" type="button"
                                                    id="button-addon2">
                                                    <strong><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-pencil-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                        </svg>
                                                        Edit
                                                    </strong>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <form action="{{ route('removeResep') }}" method = "post">
                                                @csrf
                                                <input type="hidden" name="id" value="{!! $resep->id !!}">
                                                <button class="btn btn-danger shadow-lg"
                                                    style="height: 42px; width :100%; border-radius:15px" type="submit"
                                                    id="button-addon2">
                                                    <strong><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-trash"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                        </svg>
                                                        Delete
                                                    </strong>
                                                </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-3 my-3 ms-auto">
                                <a href="/resep/insert" class="btn btn-outline-danger shadow-lg"
                                style="height: 50px; width :100%; border-radius:15px" type="button"
                                id="button-addon2"> <strong>Tambah Resep<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bookmark -->
                <!-- Setting -->
                <div class="col-12">
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body d-flex">
                            <div class="col-12">
                                <p class="text-start fs-4 px-3 pt-3">
                                    <strong>Change Name and Password</strong>
                                </p>
                                <div class="row">
                                    <div class="px-4">
                                        <form action="{{ route('authUpdateProfile') }}", method="post" id="updateProfile">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingName"
                                                placeholder="Name" name="fullname" required>
                                            <label for="floatingPassword">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                placeholder="Password" name="oldpassword" required>
                                            <label for="floatingPassword">Old Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingPassword"
                                                placeholder="Password" name="password" required>
                                            <label for="floatingPassword">New Password</label>
                                            <div id="passwordHelpBlock" class="form-text text-start"
                                                style="font-size: 12px;">
                                                *Your password must be 8-64 characters long, contain letters and
                                                numbers,
                                                and must not contain spaces, special
                                                characters, or emoji.
                                            </div>
                                        </div>
                                        <div class="col-3 my-3 ms-auto">
                                            <button class="btn btn-danger shadow-lg"
                                                style="height: 50px; width :100%; border-radius:15px" type="submit"
                                                id="button-addon2" form="updateProfile">
                                                <strong>Change Password</strong></button>
                                        </div>
                                        </form>
                                        <hr>
                                    </div>
                                    <p class="text-start fs-4 px-3 pt-3">
                                    <strong>Delete Account</strong>
                                    </p>    
                                    <div class="px-4">
                                        <form action="{{ route('authDelete') }}", method="post" id="deleteProfile">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="floatingName"
                                                placeholder="Name" name="password" required>
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <div class="col-3 my-3 ms-auto">
                                            <button class="btn btn-danger shadow-lg"
                                                style="height: 50px; width :100%; border-radius:15px" type="submit"
                                                id="button-addon2" form="deleteProfile">
                                                <strong>Delete Account</strong></button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- <div class="bd-example" data-example-id="" id="accordion">
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1"
                aria-expanded="false" aria-controls="collapseExample1">
                Button 1
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2"
                aria-expanded="false" aria-controls="collapseExample2">
                Button 2
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3"
                aria-expanded="false" aria-controls="collapseExample3">
                Button 3
            </button>
        </p>
        <div class="collapse" id="collapseExample1" data-parent="#accordion">
            <div class="card card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                anim
                keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
        <div class="collapse" id="collapseExample2" data-parent="#accordion">
            <div class="card card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                anim
                keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident 2.
            </div>
        </div>
        <div class="collapse" id="collapseExample3" data-parent="#accordion">
            <div class="card card-block">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil
                anim
                keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident 3.
            </div>
        </div>
    </div> -->

    <!-- Footer -->
    <div class="container-fluid" style="background-color: #F0E6E6;">
        <footer class="d-flex justify-content-center row row-cols-1 row-cols-sm-1 row-cols-md-5 py-3 border-top">
            <div class="col mb-3 d-inline-block">
                <a href="/" class="d-flex justify-content-start link-body-emphasis text-decoration-none">
                    <img src="../img/flavory-removebg-preview.png" alt="Logo" width="150"
                        class="d-inline-block align-text-center">
                </a>
                <div class="d-inline-block">
                    <p>Daftar dan ekplor resep kesukaanmu</p>
                    <a href="" class="text-decoration-none" style="color:inherit"><svg class="mx-1"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg></a>
                    <a href="" class="text-decoration-none" style="color:inherit"><svg class="mx-1"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a>
                    <a href="" class="text-decoration-none" style="color:inherit"><svg class="mx-1"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a>
                    <a href="" class="text-decoration-none" style="color:inherit"><svg class="mx-1"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a>
                    <a href="" class="text-decoration-none" style="color:inherit"><svg class="mx-1"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg></a>

                </div>
            </div>
            <div class="col mb-3 pt-4">
                <h5>About Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Why Us?</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">How work?</a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3 pt-4">
                <h5>Features</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Recipe</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Add yours</a>
                    </li>
                </ul>
            </div>

            <div class="col mb-3 pt-4">
                <h5>Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Website</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                </ul>
            </div>
        </footer>
        <p class="text-body-secondary text-center mb-0 pb-3">Copyright ©2023 FLAVORY Inc.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        function loadPreview(event) {
            var input = event.target;
            var preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>