<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Perpustakaan</title>
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
<body class="bg-light d-flex align-items-center" style="min-height:100vh">
<div class="container" style="max-width:420px">
    <div class="card shadow-sm">
        <div class="card-body p-4">
            <h4 class="text-center mb-4">📚 Login Perpustakaan</h4>

            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="form-control @error('email') is-invalid @enderror" autofocus>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password"
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <button class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
