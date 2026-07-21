@extends('layouts.catalog')

@section('title', 'Katalog Buku')

@section('content')

@include('partials.navbar')

@include('partials.genres')

@include('partials.hero')

@include('partials.books')

@endsection

@section('scripts')

@if(session('success'))

<script>
document.addEventListener('DOMContentLoaded', function () {

    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session('success') }}',
        timer: 1800,
        showConfirmButton: false
    });

});
</script>

@endif

<script>

document.querySelectorAll('.delete-form').forEach(form => {

    form.addEventListener('submit', function(e){

        e.preventDefault();

        Swal.fire({

            title: 'Hapus Buku?',

            text: 'Data yang dihapus tidak dapat dikembalikan.',

            icon: 'warning',

            showCancelButton: true,

            confirmButtonColor: '#F44336',

            cancelButtonColor: '#6c757d',

            confirmButtonText: 'Ya, Hapus',

            cancelButtonText: 'Batal',

            reverseButtons: true

        }).then((result) => {

            if(result.isConfirmed){

                form.submit();

            }

        });

    });

});

</script>

@endsection