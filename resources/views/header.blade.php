<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #000000;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 16px 50px;
            text-decoration: none;

        }
        .first{
            margin-left: 340px;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
    <nav>
        <a href="/" class="first">Home</a>
        <a href="/about">About</a>
        <a href="/history">History</a>
        <a href="/achievements">Achievements</a>
        <a href="/contact">Contact</a>
    </nav>


</body>

</html>
