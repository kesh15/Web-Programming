@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Selamat Datang!</h1>
    <p class="lead">Silahkan nikmati semua fitur yang ada.</p>
    @endauth

    @guest
    <h1>Halaman Tamu</h1>
    <p class="lead">Silahkan login untuk menikmati semua fitur!.</p>
    @endguest

</div>
@endsection