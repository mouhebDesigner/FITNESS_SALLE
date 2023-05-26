@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des compétitions</h1>
        <a href="{{ route('admin.competitions.create') }}">
            <button class="btn-delete">
                <i class="fa fa-plus"></i>
            </button>
        </a>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Activité</th>
                                    <th scope="col">Date début</th>
                                    <th scope="col">Date fin</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($competitions as $competition)
                                    <tr>
                                        <td>{{ $competition->id }}</td>
                                        <td>{{ $competition->label }}</td>
                                        <td>{{ $competition->activity->label }}</td>
                                        <td>{{ $competition->startDate }}</td>
                                        <td>{{ $competition->endDate }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="compétition" title="Supprimer un compétition" data-url="{{ route('admin.competitions.destroy', ['competition' => $competition]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('admin.competitions.edit', ['competition' => $competition]) }}" data-model="compétition" title="Modifier un compétition" class="edit-confirm btn-edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
