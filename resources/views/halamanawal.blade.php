<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-orange {
            background-color: green;
        }

        .btn {
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            opacity: 0.8;
        }
        .card {
            background-color: pink; /* Warna ungu */
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-family: 'Times New Roman', Times, serif; /* Variasi jenis teks */
            color: white;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="bg-orange"> <!-- Mengubah class bg-light menjadi bg-orange -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">WELCOME</h1>
                        <p class="card-text"></p>
                        <a href="/login" class="btn btn-primary btn-block">Login</a>
                        <a href="/daftar" class="btn btn-primary btn-block">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
