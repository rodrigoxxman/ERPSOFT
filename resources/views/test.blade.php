@extends('layouts.app')

@section('content')

    @for ($i = 0; $i < 10000; $i++)
    <h1>Esto es solo para usuarios, primer aviso: {{ $i }}</h1>
    @endfor

@endsection
