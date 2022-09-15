<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <h1 class="bg-gray-100 m-auto text-center">Welcome page </h1>
    <div class="w-full text-center flex flex-col">
        <label>
            <input inputmode="text" placeholder="richard.hendricks@piedpiper.com" class=" mb-5 mx-auto border-red-700 border-solid border hover:border-sky-500 rounded focus:border focus:border-red-500 " name="login" type="text" >
        </label>
        <label>
            <input inputmode="text" placeholder="richard.hendricks@piedpiper.com" class=" mt-12 mx-auto border-red-700 border-solid border hover:border-sky-500 rounded focus:border focus:border-red-500 " name="login" type="text" >
        </label>
    </div>
    <section class="w-full text-center flex flex-col">
        <button class="block mx-auto"> Login</button>
    </section>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>
<?php /**PATH /Users/nikitachaykin/Documents/Php/ebanyu_v_rot/resources/views/welcome.blade.php ENDPATH**/ ?>