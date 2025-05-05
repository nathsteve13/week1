@extends('layouts.app')

@section('content')
    <div class="container">
        
        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1>Total Foods by Category</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Add Category</a>
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
                            </button>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal"
                                onclick="showDetail({{ $category['id'] }})">
                                Details
                            </button>

                        </td>
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

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="DetailModalLabel">List of </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="detail-title"></div>
                    <div id="detail-body"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showDetail(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('category.showListFoods') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'idcat': id,
                },
                success: function(data) {
                    $('#DetailModalLabel').text(data.title || 'Details');
                    $('#detail-title').html(data.title || 'No Title Available');
                    $('#detail-body').html(data.body || 'No Details Available');

                    $('#detailModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching details:', error);
                    alert('Failed to fetch details. Please try again.');
                }
            });
        }
    </script>
@endsection
