<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Buah</title>
    <style>
        section {
            padding: 10px;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 100% !important;
            height: 100vh !important;
        }

        form {
            height: 270px;
            width: 400px;
            border: 2px solid black;
            text-align: center;
            padding: 9px;
        }

        input {
            margin-top: 15px;
            height: 30px;
            width: 355px;
        }
    </style>
</head>

<body>
    <section class="container">

        <img src="tes.jpg" alt="">

        <form action="/create" method="post">
            @csrf

            <label for="">Name : </label>
            <input type="text" name="Name"> <br>
            <label for="">Password : </label>
            <label for="">Harga : </label><input type="text" name="Name"> <br>
            <select>
                <option value="">Select One</option>
                <option value="">Mangga</option>
                <option value="">Apel</option>
                <option value="">Jeruk</option>
                <option value="">Daging</option>
            </select> <br>
            <label for="">Jumlah : </label>
            <input type="text" name="Name"> <br>

            <div class="mt-10">
                <button type="submit">Save</button>
            </div>

        </form>

    </section>
</body>

</html>
