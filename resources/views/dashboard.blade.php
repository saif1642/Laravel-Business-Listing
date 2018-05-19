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
                                 <td></td>
                                 <td></td>
                             </tr>
                             @endforeach
                         </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
