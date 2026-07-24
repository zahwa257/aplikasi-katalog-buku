@extends('layouts.catalog')

@section('title', 'Katalog Buku')

@section('content')

@include('partials.navbar')

@include('partials.hero')

@include('partials.search')

@include('partials.books')

@include('partials.footer')

@endsection

@section('scripts')

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: '{{ session("success") }}',
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
            text: 'Data tidak dapat dikembalikan.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#C89A35',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
        }).then((result)=>{
            if(result.isConfirmed){
                form.submit();
            }
        });
    });
});
</script>

@endsection