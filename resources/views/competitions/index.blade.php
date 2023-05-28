@extends('layouts.master')

@section('content')
    <main>
        <section class="breadcrumb-area pt-50 pb-50 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
            data-opacity="7" data-background="{{ asset('frontOffice/assets/img/bg/breadcrumb-bg-4.jpg') }}"
            style="background-image: url(&quot;{{ asset('assets/frontOffice/img/bg/breadcrumb-bg-4.jpg')}}&quot;);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="breadcrumb-content">
                            <h3 class="title">Compétitions</h3>
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li class="active">Compétitions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="blog-area-2 pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title-2 bar-theme-color text-center mb-35">
                            <h3>
                                Les compétitions interne de notre salle
                            </h3>
                            <span>News</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach(App\Models\Competition::all() as $competition)
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-wrap-2 mb-30">
                            
                            
                            <div class="blog-content">
                                <h3>
                                    <a href="blog-details.html">
                                        {{ $competition->label }}
                                    </a>
                                </h3>
                            </div>
                            <div class="blog-content">
                               
                                <div class="blog-meta">
                                    <span><i class="fas fa-calendar-alt"></i> {{ $competition->startDate }}</span>
                                    <span><i class="fas fa-calendar-alt"></i> {{ $competition->endDate }}</span>
                                </div>

                                <a href="{{ route('competitions.show', ['competition' => $competition]) }}" class="read-more">
                                    Voir détail <i class="fas fa-angle-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>

    </main>
@endsection