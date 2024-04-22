<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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
            margin-top: 150px;
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
                <img src="img/register.png" class="img-fluid" alt="register-image">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
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
