@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$category->name}}</h2>
                </div>
            </div>
            <a href="{{route('category.edit', $category->id)}}"><button type="button" class="btn mt-4 btn-dark">Modifica</button></a>
            <form action="{{route('category.destroy', $category->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn mt-3 btn-danger">dev/null</button>
            </form>
        </div>
    </div>
</div>
@endsection