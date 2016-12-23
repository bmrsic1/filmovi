@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Popis filmova:</div>

            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
				<li class="list-group-item">
				@foreach($films as $film)
				
				<ul>{{$film->naziv}} (trajanje:{{$film->trajanje}} minuta, godina: {{$film->godina}})</ul>		
				
				@endforeach
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
