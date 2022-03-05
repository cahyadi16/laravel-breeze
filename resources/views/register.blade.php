<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

    <title>Register</title>

    <link href="adminkit/static/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Register Akun</h1>
                            <p class="lead">
                                Silahkan melakukan register terlebih dahulu
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form method="POST" action="register">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nama</label>
                                            <input
                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                id="name" type="text" name="name" value="{{ old('name') }}"
                                                placeholder="Masukan nama" autofocus />
                                            @error('name')
                                                <span class="alert alert-danger text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                id="email" type="email" name="email" value="{{ old('email') }}"
                                                placeholder="Masukan email" autofocus />
                                            @error('email')
                                                <span class="alert alert-danger text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password">Password</label>
                                            <input
                                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                id="password" type="password" name="password"
                                                placeholder="Masukan Password" />
                                            @error('password')
                                                <span class="alert alert-danger text-danger">{{ $message }}</span> <br>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="konfpass">Konfirmasi Password</label>
                                            <input
                                                class="form-control form-control-lg @error('konfpass') is-invalid @enderror"
                                                id="konfpass" type="password" name="password_confirmation"
                                                placeholder="Masukan Konformasi Password" />
                                            @error('konfpass')
                                                <span class="alert alert-danger text-danger">{{ $message }}</span> <br>
                                            @enderror
                                        </div>
                                        <small>
                                            <p>Sudah punya akun? <a href="login">Login sekarang</a></p>
                                        </small>
                                        <div class="mt-3">
                                            <button class="btn btn-lg btn-primary">Register</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>
