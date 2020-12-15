@extends('layouts.app')

@section('content')


<div clas ="container">

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status')}}

    </div>
    @endif
    <br />
    <a href="{{ route('blog.create')}}" class="btn btn-default">Create New</a>


    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Published</th>
                <th></th>

            </tr>
        </thead>

        @foreach ($model as $post)
            <tr>
                <td>
                <a href="{{ route('blog.edit', ['blog' => $post->id])}}">{{ $post->title }}</a>
                </td>
                <td>{{ $post->user()->first()->name }}</td>
                <td>{{ $post->slug }}</td>
                <td></td>
                <td>
                
                <a href="{{ route('blog.destroy', ['blog' => $post->id]) }}" class="btn btn-danger delete-link"
                    data-message="Are you sure you want to delete this post?"
                    data-form="delete-form">
                        Delete
                </a>
                
                
                
                
                
                </td>

            </tr>

        @endforeach


    </table>

    {{ $model->links() }}
</div>
<form id="delete-form" action="" method="post">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
</form>





@endsection
