<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Worm</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    @yield('content')
    <nav>
        <h1 id="navTitle">Book Worm<h1>
        <a class="navLinks" href="/">Home<a>
        <a class="navLinks" href="/authors">All Authors</a>
        <a class="navLinks" href="/authors/create">Add Authors</a>    
    </nav>
</body>
</html>