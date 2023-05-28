@extends('layouts.master')

@section('content')
<main>
    <section class="breadcrumb-area pt-50 pb-50 pt-md-120 pb-md-120 pt-xs-100 pb-xs-100 bg-fix" data-overlay="black"
        data-opacity="7" data-background="assets/img/bg/breadcrumb-bg-4.jpg"
        style="background-image: url(&quot;assets/img/bg/breadcrumb-bg-4.jpg&quot;);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="breadcrumb-content">
                        <h3 class="title">Détail activité</h3>
                        <ul>
                            <li><a href="index.html">Acceuil</a></li>
                            <li class="active">Détail activité</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="class-content-area pt-130 pb-100">
		<div class="container">
                    @if(Session::has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">

                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                    @endif
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-8">
					<div class="class-details-content mb-md-50 mb-xs-50">
                        <div class="d-flex justify-content-between">

                            <h3 class="mt-4">{{ $competition->label }}</h3>
                            <form action="{{ route('competitions.participate', ['competition' => $competition]) }}" method="get">
                                <button class="btn btn-gra mt-2 ">Participer à cette compétition<i
                                        class="far fa-angle-double-right"></i>
                                </button>
                            </form>
                        </div>
                        <div class="blog-meta">
                            <span><i class="fas fa-calendar-alt"></i> {{ $competition->startDate }}</span>
                            <span><i class="fas fa-calendar-alt"></i> {{ $competition->endDate }}</span>
                        </div>
						<p>
							{{ $competition->description }}
						</p>
						
					</div>
				</div>
                <div class="col-4">
                    
                   
                </div>
			</div>
            
		</div>
	</div>
    {{-- TRAINER DETAILS --}}

</main>
@endsection
