<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/Css/Add-product.css') }}">
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

                    <h1>Produk</h1>
                </div>

            </div>

            <div class="main">

                <div class="isi">

                    <div class="form">
                        <form action="/update-produk/{{ $produk->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="input">
                                <input type="text" name="Name" value="{{ $produk->Name }}" placeholder="Name">
                            </div>

                            <div class="input">
                                <select name="categary_id" id="categori">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input">
                                <input type="text" name="Harga" value="{{ $produk->Harga }}" placeholder="Harga">
                            </div>


                            <div class="input">
                                <input type="file" name="Gambar" value="{{ $produk->Gambar }}" id="Gambar">
                            </div>

                            <div class="input">
                                <textarea name="Keterangan" id="Keterangan" cols="30" rows="10" placeholder="Keterangan"></textarea>
                            </div>


                            <button type="submit">Save</button>
                        </form>
                    </div>


                    <div class="table">

                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($produkList as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Name }}</td>
                                        <td>Rp{{ $item->Harga }}</td>
                                        <td>
                                            <a href="/detail-produk/{{ $item->id }}">Detail</a>
                                            <form action="/delete-produk/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
        {{-- Content End --}}

    </section>

</body>

</html>
