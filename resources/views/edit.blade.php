@extends('base')
@section('content')
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
                                <h2>Edit Buku</h2>
                            </div>
                        </div>
                        <form class="tg-formtheme tg-formcontactus" method="post" action=""  enctype="multipart/form-data">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                @php
                                    $old = substr($book->gambar,5);
                                @endphp
                                <input type="hidden" name="old" value="{{$old}}">
                                <input type="file" name="gambar" class="file" accept="image/*" style="visibility:hidden;position: absolute;">
                                <div class="input-group">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    
                                </div>
                                <img src="/{{ $book->gambar }}" id="preview" class="img-thumbnail">
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Browse...</button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" value="{{$book->judul}}" name="judul" class="form-control" placeholder="Judul" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" value="{{$book->genre}}" name="genre" class="form-control" placeholder="Genre" required>
                                    </div>
                                    <div class="form-group tg-hastextarea">
                                        <input type="text" value="{{$book->link}}" name="link" class="form-control" placeholder="Link Pembelian" required>
                                    </div>

                                    <div class="form-group tg-hastextarea">
                                        <textarea placeholder="Deskripsi" name="deskripsi" required>{{$book->deskripsi}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">Edit</button>
                                    </div>
                                </fieldset>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                 Contact Us End
               *************************************-->
    </main>
    <!--************************************
                Main End
              *************************************-->
    
@endsection
