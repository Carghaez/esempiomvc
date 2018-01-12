@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body">
                    @foreach($projects as $project)
                        <p>
                            <a href="{{url('/projects/'.$project->slug)}}">{{$project->name}}</a>
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
