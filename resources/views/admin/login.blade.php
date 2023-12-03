<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Muhamad Nauval Azhar">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="This is a login page template based on Bootstrap 5">
    <title>Bootstrap 5 Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<section class="h-100 mt-5">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">

                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Авторизация</h1>
                        <form method="POST" action="{{route("admin.auth")}}" class="needs-validation" novalidate="" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Логин</label>
                                <input id="email" type="email" class="form-control" name="login" value="" required autofocus>
                                <div class="invalid-feedback d-flex">
                                    {{$errors->first("login")}}
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Пароль</label>

                                </div>
                                <input id="password" type="password" class="form-control" name="password" required>
                                <div class="invalid-feedback d-flex">
                                    {{$errors->first("password")}}
                                </div>
                            </div>

                            <div class="d-flex align-items-center">

                                <button type="submit" class="btn btn-primary ms-auto">
                                    Войти
                                </button>
                            </div>


                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script src="js/login.js"></script>
</body>
</html>
