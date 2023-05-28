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
			<div class="row justify-content-center">
				<div class="col-xl-8 col-lg-8">
					<div class="class-details-content mb-md-50 mb-xs-50">
						<img src="{{ asset('storage/'.$activity->image) }}" style="width: 100%; height: 400px"  alt="">
						<h3 class="mt-4">{{ $activity->label }}</h3>
						<p>
							{{ $activity->description }}
						</p>
						
					</div>
				</div>
                <div class="col-4">
                    
                    @if(count($trainers))
                    <h3>Nos Entraineurs</h3>
                        @foreach($trainers as $trainer)
                            <div class="team-wrap-4 mb-30">
                                <div class="team-img">
                                    <img src="{{ asset('storage/'.$trainer->photo) }}" alt="img">
                                </div>
                                <div class="team-content">
                                    <h3><a href="trainer-details.html">
                                    {{ $trainer->nom }} {{ $trainer->prenom }}    
                                    </a></h3>
                                    <span>{{ $trainer->specialite }}</span>
                                    <div class="team-social-link">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
			</div>
            
		</div>
	</div>
    {{-- TRAINER DETAILS --}}
    @if($trainers->count() >= 1)
    <div class="team-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="section-title-2 bar-theme-color mb-25">
                        <h3>
                            Nous avons un membre de l'équipe d'experts qui rencontre notre formateur
                        </h3>
                        <span>Team</span>
                    </div>
                    <div class="row">
                        @foreach($trainers as $trainer)
                        <div class="col-md-4">
                            <div class="team-wrap mb-30">
                                <div class="team-img">
                                    <img src="{{ asset('storage/'.$trainer->photo) }}" alt="Team">
                                    <div class="team-social-link">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fab fa-google"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3><a href="trainer-details.html">
                                            {{ $trainer->nom }}
                                            {{ $trainer->prenom }}
                                        </a></h3>
                                    <span>
                                        {{ $trainer->specialite }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="gray-bg"></div>
    </div>
    @endif
    @include('includes.schedule')

</main>
@endsection
