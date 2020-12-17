@extends('layouts.app')

@csrf
@method('POST')
@section('content')

<div class="container">
    <h1>Create New</h1>
    <form action="{{ route('blog.store') }}", method="post">
        @include('admin.blog.partials.fields')

    </form>
</div>

@endsection
