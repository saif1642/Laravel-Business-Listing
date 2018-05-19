@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Latest Business List</h1></div>

                <div class="panel-body">
                    @if(count($listings)>0)
                            <ul class="list-group">
                             @foreach($listings as $list)
                            <li class="list-group-item"><a href="/listing/{{$list->id}}">{{$list->name}}</a></li>
                             @endforeach
                            </ul>       
                    @else
                     <p>No List Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
