@extends('layout')

@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{ route('cities.create')}}"> Add </a>
</div>

{{ $cities->links() }}

<table class="table table-striped table-hover">
    <tbody>
    <th>Rank</th>
    <th>City</th>
    <th>State</th>
    <th>Population</th>
    <th></th>
    <th></th>
        @foreach ($cities as $city)
            <tr class="active"> 
            <td>{{ $city->population_rank }}</td>
            <td>{{ $city->name }} </td>
            <td>WA</td>
            <td>{{ $city->population_2010 }}</td>
            <td><a href="{{ route('cities.show', $city->id) }}">View</a></td>
            <td><a href="{{ route('cities.edit', $city->id) }}">Edit</a></td>
            <td>
                <form action="{{ route('cities.destroy', $city->id) }}" method="POST" onSubmit="return confirm('Are you sure you want to delete?);">
                    @csrf
                    @method('DELETE')
                    <button class="btn button-error" type="submit">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $cities->links() }}

@endsection