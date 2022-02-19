@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$post->title}}</h2>
                </div>
                <div class="card-body">
                    <p>{{$post->content}}</p>
                    @if ($post->published)
                        <span class="badge badge-success">Pubblicato</span>
                    @else
                        <span class="badge badge-warning">Bozza</span>
                    @endif
                </div>
            </div>
            <a href="{{route('posts.edit', $post->id)}}"><button type="button" class="btn mt-4 btn-dark">Modifica</button></a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn mt-3 btn-danger">dev/null</button>
            </form>
        </div>
    </div>
</div>
@endsection