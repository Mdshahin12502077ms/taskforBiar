


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background: rgb(34, 193, 195);
            background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(121, 32, 153, 1) 86%);
            background-attachment: fixed;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        #form {
            width: 400px;
            margin: 20vh auto 0 auto;
            background-color: whitesmoke;
            border-radius: 5px;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #792099;
        }

        #form button {
            background-color: #792099;
            color: white;
            border: 1px solid #792099;
            border-radius: 5px;
            padding: 10px;
            margin: 20px 0px;
            cursor: pointer;
            font-size: 20px;
            width: 100%;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .input-group input {
            border-radius: 5px;
            font-size: 20px;
            margin-top: 5px;
            padding: 10px;
            border: 1px solid rgb(34, 193, 195);
        }

        .input-group input:focus {
            outline: 0;
        }

        .input-group .error {
            color: rgb(242, 18, 18);
            font-size: 16px;
            margin-top: 5px;
        }

        .input-group.success input {
            border-color: #0cc477;
        }

        .input-group.error input {
            border-color: rgb(206, 67, 67);
        }
    </style>

    <title>Register</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{ route('register') }}" id="form">
            @csrf
            <h1>{{ __('Register') }}</h1>
            <div class="input-group">
                <label for="username">{{ __('Name') }}</label>
                <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="input-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input type="text" id="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:red">{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="input-group">
                <label for="password">{{ __('Password') }}</label>

                        
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
