@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Ajouter un conseil</h1>

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body mt-5">
                        <!-- Default Table -->
                        <form action="{{ route('entraineur.conseils.store') }}" class="row g-3" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="row mt-3">
                                <label for="prix" class="col-sm-2 col-form-label">Activité </label>
                                <div class="col-md-6 position-relative">
                                    <select class="form-select" name="activity_id" aria-label="Default select example">
                                        <option selected="" disabled>Sélectionner un activité</option>
                                        @foreach(App\Models\Activity::all() as $activity)
                                            <option value="{{ $activity->id }}" @if(old('activity_id') == $activity->id) selected @endif>{{ $activity->label }}</option>
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
                                <label for="inputText" class="col-sm-2 col-form-label">Titre de conseil </label>
                                
                                <div class="col-md-6 position-relative">
                                    <input type="text"  class="form-control @error('label') input-invalid @enderror" value="{{ old('label') }}" name="label" placeholder="Saisir titre de conseil" id="validationTooltip03">
                                    @error('label')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="description" class="col-sm-2 col-form-label">Description </label>
                                
                                <div class="col-md-6 position-relative">
                                    <textarea rows="6" class="form-control @error('description') input-invalid @enderror" value="{{ old('description') }}" name="description" placeholder="Saisir détail de conseil" id="description"></textarea>
                                    @error('description')
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
