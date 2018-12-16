@extends('layouts.app')

@section('content')


<div class="col-md-12 card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <board-component></board-component> 
            
</div>
@endsection
