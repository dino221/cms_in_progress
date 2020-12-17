@extends('layouts.app')

@section('content')


<div clas ="container">

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status')}}

    </div>
    @endif
    <br />
    <a href="{{ route('pages.create')}}" class="btn btn-default">Create New</a>


    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>

            </tr>
        </thead>

        @foreach ($pages as $page)
            <tr>
                <td>
                <a href="{{ route('pages.edit', ['page' => $page->id])}}">{{ $page->title }}</a>
                </td>
                <td>{{ $page->url }}</td>
                <td class="text-right">

                <a href="{{ route('pages.destroy', ['page' => $page->id]) }}" class="btn btn-danger delete-link"
                    data-message="Are you sure you want to delete this post"
                    data-form="delete-form">
                        Delete
                </a>

            </tr>

        @endforeach


    </table>

    {{ $pages->links() }}
</div>

<form id="delete-form" action="" method=post>
    {{ method_field('DELETE') }}
    { csrf_field() }
</form>





@endsection
