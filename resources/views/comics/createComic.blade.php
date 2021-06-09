@extends('layouts.app')

@section('create')

    <main id="create">

        <div class="form-createComic">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                @method('POST')
                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Title">

                <label for="description">Description</label>
                <input type="text" name="description" placeholder="Description">

                <label for="price">Price</label>
                <input type="text" name="price" placeholder="Price">

                <label for="series">Series</label>
                <input type="text" name="series" placeholder="Series">

                <label for="sale_date">Sale date</label>
                <input type="text" name="sale_date" placeholder="Sale date">

                <label for="type">Type</label>
                <input type="text" name="type" placeholder="Type">

                <input type="submit" value="Aggiungi">
            </form>
        </div>

        {{-- <section id="infoCreate">

        </section> --}}


    </main>

@endsection
