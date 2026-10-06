<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    :root { --bs-link-color: #212529; --bs-link-hover-color: #000; }
    body { background-color: #fff !important; color: #212529; }

    /* Navbar putih polos */
    .navbar.bg-primary { background-color: #fff !important; border-bottom: 1px solid #dee2e6; }
    .navbar-dark .navbar-brand,
    .navbar-dark .nav-link,
    .navbar-dark .navbar-text { color: #212529 !important; }
    .navbar-dark .nav-link:hover { text-decoration: underline; }
    .navbar .btn-outline-light { color: #212529; border-color: #adb5bd; }
    .navbar .btn-outline-light:hover { background: #f1f3f5; color: #212529; }

    /* Tombol utama: hitam. Tombol lain: putih berbingkai abu */
    .btn-primary {
        --bs-btn-color: #fff; --bs-btn-bg: #212529; --bs-btn-border-color: #212529;
        --bs-btn-hover-color: #fff; --bs-btn-hover-bg: #000; --bs-btn-hover-border-color: #000;
        --bs-btn-active-color: #fff; --bs-btn-active-bg: #000; --bs-btn-active-border-color: #000;
    }
    .btn-info, .btn-warning, .btn-danger, .btn-secondary {
        --bs-btn-color: #212529; --bs-btn-bg: #fff; --bs-btn-border-color: #adb5bd;
        --bs-btn-hover-color: #212529; --bs-btn-hover-bg: #f1f3f5; --bs-btn-hover-border-color: #868e96;
        --bs-btn-active-color: #212529; --bs-btn-active-bg: #e9ecef; --bs-btn-active-border-color: #868e96;
    }

    /* Kartu dashboard polos */
    .text-bg-primary, .text-bg-success, .text-bg-warning {
        background-color: #fff !important; color: #212529 !important; border: 1px solid #dee2e6;
    }

    /* Badge, alert, pagination, form */
    .badge.bg-info { background-color: #e9ecef !important; color: #212529 !important; font-weight: normal; }
    .alert-success { background-color: #f8f9fa; border-color: #dee2e6; color: #212529; }
    .page-link { color: #212529; }
    .page-item.active .page-link { background-color: #212529; border-color: #212529; color: #fff; }
    .form-control:focus, .form-select:focus { border-color: #6c757d; box-shadow: 0 0 0 .2rem rgba(33,37,41,.1); }
    .form-check-input:checked { background-color: #212529; border-color: #212529; }
</style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">📚 Perpustakaan</a>
        <div class="navbar-nav me-auto">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('books.index') }}">Daftar Buku</a>
        </div>
        <span class="navbar-text me-3">{{ auth()->user()->name }}</span>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-outline-light btn-sm">Logout</button>
        </form>
    </div>
</nav>

<div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
