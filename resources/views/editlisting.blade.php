@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Edit Listing <a href="/dashboard" class="btn btn-default btn-xs pull-right" >Go Back</a></h3></div>

                <div class="panel-body">
                    {!!Form::open(['action' =>['ListingController@update',$listing->id], 'method'=>'POST'])!!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name',$listing->name, ['class' => 'form-control','placeholder' => 'Enter Company Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email', 'Email')}}
                            {{Form::text('email',$listing->email, ['class' => 'form-control','placeholder' => 'Enter Contact Email '])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('phone', 'Phone')}}
                            {{Form::text('phone',$listing->phone, ['class' => 'form-control','placeholder' => 'Enter Contact Phone Number'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('address', 'Address')}}
                            {{Form::text('address',$listing->address, ['class' => 'form-control','placeholder' => 'Enter Company Address'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('website', 'Website')}}
                            {{Form::text('website',$listing->website, ['class' => 'form-control','placeholder' => 'Enter Company Website'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('bio', 'Bio')}}
                            {{Form::textarea('bio',$listing->bio,['class' => 'form-control','placeholder' => 'Write Company Bio here..'])}}
                        </div>
                        <div class="form-group">
                            {{ Form::hidden('_method', 'PUT') }}
                        </div>
                        <div class="form-group">
                            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection