@extends('layout')

@section('content')

<div style="width: fit-content">
    <div class="card">
    <div class="card-header">
        <div class="card-title h5">{{ $city->name }}</div>
        <div class="card-subtitle text-gray">{{ $city->state }}</div>
    </div>
    <div class="card-body">
        <span>Population: {{ $city->population_2010 }}</span>
        <br/>
        <span>Population Rank: {{ $city->population_rank }}</span>
    </div>
    </div>
</div>

<a href="{{ route('cities.index') }}">Go Back</a>

@endsection