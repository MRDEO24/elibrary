@extends('base')
@section('content')
    <!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					News Grid Start
			*************************************-->
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						
							<div class="">
								<div id="tg-content" class="tg-content">
									<div class="tg-newsgrid">
										<div class="tg-sectionhead">
											<h2><span>Semua Buku</span></h2>
										</div>
										
                                            @foreach ($allbook as $item)
                                                
                                            
											<div class="col-xs-6 col-sm-12 col-md-6 col-lg-3">
												<article class="tg-post">
													<figure><a href="/detail/{{$item->id}}"><img src="/{{$item->gambar}}" alt="image description"></a></figure>
													<div class="tg-postcontent">
														
														<div class="tg-themetagbox"><span class="tg-themetag">{{$item->genre}}</span></div>
														<div class="tg-posttitle">
															<h3><a href="/detail/{{$item->id}}">{{ Str::limit($item->judul, 25) }}
                                                            </p></a></h3>
														</div>
														
													</div>
												</article>
											</div>
                                            @endforeach

										
									</div>
								</div>
							</div>
							
						
					</div>
				</div>
			</div>
			<!--************************************
					News Grid End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection