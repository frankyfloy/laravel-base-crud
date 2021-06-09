@extends('layouts.app')

@section('edit')

    <main id="edit">

        <div class="form-editComic">
            <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
                @csrf
                @method('PATCH')
                <label for="title">Title</label>
                <input type="text" name="title" value="{{$comic->title}}" placeholder="Title" >

                <label for="description">Description</label>
                <input type="text" name="description" value="{{$comic->description}}" placeholder="Description">

                <label for="price">Price</label>
                <input type="text" name="price" value="{{$comic->price}}" placeholder="Price">

                <label for="series">Series</label>
                <input type="text" name="series" value="{{$comic->series}}" placeholder="Series">

                <label for="sale_date">Sale date</label>
                <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale date">

                <label for="type">Type</label>
                <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">

                <input type="submit" value="Modifica">
            </form>
        </div>
    </main>

@endsection
