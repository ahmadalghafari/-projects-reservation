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
    <form action="{{route('projects.update' ,$project)}}" method="POST">
        @csrf
        @method('PUT')
        name
        <input type="text" name="name" required value="{{$project->name}}">
        <select name="section" >
            <option value="programming"  @if($project->section == 'programming') selected @endif>
                programming
            </option>
            <option value="ai" @if($project->section == 'ai') selected @endif>
                ai
            </option>
            <option value="iss" @if($project->section == 'iss') selected @endif>
                iss
            </option>
            <option value="network" @if($project->section == 'network') selected @endif>
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
