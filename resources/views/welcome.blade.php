<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/app.css')

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <h1 class="bg-gray-100 m-auto text-center">Welcome page </h1>
    <div class="w-full text-center flex flex-col">
        <p>Login</p>
        <label>
            <input inputmode="text" placeholder="richard.hendricks@piedpiper.com" class=" mb-5 mx-auto border-red-700 border-solid border hover:border-sky-500 rounded focus:border focus:border-red-500 " name="login" type="text" >
        </label>
        <p>Password</p>
        <label>
            <input inputmode="text" placeholder="richard.hendricks@piedpiper.com" class="  mx-auto border-red-700 border-solid border hover:border-sky-500 rounded focus:border focus:border-red-500 " name="login" type="text" >
        </label>
    </div>
    <section class="w-full text-center flex flex-col">
        <button onClick="return click()" class="block mx-auto border border-solid border-sky-500 rounded text-2xl hover:border-sky-800 mt-4"> Login</button>
    </section>
    <h1 class="text-center pt-12">Tasks:"{{$email = DB::table('tasks')->where('id', '2')->value('body')}} " create at: {{$time = DB::table('tasks')->where('id', '2')->value('created_at')}} </h1>

    @vite('resources/js/app.js')

    </body>
</html>
