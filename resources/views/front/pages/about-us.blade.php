@extends('front.layout.main')
@push('style')

@endpush
@section('content')
<section class="padding-top-90 padding-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="border-bottom-tab">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab-1"  role="tab" class="waves-effect waves-dark" data-toggle="tab">About us</a></li>
                    <li role="presentation"><a href="#tab-2" role="tab" class="waves-effect waves-dark" data-toggle="tab">What We Do</a></li>
                    <li role="presentation"><a href="#tab-3" role="tab" class="waves-effect waves-dark" data-toggle="tab">Our Mission</a></li>
                    <li role="presentation"><a href="#tab-4" role="tab" class="waves-effect waves-dark" data-toggle="tab">Setps</a></li>
                </ul>

                <div class="panel-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
                            <img class="alignleft" src="{{ asset('front/assets/img/working_man.png') }}" alt="">
                            <p>
                                Starlight Publisher adalah penerbit buku yang berdedikasi untuk membawa cerita dan ide-ide berkualitas ke hadapan pembaca di seluruh dunia. Kami percaya bahwa setiap penulis memiliki suara yang unik dan layak didengar. Dengan berkomitmen untuk menerbitkan berbagai genre, kami berusaha menciptakan platform yang mendukung penulis berbakat, baik yang baru memulai maupun yang sudah berpengalaman.
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-2">
                            <img class="alignleft" src="{{ asset('front/assets/img/busy_man.png') }}" alt="">
                            <p>Di Starlight Publisher, kami menawarkan layanan penerbitan lengkap, mulai dari pengeditan naskah, desain sampul, hingga distribusi. Kami berkolaborasi dengan penulis dalam setiap tahap proses penerbitan, memastikan bahwa visi mereka terwujud dengan sempurna. Selain itu, kami juga aktif dalam pemasaran buku untuk membantu penulis menjangkau audiens yang lebih luas.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-3">
                            <img class="alignleft" src="{{ asset('front/assets/img/mission.png') }}" alt="">
                            <p>Misi kami di Starlight Publisher adalah untuk memfasilitasi penulis dalam menyampaikan cerita mereka kepada dunia, sekaligus memberikan pengalaman membaca yang menginspirasi dan mendidik. Kami berusaha untuk menciptakan karya-karya yang tidak hanya menghibur, tetapi juga memicu pemikiran dan menambah wawasan bagi pembaca.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-4">
                            <img class="alignleft" src="{{ asset('front/assets/img/business.png') }}" alt="">
                            <p>Proses penerbitan di Starlight Publisher dimulai dengan konsultasi awal untuk memahami kebutuhan penulis. Selanjutnya, kami melakukan pengeditan naskah, desain sampul, dan layout. Setelah itu, buku siap dicetak dan didistribusikan ke berbagai platform. Kami juga menyediakan dukungan pemasaran untuk memastikan buku mendapatkan perhatian yang layak.</p>
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
