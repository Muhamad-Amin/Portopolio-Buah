<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/Css/detail-produk.css') }}">
    <title>Produk</title>
</head>

<body>

    <section>

        {{-- Side bar Start --}}
        <div class="side-bar">
            <div class="logo">
                <h1>Menu</h1>

            </div>

            <hr>

            <div class="kategori">
                <a href="/admin">Administrasi</a>
            </div>

            <div class="kategori">
                <a href="/Add-ketegori">Kategori</a>
            </div>

            <div class="kategori produk">
                <a href="/Add-product">Produk</a>
            </div>

            <div class="kategori">
                <a href="/login">Login</a>
            </div>

        </div>

        {{-- Side bar End --}}


        {{-- Content Start --}}
        <div class="content">

            <div class="head">

                <div class="head-top">

                </div>

                <div class="head-bottom">

                    <h1>Detail produk {{ $produk->Name }}</h1>
                </div>

            </div>

            <div class="main">

                <div class="isi">

                    <img src="{{ asset('storage/Produk/' . $produk->Gambar) }}" alt="{{ $produk->Name }}">
                    <p>Nama : {{ $produk->Name }}</p>
                    <p>Harga : Rp{{ $produk->Harga }}</p>
                    <p>Kategori : {{ $produk->categary_id }}</p>
                    <p> Keterangan : </p>
                    <div class="keterangan">
                        <p>{{ $produk->Keterangan }}
                    </div>
                </div>

            </div>

        </div>
        </div>
        {{-- Content End --}}

    </section>

</body>

</html>
