@extends('front.layout.main')
@push('style')

@endpush
@section('content')
<section class="blog-section section-padding mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="posts-content single-post">
                    <article class="post-wrapper">
                        <header class="entry-header-wrapper clearfix">
                            <div class="entry-header mb-0">
                                <h2 class="entry-title">{{ str_replace('-', ' ', $book->title); }}</h2>
                            </div>
                        </header>

                        <div class="thumb-wrapper">
                            <img src="{{ asset('storage/book_catalogues/' . $book->image) }}" class="img-responsive" alt="" >
                        </div>

                        <div class="entry-content">
                            <div class="row mt-50">
                                <div class="col-md-8 col-md-offset-2">
                                    <h3>Bordered Table</h3>
                                    <div class="mt-30"></div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Penulis</th>
                                                <td>{{ $book->writer }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tebal Buku</th>
                                                <td>{{ $book->thick }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Panjang</th>
                                                <td>{{ $book->length }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lebar</th>
                                                <td>{{ $book->width }}</td>
                                            </tr>
                                            {{-- <tr>
                                                <th scope="row">Peluncuran</th>
                                                <td>{{ date('d/m/Y', strtotime($book->launch_at)) }}</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p>
                                {{ $book->glimpse }}
                            </p>
                        </div>

                        <footer class="entry-footer">
                            <div class="post-tags">
                                <span class="tags-links">
                                    <i class="fa fa-tags"></i>
                                    <a href="#">{{ $book->bookCategory->name }}</a>
                                </span>
                            </div>

                            <ul class="list-inline right share-post">
                                <li><a href="#"><i class="fa fa-facebook"></i> <span>Share</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> <span>Tweet</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> <span>Plus</span></a>
                                </li>
                            </ul>
                        </footer>
                    </article>
                </div>
            </div>

            <div class="col-md-4">
                <div class="tt-sidebar-wrapper" role="complementary">
                    <div class="widget widget_tt_author_widget">
                        <div class="author-info-wrapper">
                            <div class="author-cover">
                                <img src="{{ asset('front/assets/img/blog/author-large-thumb.jpg') }}"  alt="">
                            </div>
                            <div class="author-avatar">
                                <img src="{{ asset('front/assets/img/blog/author-2.jpg') }}"  alt="">
                                <h2>Mellyana Dhian</h2>
                                <span>Penulis</span>
                            </div>
                            <p>All these men were men of conviction. They deeply believed in what they were doing and put their reputations.</p>
                            <div class="author-social-links">
                                <ul class="list-inline">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div  class="widget widget_tt_popular_post">
                        <div class="tt-popular-post border-bottom-tab">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Latest</a>
                                </li>
                                <li class="">
                                    <a href="#tt-popular-post-tab2" data-toggle="tab" aria-expanded="false">Popular</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tt-popular-post-tab1" class="tab-pane fade active in">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-3.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">At the end of the day, or at the start of the day?</a></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-4.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">What never to tweet about</a></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-5.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">Men have become the tools of their tools.</a></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-1.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">Master the psychology of web design</a></h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-2.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">CTC to showcase technology solutions at Sea A......</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div id="tt-popular-post-tab2" class="tab-pane fade">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-1.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">Master the psychology of web design</a></h4>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-2.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">CTC to showcase technology solutions at Sea A......</a></h4>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-3.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">At the end of the day, or at the start of the day?</a></h4>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-4.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">What never to tweet about</a></h4>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a class="media-left" href="#">
                                        <img src="{{ asset('front/assets/img/blog/recent-thumb-5.jpg') }}" alt="">
                                        </a>

                                        <div class="media-body">
                                        <h4><a href="#">Men have become the tools of their tools.</a></h4>
                                        </div>
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
@endsection
@push('script')
<script>

</script>
@endpush
