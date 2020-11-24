@extends('layout')

@section('content')

<div class="column col-3"> 
    <h2> Add a City</h2>

    @if ($errors->any())
        <div class="toast toast-error">
            @foreach ($errors->all() as $error)
            <span>{{ $error }}</span><br/>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('cities.store') }}">
        @csrf
        <div class="form-group">
            @include('cities.form')
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add City</button>
            <a href="{{ route('cities.index') }}">Cancel</a>
        </div>
    </form>

</div>

@endsection