<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <form action="" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>nqt - Login</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nqt-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="nqt-email" name="nqt-email" placeholder="name@example.com">
                        @error('nqt-email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nqt-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="nqt-password" name="nqt-password" placeholder="****" value="123456">
                        @error('nqt-password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    @if (Session::has('nqt-error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    {{session::get('nqt-error')}}
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>