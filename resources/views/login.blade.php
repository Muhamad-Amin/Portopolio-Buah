<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/Css/Login.css') }}">
</head>

<body>

    <section>

        <div class="form">

            <h1>Selamat Masuk</h1>

            <form action="" method="get">
                @csrf


                <input type="text" name="Name" placeholder="Name" required>

                <input type="text" name="Password" placeholder="Password" required>

                <button type="submit">Masuk</button>

                <a href="/admin">Back</a>

            </form>

        </div>
    </section>


</body>

</html>
