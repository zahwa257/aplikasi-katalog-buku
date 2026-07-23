@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')

<style>
body{
    background: linear-gradient(135deg,#0d6efd,#6ea8fe);
    min-height:100vh;
}

.login-card{
    border:none;
    border-radius:20px;
    box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.input-group-text{
    background:#0d6efd;
    color:white;
    border:none;
}

.form-control{
    height:48px;
}

.btn-login{
    height:48px;
    border-radius:10px;
    font-weight:600;
}

.logo{
    width:90px;
    height:90px;
    background:#e9f2ff;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:auto;
}

.logo i{
    font-size:42px;
    color:#0d6efd;
}
</style>

<div class="container">

    <div class="row justify-content-center align-items-center" style="min-height:100vh;">

        <div class="col-lg-5">

            <div class="card login-card">

                <div class="card-body p-5">

                    <div class="logo mb-3">
                        <i class="bi bi-book-half"></i>
                    </div>

                    <h3 class="text-center fw-bold">
                        Login Admin
                    </h3>

                    <p class="text-center text-muted mb-4">
                        Aplikasi Katalog Buku
                    </p>

                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Masukkan email"
                                    required
                                    autofocus>

                            </div>

                            @error('email')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan password"
                                    required>

                            </div>

                            @error('password')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="form-check mb-4">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="remember">

                            <label class="form-check-label" for="remember">
                                Ingat Saya
                            </label>

                        </div>

                        <button class="btn btn-primary btn-login w-100">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Login
                        </button>

                    </form>

                    <hr>

                    <p class="text-center text-muted mb-0">
                        © {{ date('Y') }} Aplikasi Katalog Buku
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection