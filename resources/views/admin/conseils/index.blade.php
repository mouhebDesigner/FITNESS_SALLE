@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des conseils</h1>
        <a href="{{ route('entraineur.conseils.create') }}">
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
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($conseils as $conseil)
                                    <tr>
                                        <td>{{ $conseil->id }}</td>
                                        <td>{{ $conseil->label }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <button type="submit" class="btn-delete delete-confirm" data-model="conseil" title="Supprimer un conseil" data-url="{{ route('entraineur.conseils.destroy', ['conseil' => $conseil]) }}" >
                                                    <i class="fa fa-trash" ></i>
                                                </button>
                                                <a href="{{ route('entraineur.conseils.edit', ['conseil' => $conseil]) }}" data-model="conseil" title="Modifier un conseil" class="edit-confirm btn-edit">
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
