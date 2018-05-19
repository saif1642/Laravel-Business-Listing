@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading"><h2>{{$listing->name}}</h2></div>

                <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">Address: {{$listing->address}}</li>
                            <li class="list-group-item">email: {{$listing->email}}</li>
                            <li class="list-group-item">Website: <a href="{{$listing->website}}">{{$listing->website}}</a></li>
                            <li class="list-group-item">Phone: {{$listing->phone}}</li>
                            
                        </ul>
                        <div class="well">
                            {{$listing->bio}}
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection