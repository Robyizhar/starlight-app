@extends('front.layout.main')
@push('style')

@endpush
@section('content')
<section class="section-padding">
    <div class="container">
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
                                        <a href="{{ asset('storage/book_catalogues/' . $book->image) }}" class="tt-lightbox" title="{{ $book->title }}"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">{{ $book->title }}</a></h2>
                                @php
                                    $categoriesArray = $categories->toArray();
                                    $category = array_filter($categoriesArray, function ($category) use ($book) {
                                        return $category['id'] === $book->category_id;
                                    });
                                    $name = !empty($category) ? array_values($category)[0]['name'] : 'Not found';
                                @endphp
                                <p><a href="#">{{ $name }}</a> </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@push('script')
<script>

</script>
@endpush
