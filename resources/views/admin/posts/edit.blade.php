@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Modifica Post N. {{$post->id}}</h2>
                    <p>Titolo: {{$post->title}}</p>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.update', $post->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                          <label for="title">Titolo</label>
                          <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" placeholder="Inserire titolo" value="{{old('title') ? old('title') : $post->title}}">
                            @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Contenuto</label>
                            <textarea class="form-control" @error('content') is-invalid @enderror id="content" name="content" placeholder="Inserire contenuto" rows="3">{{old('content') ? old('content') : $post->content}}</textarea>
                            @error('content')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                          </div>
                        @php
                            $published = old('published') ? old('published') : $post->published;
                        @endphp
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" @error('published') is-invalid @enderror id="published" name="published" {{$published ? 'checked' : ''}}>
                            @error('published')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                          <label class="form-check-label" for="published">Pubblicato</label>
                        </div>
                        <button type="Aggiungi" class="btn btn-success">Salva</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection