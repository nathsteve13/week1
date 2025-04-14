@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Total Foods by Category</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>{{ $category['name'] }}</td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#imageModal-{{ $category['id'] }}">
                                Image
                            </button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach ($categories as $category)
        <!-- Modal {{ $category['id'] }} -->
        <div class="modal fade" id="imageModal-{{ $category['id'] }}" tabindex="-1" aria-labelledby="imageModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="imageModalLabel">Gambar untuk Kategori {{ $category['name'] }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $category['id'] }} - {{ $category['name'] }}
                        <br>
                        <img src="{{ asset('storage/category/' . $category['image']) }}" alt="{{ $category['name'] }}"
                            class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
