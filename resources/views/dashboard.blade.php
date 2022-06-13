@extends('base')
@section('content')
@if(session('status'))
<script>
    alert("{{session('status')}}");
</script>
@endif
    <!--************************************
                        Main Start
                      *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                         Contact Us Start
                       *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-contactus">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <h2>Dashboard Admin</h2>
                                <a href="/add" class="ml-auto tg-btn tg-active">Tambah Buku</a>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Genre</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allbook as $item)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    
                                                        <img src="/{{ $item->gambar }}" alt="image description" width="50px">
                                                    
                                                </td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->genre }}</td>
                                                <td><a href="/detail/{{$item->id}}">Detail</a></td>
                                                <td><a href="/edit/{{$item->id}}" class="tg-btn tg-active">Edit Buku</a> <a href="/hapus/{{$item->id}}" onclick="return confirm('Yakin ingin menghapus buku?')" class="tg-btn">Hapus</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
