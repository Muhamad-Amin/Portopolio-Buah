<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/Css/Add-kategori.css') }}">
    <title>Kategori</title>
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

                    <h1>Update Kategori {{ $kategori->Name }}</h1>
                </div>

            </div>

            <div class="main">

                <div class="isi">

                    <div class="form">
                        <form action="/update-kategori/{{ $kategori->id }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="input">
                                <input type="text" name="Name" value="{{ $kategori->Name }}" placeholder="Name">
                            </div>
                            <div class="input">
                                <input type="file" name="Gambar" value="{{ $kategori->Gambar }}" placeholder="Name">
                            </div>

                            <button type="submit">Update</button>
                        </form>
                    </div>


                    <div class="table">

                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($kategoriList as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ $item->Gambar }}" alt="{{ $item->Name }}"></td>
                                        <td>{{ $item->Name }}</td>
                                        <td>
                                            <a href="">Detail</a>
                                            <form action="/delete-kategori/{{ $item->id }}" method="POST">
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
