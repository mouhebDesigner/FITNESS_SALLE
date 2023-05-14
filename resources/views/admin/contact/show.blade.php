@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des contacts</h1>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">


            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#detail-message"
                                    aria-selected="false" role="tab" tabindex="-1">Détail de message</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#info-expediteur"
                                    aria-selected="true" role="tab">Information sur l'expéditeur</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade profile-overview" id="info-expediteur" role="tabpanel">

                                <h5 class="card-title">Détail de profile</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom et Prénom</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->nom }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">E-mail</div>
                                    <div class="col-lg-9 col-md-8">
                                        <a href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Numéro de téléphone</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->numtel }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3 active show" id="detail-message"
                                role="tabpanel">

                       
                                        <h5 class="card-title">{{ $contact->sujet }}</h5>
                                        <p>

                                            {{ $contact->message }}
                                        </p>
                                    

                            </div>





                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection
