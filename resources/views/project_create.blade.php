@extends('layout')

@section('meta')

@endsection

@section('links')

@endsection

@section('title')
@endsection


@section('header')

@endsection


@section('body')
<form action="{{route('projects.store')}}" method="POST">
    @csrf
    name
    <input type="text" name="name" required>
    <select name="section">
        <option value="programming">
            programming
        </option>
        <option value="ai">
            ai
        </option>
        <option value="iss">
            iss
        </option>
        <option value="network">
            network
        </option>
    </select>
    <input type="submit" name="submit">
</form>
@endsection

@section('footer')

@endsection

@section('errors')
    @if(session('massage'))
        <div class="alert alert-primary alert-dismissible fade show mb-0" role="alert">
            <strong>{{session('massage')}}</strong>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection

@section('scripts')

@endsection
