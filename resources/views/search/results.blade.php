@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Search Results</h2>
    <h4>Services</h4>
    @foreach ($services as $service)
    <p>{{ $service->service_name }} - {{ $service->description }}</p>
    @endforeach

    <h4>Categories</h4>
    @foreach ($categories as $category)
    <p>{{ $category->Name }}</p>
    @endforeach

    <h4>Types</h4>
    @foreach ($types as $type)
    <p>{{ $type->name }}</p>
    @endforeach

    <h4>Type Categories</h4>
    @foreach ($typeCats as $typeCat)
    <p>{{ $typeCat->name }}</p>
    @endforeach
</div>
@endsection
