<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
        <div class="wrapper">
                    <div class="card-header">Registerasi</div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <table class="table">
                                <tr>
                                    <td>
                                        <label for="name">Name</label>
                                    </td>
                                    <td>
                                        <label>:</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="email">Email</label>
                                    </td>
                                    <td>
                                        <label>:</label>
                                    </td>
                                    <td>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="password">Password</label>
                                    </td>
                                    <td>
                                        <label>:</label>
                                    </td>
                                    <td>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="password_confirmation">Confirm Password</label>
                                    </td>
                                    <td>
                                        <label>:</label>
                                    </td>
                                    <td>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <div class="remember">
                                            <p>Kembali ke <a href="{{ route('admin.login') }}">Halaman Login</a></p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
</body>
</html>
