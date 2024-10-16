@extends('front.layout.main')
@push('style')

@endpush
@section('content')
<section class="section-padding">
    <div class="container">
        <div class="text-center mb-50">
            <h2 class="section-title text-uppercase">Katalog Buku</h2>
        </div>
        <div class="portfolio-container text-center">
            <ul class="portfolio-filter brand-filter">
                <li class="active waves-effect waves-light" data-group="all">All</li>
                @foreach ($categories as $category)
                    @php
                        $searchCategoryId = $category->id;
                        $bookArray = $books->items();
                        $exists = array_filter($bookArray, function($book) use ($searchCategoryId) {
                            return $book['category_id'] === $searchCategoryId;
                        });
                    @endphp
                    @if ($exists)
                        <li class="waves-effect waves-light" data-group="{{ $category->id }}">{{ $category->name }}</li>
                    @endif
                @endforeach
            </ul>

            <div class="portfolio portfolio-with-title col-3 gutter mt-50">
                @foreach ($books as $book)
                    <div class="portfolio-item" data-groups='["all", "{{ $book->category_id }}"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('storage/book_catalogues/' . $book->image) }}" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ url('/book-catalog/' . $book->slug) }}" title="{{ $book->image }}"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="{{ url('/book-catalog/' . $book->slug) }}">{{ $book->title }}</a></h2>
                                @php
                                    $categoriesArray = $categories->toArray();
                                    $category = array_filter($categoriesArray, function ($category) use ($book) {
                                        return $category['id'] === $book->category_id;
                                    });
                                    $name = !empty($category) ? array_values($category)[0]['name'] : 'Not found';
                                @endphp
                                <p><a href="{{ url('/book-catalog/' . $book->slug) }}">{{ $name }}</a> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="icon-tab">
                    <div class="text-center">
                        <ul class="nav nav-pills" role="tablist">
                        <li role="presentation"><a href="#icontab-1" class="waves-effect waves-light"  role="tab" data-toggle="tab"> <i class="material-icons">&#xE7FD;</i></a></li>
                        <li role="presentation" class="active"><a href="#icontab-2" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE3B7;</i></a></li>
                        <li role="presentation"><a href="#icontab-3" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE53B;</i></a></li>
                        <li role="presentation"><a href="#icontab-4" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE859;</i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body mt-40">
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="icontab-1">
                            <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-bold mb-40">About us</h2>
                                <p>
                                    Starlight Publisher adalah penerbit buku yang berdedikasi untuk membawa cerita dan ide-ide berkualitas ke hadapan pembaca di seluruh dunia. Kami percaya bahwa setiap penulis memiliki suara yang unik dan layak didengar. Dengan berkomitmen untuk menerbitkan berbagai genre, kami berusaha menciptakan platform yang mendukung penulis berbakat, baik yang baru memulai maupun yang sudah berpengalaman.
                                </p>
                            </div>

                            <div class="col-md-6">
                                <img src="front/assets/img/workstation.jpg" alt="image" class="img-responsive">
                            </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in active" id="icontab-2">
                            <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-bold mb-40">Our Mission</h2>
                                <p>Misi kami di Starlight Publisher adalah untuk memfasilitasi penulis dalam menyampaikan cerita mereka kepada dunia, sekaligus memberikan pengalaman membaca yang menginspirasi dan mendidik. Kami berusaha untuk menciptakan karya-karya yang tidak hanya menghibur, tetapi juga memicu pemikiran dan menambah wawasan bagi pembaca.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="front/assets/img/mission.jpg" alt="image" class="img-responsive">
                            </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="icontab-3">
                            <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-bold mb-40">What We Do</h2>
                                <p>Di Starlight Publisher, kami menawarkan layanan penerbitan lengkap, mulai dari pengeditan naskah, desain sampul, hingga distribusi. Kami berkolaborasi dengan penulis dalam setiap tahap proses penerbitan, memastikan bahwa visi mereka terwujud dengan sempurna. Selain itu, kami juga aktif dalam pemasaran buku untuk membantu penulis menjangkau audiens yang lebih luas.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="front/assets/img/idea.jpg" alt="" class="img-responsive">
                            </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="icontab-4">
                            <div class="row">
                            <div class="col-md-6">
                                <h2 class="text-bold mb-40">Our Setps</h2>
                                <p>Proses penerbitan di Starlight Publisher dimulai dengan konsultasi awal untuk memahami kebutuhan penulis. Selanjutnya, kami melakukan pengeditan naskah, desain sampul, dan layout. Setelah itu, buku siap dicetak dan didistribusikan ke berbagai platform. Kami juga menyediakan dukungan pemasaran untuk memastikan buku mendapatkan perhatian yang layak.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="front/assets/img/workstation2.jpg" alt="image" class="img-responsive">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-padding latest-news-card gray-bg">
    <div class="container">
        <div class="text-center mb-80">
            <h2 class="section-title text-uppercase">Blog</h2>
        </div>
        <div class="blog-carousel">
            <article class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="front/assets/img/blog/1.jpg" alt="image">
                </div>
                <div class="card-content">
                <h2 class="entry-title activator">The Future of Web Design is Hidden in the History of Architecture..</h2>
                </div>
                <div class="card-reveal overlay-blue">
                <span class="card-title close-button"><i class="fa fa-times"></i></span>
                <a class="posted-on" href="#">Branding</a>
                <h2 class="entry-title"><a href="#">The Future of Web Design</a></h2>
                <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </article>
            <article class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="front/assets/img/blog/2.jpg" alt="image">
                </div>
                <div class="card-content">
                <h2 class="entry-title activator">7 Things Every Designer Needs to Know about Accessibility..</h2>
                </div>
                <div class="card-reveal overlay-blue">
                <span class="card-title close-button"><i class="fa fa-times"></i></span>
                <a class="posted-on" href="#">Branding</a>
                <h2 class="entry-title"><a href="#">7 Things Every Designer Needs</a></h2>
                <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </article>
            <article class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="front/assets/img/blog/3.jpg" alt="image">
                </div>
                <div class="card-content">
                <h2 class="entry-title activator">16 Web & Graphic Design Trends To Watch In 2016...</h2>
                </div>
                <div class="card-reveal overlay-blue">
                <span class="card-title close-button"><i class="fa fa-times"></i></span>
                <a class="posted-on" href="#">Branding</a>
                <h2 class="entry-title"><a href="#">16 Web & Graphic Design Trends</a></h2>
                <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </article>
            <article class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="front/assets/img/blog/4.jpg" alt="image">
                </div>
                <div class="card-content">
                <h2 class="entry-title activator">The rise of the “Full Stack” Designer and the tools they use..</h2>
                </div>
                <div class="card-reveal overlay-blue">
                <span class="card-title close-button"><i class="fa fa-times"></i></span>
                <a class="posted-on" href="#">Branding</a>
                <h2 class="entry-title"><a href="#">The rise of the Designer</a></h2>
                <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>

</script>
@endpush
