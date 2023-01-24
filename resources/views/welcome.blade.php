<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                <div class="content">
                    {{-- <a style="color:blue" href="{{ route('nagad.pay') }}"> <img src="./nagad.png" alt=""> Pay Now </a> --}}

                    <form action="{{ route('nagad.pay') }}" method="POST">
                        @csrf
                        <div class="title m-b-md">
                            Pay With Nagad
                        </div>
                        <div class="form-group mt-2">
                            <input type="text" name="order_id" value="12">
                            <input type="text" name="amount" value="10">
                        </div>
                        <div class="form-group mt-2">
                            <input type="submit" value="Pay Now" class="btn btn-info">
                            <a style="color:blue" href="{{ route('nagad.pay') }}"> <img src="./nagad.png" alt=""> </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>
