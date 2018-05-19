@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listing/create" class="btn btn-success btn-xs">Add Listing</a></span></div>

                <div class="panel-body">
                    <h1>Your Listings</h1>
                    @if(count($listings)>0)
                         <table class="table table-striped">
                             <tr>
                                 <th>Company Name</th>
                                 <th></th>
                                 <th></th>
                             </tr>
                             @foreach($listings as $list)
                             <tr>
                                 <td>{{$list->name}}</td>
                                 <td><a class="btn btn-default" href="/listing/{{$list->id}}/edit">Edit</a></td>
                                 <td>
                                    {!!Form::open(['action' =>['ListingController@destroy',$list->id], 'method'=>'POST' ,'class'=>'pull-left','onsubmit'=>'return confirm("Are You Sure?")'])!!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                 </td>
                             </tr>
                             @endforeach
                         </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
