<html>

<head>
    <meta charset="UTF-8">
    <link href="font/">
    <link href="css/test.css" rel="stylesheet">
    <link href="css/normlize.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Test HTML+CSS</title>
</head>

<body>

@include('includes/header')
    
    {{-- test.blade --}}
@yield('test')

    
@include('includes/contactUs')

@include('includes/footer')

</body>

</html>