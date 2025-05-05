@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- Error Message --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('foods.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Food Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter food name" required>
            </div>
            <div class="form-group">
                <label for="nutrition_fact">Nutrition Fact</label>
                <input type="text" class="form-control" id="nutrition_fact" name="nutrition_fact" placeholder="Enter nutrition fact" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select class="form-control" id="category_id" name="category_id" required>
                    <option value="" disabled selected>Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
