<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="wrapper">
        <div class="login-form">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-header">Login</div>
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <table class="table">
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <label>:</label>               
                        <td>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password:</label>
                        </td>
                        <td>
                            <label>:</label> 
                        <td>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </td>
                    </tr>
                </table>
            </form>
            <div class="remember">
                <p>Belum punya akun? <a href="{{ route('admin.register') }}">Registrasi di sini</a></p>
            </div>
        </div>
    </div>
</body>
</html>
