<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg-gradient {
            background: linear-gradient(to bottom right, #3CB371, #00FF00); /* Gradasi warna hijau */
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-green {
            background-color: green; /* Mengubah warna tombol menjadi hijau */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif; /* Variasi jenis teks */
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: opacity 0.3s;
        }

        .btn-green:hover {
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

        .form-group label {
            font-family: 'Verdana', sans-serif; /* Variasi jenis teks */
            font-size: 1rem;
            font-weight: bold;
            color: white;
        }

        .form-control {
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-gradient">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('danger'))
                        <p>{{ Session::get('danger') }}</p>
                        @endif
                        <h2 class="card-title">Daftar</h2> <!-- Menggunakan jenis teks Times New Roman -->
                        <form action="/simpan" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="name" class="form-control" name="name" placeholder="Enter your nama">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-block btn-green">simpan</button> <!-- Menggunakan kelas btn-green -->
                            <a href="/halamanawal" class="btn btn-block btn-green">kembali</a> <!-- Menggunakan kelas btn-green -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
