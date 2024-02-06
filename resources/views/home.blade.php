<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-gradient {
            background: linear-gradient(to bottom right, #00FF00, #3CB371); /* Gradasi warna hijau */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-primary {
            background-color: pink; /* Mengubah warna tombol menjadi pink */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body class="bg-gradient">
    <div class="container text-center">
        <h1 class="display-4">Selamat Datang {{ auth()->user()->name }}</h1>
        <p class="lead">{{ auth()->user()->email }}</p>
        <a class="btn btn-primary" href="/halamanawal">Logout</a> <!-- Menggunakan kelas btn-primary -->
    </div>
</body>

</html>
