@extends('base')
@section('content')
    <!--************************************
        Home Slider Start
      *************************************-->
    <div id="tg-homeslider" class="tg-homeslider tg-homeslidervtwo tg-haslayout owl-carousel">
        <div class="item" data-vide-bg="poster: assets/images/slider/img-03.jpg"
            data-vide-options="position: 0% 50%">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                        <div class="tg-slidercontent">
                            <figure class="tg-authorimg"><img src="assets/images/img-03.png" alt="image description">
                            </figure>
                            <h1>Cari buku favoritmu disini</h1>
                            <div class="tg-description">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis a quo, illum, vero, optio
                                    dolor doloribus dolores quaerat corporis cum voluptate sunt. Aut optio esse, earum sunt
                                    nulla sequi doloremque!</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="javascript:void(0);">Pinjam sekarang</a>
                                <a class="tg-btn" href="javascript:void(0);">Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item" data-vide-bg="poster: assets/images/slider/img-03.jpg"
            data-vide-options="position: 0% 50%">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
                        <div class="tg-slidercontent">
                            <figure class="tg-authorimg"><img src="assets/images/img-03.png" alt="image description">
                            </figure>
                            <h1>Jangan nilai buku dari sampulnya</h1>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit eiusmod lotanae pokalate sinote tempor incididunt ut labore
                                    popouye asoter. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque,
                                    deserunt.</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="javascript:void(0);">Pinjam sekarang</a>
                                <a class="tg-btn" href="javascript:void(0);">Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                            Home Slider End
                    *************************************-->
    <!--************************************
                            Main Start
                    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">


        <!--************************************
                                New Release Start
                        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-newrelease">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="tg-sectionhead">
                                <h2><span>Masih hangat</span>Buku rilisan terbaru</h2>
                            </div>
                            <div class="tg-description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat
                                    aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur
                                    cepteur sint occaecat cupidatat.</p>
                            </div>
                            <div class="tg-btns">
                                <a class="tg-btn tg-active" href="/allbook">Lihat semua</a>
                                <a class="tg-btn" href="#">Lebih lanjut</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="tg-newreleasebooks">
                                    @foreach ($allbook as $item)
                                        
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                                        <div class="tg-postbook">
                                            <figure class="tg-featureimg">
                                                <div class="tg-bookimg">
                                                    <div class="tg-frontcover"><img src="/{{$item->gambar}}"
                                                            alt="image description"></div>
                                                    <div class="tg-backcover"><img src="/{{$item->gambar}}"
                                                            alt="image description"></div>
                                                </div>
                                                <a class="tg-btnaddtowishlist" href="/detail/{{$item->id}}">
                                                    <i class="icon-heart"></i>
                                                    <span>Buku Baru</span>
                                                </a>
                                            </figure>
                                            <div class="tg-postbookcontent">
                                                <ul class="tg-bookscategories">
                                                    <li><a href="/detail/{{$item->id}}">{{$item->genre}}</a></li>
                                                    
                                                </ul>
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
        </section>
        <!--************************************
                                New Release End
                        *************************************-->

        <!--************************************
                                Picked By Author Start
                        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <h2><span>Sejumlah buku pilihan</span>Rekomendasi buku</h2>
                            <a class="tg-btn" href="/allbook">Lihat semua</a>
                        </div>
                    </div>
                    <div id="tg-pickedbyauthorslider" class="tg-pickedbyauthor tg-pickedbyauthorslider owl-carousel">
                        @foreach ($allbooks as $item)
                            
                        
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover"><img src="/{{$item->gambar}}"
                                                alt="image description"></div>
                                    </div>
                                    <div class="tg-hovercontent">
                                        <div class="tg-description">
                                            <p>{{$item->deskripsi}}</p>
                                        </div>
                                    </div>
                                </figure>
                                <div class="tg-postbookcontent">
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
        </section>
        <!--************************************
                                Picked By Author End
                        *************************************-->

        <!--************************************
                                Call to Action Start
                        *************************************-->
        <section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600"
            data-parallax="scroll" data-image-src="assets/images/parallax/bgparallax-06.jpg">
            <div class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-calltoaction">
                                <h2>Open Discount For All</h2>
                                <h3>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</h3>
                                <a class="tg-btn tg-active" href="javascript:void(0);">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                                Call to Action End
                        *************************************-->

    </main>
    <!--************************************
                            Main End
                    *************************************-->
@endsection
