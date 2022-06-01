@extends('base')
@section('content')
    <!--************************************
        Main Start
      *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                                Author Detail Start
                        *************************************-->
        <div class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-authordetail">
                            <figure class="tg-authorimg" style="width: 300px;">
                                <img src="/{{$book->gambar}}" alt="image description">
                            </figure>
                            <div class="tg-authorcontentdetail">
                                <div class="tg-sectionhead">
                                    <h2>{{$book->judul}}</h2>

                                </div>
                                <div class="tg-description">
                                    <p>{{$book->deskripsi}}</p>
                                    
                                </div>
                                <div class="tg-booksfromauthor">
                                    <div class="tg-sectionhead">
                                        <h2>Rekomendasi buku</h2>
                                    </div>
                                    <div class="row">
                                        @foreach($rekom as $item)
                                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                            <div class="tg-postbook">
                                                <figure class="tg-featureimg">
                                                    <div class="tg-bookimg">
                                                        <div class="tg-frontcover"><img
                                                                src="/{{$item->gambar}}"
                                                                alt="image description"></div>
                                                        <div class="tg-backcover"><img
                                                                src="/{{$item->gambar}}"
                                                                alt="image description"></div>
                                                    </div>
                                                    <a class="tg-btnaddtowishlist" href="/detail/{{$item->id}}">
                                                        <i class="icon-heart"></i>
                                                        <span>Rekomendasi</span>
                                                    </a>
                                                </figure>
                                                <div class="tg-postbookcontent">
                                                  
                                                    <div class="tg-themetagbox"><span class="tg-themetag">{{$item->genre}}</span>
                                                    </div>
                                                    <div class="tg-booktitle">
                                                        <h3><a href="/detail/{{$item->id}}">{{$item->judul}}</a></h3>
                                                    </div>
                                                 

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                                Author Detail End
                        *************************************-->
    </main>
    <!--************************************
                            Main End
                    *************************************-->
@endsection
