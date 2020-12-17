@extends('layouts.app')
@csrf 
@method("POST")

@section('content')

<div clas ="container">
    <h1>Create New</h1>
    <form action="{{ route('pages.store') }}" method="PATCH">
        @include('admin.pages.partials.fields')
        
    
    </form>
 </div>

@endsection
