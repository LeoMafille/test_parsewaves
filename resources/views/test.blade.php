@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <x-test-component :product="$product"/>    
    @endforeach
    {{ sizeof($products) }}
@endsection