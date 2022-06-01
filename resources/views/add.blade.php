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
                                <h2>Tambah Buku</h2>
                            </div>
                        </div>
                        <form class="tg-formtheme tg-formcontactus" method="post" action="/add"  enctype="multipart/form-data">
                            @csrf
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="file" name="gambar" class="file" accept="image/*" style="visibility:hidden;position: absolute;">
                                <div class="input-group">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                                    
                                </div>
                                <img src="/assets/placeholder.png" id="preview" class="img-thumbnail">
                                <div class="input-group-append">
                                    <button type="button" class="browse btn btn-primary">Browse...</button>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                                
                                <fieldset>
                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="genre" class="form-control" placeholder="Genre" required>
                                    </div>

                                    <div class="form-group tg-hastextarea">
                                        <textarea placeholder="Deskripsi" name="deskripsi" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="tg-btn tg-active">Tambah</button>
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
