@extends('layouts.admin')
@section('title', $project->title)

@section('content')
<section>
    <h1>{{$project->title}}</h1>

    <p>{{$project->content}}</p>
    <img src="{{$project->image}}" alt="{{$project->title}}">

    @if($project->type)
    <p>Type: {{$project->type->name}}</p>
    @endif

    @if($project->technologies)
            @foreach ($project->technologies as $technology)
            <span class="badge text-bg-danger">{{$technology->name}}</span>
            @endforeach
    @endif
</section>
@endsection