<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titulo')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body bgcolor="4A4949">

    <div class="container">
       
       @include('layouts.partials.nav')

        @yield('content')


    </div>


</body>

</html>