@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter un compétition</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card ">
                    <div class="card-body mt-5">
                        <!-- Default Table -->
                        <form action="{{ route('admin.competitions.store') }}" class="row g-3" method="post">
                            @csrf
                            <div class="row mt-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Nom de compétition </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text" class="form-control @error('label') input-invalid @enderror" value="{{ old('label') }}" name="label" placeholder="Saisir nom de compétition" id="validationTooltip03">
                                    @error('label')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Activités </label>
                                
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="activity_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un activité</option>
                                        @foreach(App\Models\Activity::all() as $activity)
                                            <option value="{{ $activity->id }}">{{ $activity->label }}</option>
                                        @endforeach
                                    </select>
                                    @error('activity_id')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="startDate" class="col-sm-2 col-form-label">Date début </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="date" class="form-control @error('startDate') input-invalid @enderror" value="{{ old('startDate') }}" name="startDate" id="startDate">
                                    @error('startDate')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="endDate" class="col-sm-2 col-form-label">Date fin </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="date" class="form-control @error('endDate') input-invalid @enderror" value="{{ old('endDate') }}" name="endDate" id="endDate">
                                    @error('endDate')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-5 mt-5">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">ajouter</button>
                                    <button type="reset" class="btn btn-light">annuler</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
