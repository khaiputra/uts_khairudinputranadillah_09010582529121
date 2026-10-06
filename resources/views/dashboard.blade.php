@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<h3 class="mb-4">Dashboard</h3>

<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card text-bg-primary"><div class="card-body">
            <h6>Total Buku</h6><h2>{{ $totalBooks }}</h2>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-success"><div class="card-body">
            <h6>Total Kategori</h6><h2>{{ $totalCategories }}</h2>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-warning"><div class="card-body">
            <h6>Total Stok</h6><h2>{{ $totalStock }}</h2>
        </div></div>
    </div>
</div>

<div class="card">
    <div class="card-header">5 Buku Terbaru</div>
    <table class="table mb-0">
        <thead><tr><th>Judul</th><th>Penulis</th><th>Kategori</th></tr></thead>
        <tbody>
        @foreach ($latestBooks as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
