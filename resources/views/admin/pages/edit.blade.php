@extends('layouts.app')

@section('content')

<div clas ="container">
    <h1>Edit Page</h1>
    <form action="{{ route('pages.update', ['page' => $model->id]) }}" method="PATCH">
        {{ method_field('PUT') }}
        @include('admin.pages.partials.fields')
    
    </form>
 </div>

@endsection
