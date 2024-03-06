<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password Page</title>
    <link rel="stylesheet" href="{{ asset('css/4.5.2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top{
            margin-top: 180px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row margin-top">

            <div class="col-md-6 side-image">
                <img src="img/forget.png" class="img-fluid" alt="forget-password-image">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Forget Password
                    </div>
                    <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="btn btn-primary btn-block">{{ __('Email Password Reset Link') }}</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
