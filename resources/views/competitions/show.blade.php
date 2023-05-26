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
                                <li class="active">Détail de Compétition {{ $competition->label }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

    </main>
@endsection