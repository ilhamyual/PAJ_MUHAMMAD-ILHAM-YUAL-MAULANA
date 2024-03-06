<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/4.5.2-bootstrap.min.css') }}">


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
            background-image: url('your-image-url.jpg'); /* Replace 'your-image-url.jpg' with the actual image URL */
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
                <img src="{{ asset('img/login.png') }}" class="img-fluid" alt="login-image">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="form-group">
                                    <div class="text-center">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                                <div class="form-group mt-4">
                                    <div class="text-center">
                                        <span>{{ __("Don't have an account?") }}</span>
                                        <a href="{{ route('register') }}">{{ __('Register Here') }}</a>
                                    </div>
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

