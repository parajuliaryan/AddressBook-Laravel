<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Address Book</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
              font-family: 'Nunito', sans-serif;
            }
            .log-in{
              text-decoration: none;
              font-size: 18px;
            }
            .register{
              text-decoration: none;
              font-size: 18px;
            }           

            .container{
              display: flex;
              width: 80%;
              height: 100vh;
              margin: 0 auto; 
            }

            .address-book{
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: space-around;
              margin: 50px auto;
              width: 60%;
              text-align: center;
            }

            h2{
              font-size: 32px;
            }

            button{
              background-color: rgb(37, 195, 243);
              outline: none;
              border: none;
              border-radius: 5px;
              width: 100px;
              height: 30px;
            }

            button:hover{
              cursor: pointer;
              background-color: red;
            }

            button a{
              color: white;
            }

            .button-wrapper{
              display: flex;
              justify-content: space-around;
              padding: 10px;
            }
        </style>
    

    </head>
    <body class="antialiased">
        <div class="container">
                <div class="address-book">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            
                            <h2>Welcome to Address Book</h2>
                            <div class="button-wrapper">
                            <button><a href="{{ route('login') }}" class="log-in">Log in</a></button>

                            @if (Route::has('register'))
                              <button><a href="{{ route('register') }}" class="register">Register</a></button>
                            </div>
                            @endif
                        @endauth
                        </div>
                    </div>
                @endif
        </div>
    </body>
</html>
