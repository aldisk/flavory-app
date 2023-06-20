<!DOCTYPE html>
<html lang="en" data-bs-theme="...">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- register -->
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{!! asset('img/login img.jpeg') !!}" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
                <div class="col-sm-6 text-black">
                    <div class="container pt-4">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-8 col-md-12">
                                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                    <div class="card-body p-5">

                                        <div class="img d-flex justify-content-between align-items-center">
                                            <h3 class="text-start" style="color: #BC1823;">Sign Up</h3>
                                            <img src="../img/flavory-removebg-preview.png" alt="" style="width: 100px;">

                                        </div>
                                        <!-- <div class="form-outline mb-2">
                                            <label class="form-label" for="typeEmailX-2">Name</label>
                                            <input type="" id="typeEmailX-2" class="form-control form-control-lg" />
                                        </div> -->

                                        <!-- 
                                        <div class="form-outline mb-2">
                                            <label class="form-label" for="typePasswordX-2">Username</label>
                                            <input type="" id="typePasswordX-2" class="form-control form-control-lg" />
                                        </div> -->
                                        <!-- <div class="form-outline mb-3">
                                            <label class="form-label" for="typePasswordX-2">Password</label>
                                            <input type="password" id="typePasswordX-2"
                                                class="form-control form-control-lg" />
                                        </div> -->
                                        <form action="{{ route('authRegister') }}" method="post" id="submitRegister">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">@</span>
                                                <div class="form-floating">
                                                    <input type="text" name="username" class="form-control" id="floatingInputGroup1"
                                                        placeholder="Username">
                                                    <label for="floatingInputGroup1">Username</label>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="fullname" class="form-control" id="floatingTextarea"
                                                    placeholder="Name">
                                                <label for="floatingTextarea">Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                                    placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                                <div id="passwordHelpBlock" class="form-text" style="font-size: 12px;">
                                                    *Your password must be 8-64 characters long, contain letters and
                                                    numbers,
                                                    and must not contain spaces, special
                                                    characters, or emoji.
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Checkbox
                                        <div class="form-check d-flex justify-content-start mb-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="form1Example3" />
                                            <label class="form-check-label" for="form1Example3"> Remember password
                                            </label>
                                        </div> -->
                                        <div class="login-button d-flex justify-content-center">
                                            <button class="btn btn-primary btn-lg btn-block d-block w-100"
                                                style="background: #BC1823;" type="submit" form="submitRegister">REGISTER</button>

                                        </div>

                                        <div class="mb-3"
                                            style="width: 100%; height: 15px; border-bottom: 1px solid black; text-align: center">
                                            <span style="font-size: 12px; background-color: white; padding: 0 10px;">
                                                atau
                                            </span>
                                        </div>

                                        <div
                                            class="google-button d-flex justify-content-center align-items-center mb-3">
                                            <button class="btn btn-lg btn-block btn-outline-danger d-block w-100"
                                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-google"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                                </svg> Login dengan Google</button>
                                        </div>
                                        <div class="facebook-button d-flex justify-content-center align-items-center">
                                            <button class="btn btn-lg btn-block btn-outline-danger mb-2 d-block w-100"
                                                type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-facebook"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                </svg> Login dengan Facebook</button>
                                        </div>
                                        <br>
                                        @if ($errors->any())
                                            <ul>
                                                @foreach($errors -> all() as $error)
                                                <li><strong>{{ $error }}</strong></li>
                                                @endforeach
                                            </ul>
                                            @endif

                                        @if (Session::has('result'))
                                            <ul>
                                                <li><strong>{{ Session::get('result') }}</strong></li>
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>