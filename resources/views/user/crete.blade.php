<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user-create</title>
</head>
<body>
    <h1>User form table</h1>
    <form action="/user-create" method="POST">
        @csrf
        <input type="text" name="name"> <br>
        <input type="email" name="email" id="email"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <!-- Pills content -->
        <div class="tab-content w-50 mx-auto">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="/user-create" method="POST">
                    <div class="text-center mb-5">
                        <h3 class="mt-2">Hisobga kirish:</h3>
                    </div>
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="loginName" class="form-control" />
                        <label class="form-label" for="loginName">Elektron pochta yoki foydalanuvchi nomi</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="loginPassword" class="form-control" />
                        <label class="form-label" for="loginPassword">Maxfiy parol</label>
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                                <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                    checked />
                                <label class="form-check-label" for="loginCheck">Meni eslang</label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary mx-auto btn-block w-100 mb-4">Kirish</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>A'zo emasmi ? <a href="#!">Ro'yxatdan o'tish</a></p>
                    </div>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html> --}}
