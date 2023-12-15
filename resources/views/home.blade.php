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
   <table class="table">
       <tr>
           <th>id</th>
           <th>owner</th>
           <th>project name</th>
           <th>section</th>
           <th>reserved</th>
           <th>Created By</th>
           @if(Auth::user()->role == 'teacher')
               <th>edit</th>
               <th>delete</th>
           @else
               <th>
                   reserv
               </th>
           @endif
       </tr>
       @foreach($projects as $project)
           <tr>
               <td>{{$project->id}}</td>
               <td>{{$project->maker->name}}</td>
               <td>{{$project->name}}</td>
               <td>{{$project->section}}</td>
               <td>@if($project->owner != null) {{$project->owner->name}}@endif</td>
               <td>{{$project->maker->name}}</td>
               @if(Auth::user()->role == 'teacher')
                   <td>
                       <form method="get" action="{{route('projects.edit' , $project)}}">
                           <button  type="submit">edit</button>
                       </form>
                   </td>
                   <td><form method="POST" action="{{route('projects.destroy' ,$project)}}">
                           @csrf
                           @method('DELETE')
                           <input type="submit" value="delete">
                       </form>
                   </td>
               @else
                   <td>
                       <form method="POST" action="{{route('projects.reserv' ,$project)}}">
                           @csrf
                           @method('PUT')
                           <input type="submit" value="resrve"></form>
                   </td>
               @endif
           </tr>
       @endforeach
   </table>
@endsection

@section('footer')

@endsection

@section('errors')

@endsection

@section('scripts')

@endsection
