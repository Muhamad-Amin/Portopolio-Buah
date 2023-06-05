<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko buah</title>
    <link rel="stylesheet" href="{{ asset('assets/Css/Produk.css') }}">
</head>

<body>
    <section>
        {{-- Navbar Start --}}
        <div class="navbar-top">
            <div class="logo">
                <h1>SAUDAGAR</h1>
            </div>
            <div class="search">
                <form action="" method="get">
                    <input type="text" name="Keyword" placeholder="Cari Product">
                    <button>Search</button>
                </form>
            </div>
            <div class="">
                <a href="">beli</a>
                <a href="/Add-product">user</a>
            </div>
        </div>
        <div class="navbar-buttom">
            <a href="#SemuaProduct">SEMUA PRODUCT</a>
            <a href="#Fruits">FRUITS</a>
            <a href="#Fish">FISH</a>
            <a href="#SeaFood">SEA FOOD</a>
            <a href="Meat">MEAT</a>
            <a href="#Vegetable">VEGETABLE</a>
        </div>
        {{-- Navbar End --}}


        {{-- Hero Section Start --}}
        <div class="content">

            <div class="content-left">
                <div class="tulisan">
                    <p>Healty Nutrition</p>
                </div>
                <h1>LifeStyle</h1>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <a href="">MORE</a>
            </div>

            <div class="content-right">
            </div>

        </div>
        {{-- Hero Section Start --}}


        {{-- Kategori Start --}}
        <div class="Kategori">
            <h2>Kategori</h2>

            <div class="content-kategory">
                @foreach ($kategori as $item)
                    <div class="product">
                        <img src="{{ asset('storage/Gambar/' . $item->Gambar) }}" alt="{{ $item->Name }}">
                        <p>2 Product</p>
                        <h5>{{ $item->Name }}</h5>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Kategori End --}}


        {{-- Product Start --}}
        <div class="Produk-terbaru">
            <h2>Produk Terbaru</h2>

            <div class="content-Product">
                @foreach ($produk as $item)
                    <div class="product">
                        <img src="{{ asset('storage/Produk/' . $item->Gambar) }}" alt="{{ $item->Name }}">
                        <p>{{ $item->Name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Product End --}}
    </section>

</body>

</html>
