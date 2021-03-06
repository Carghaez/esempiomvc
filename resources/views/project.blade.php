@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$project->name}}</div>

                <div class="panel-body">
                    @foreach($project->getBoards() as $board)
                        <p>
                            {{$board->name}}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
