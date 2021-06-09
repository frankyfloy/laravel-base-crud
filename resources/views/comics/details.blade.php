@extends('layouts.app')

@section('details')

    <main id="details">

        <div class="divider">

        </div>


        <div class="thumbArticle">
            <img class="card-img" src="{{$comic->thumb}}" alt="">
        </div>

        <section id="consoleDetails">

            <h2>{{$comic->series}}</h2>

            <div class="cont-price">

                <div class="info-price">
                    <span class="price">{{$comic['price']}}</span>
                    <span class="Availability">AVAILABLE</span>
                </div>

                <div class="check-Availability">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Check Availability
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

            <p class="description">{{$comic['description']}}</p>

            <div class="cont-pubblicità">
                <p>ADVERTISEMENT</p>
                <img src="..\img\adv.jpg" alt="">
            </div>

        </section>

        <section id="infoDetails">
            <div class="col-6">
                <div class="actionOnComic">
                    <a class="btn-editComic" href="{{route('comics.edit',$comic->id)}}">Edit</a>

                    <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn-deleteComic" type="submit" name="Delete">Delete</button>
                    </form>
                </div>
            </div>

            <div class="col-6">
                <h4>Specs</h4>
                <div class="br-bottom">
                    <span class="headCell">Series:</span>
                    <a class="contentCell" href="#">{{strtoupper($comic['series'])}}</a>
                </div>
                <div class="br-bottom">
                    <span class="headCell">U.S. Price:</span>
                    <span class="contentCell">{{$comic['price']}}</span>
                </div>
                <div class="br-bottom">
                    <span class="headCell">ON Sale Date:</span>
                    <span class="contentCell">{{$comic['sale_date']}}</span>
                </div>
            </div>
        </section>

        <section id="infoDC">

            <div class="digi-comics">
                <img href="#" src={{asset('img\buy-comics-digital-comics.png')}} alt="img-digital-comics">
                <span><a href="#">DIGITAL COMICS</a></span>
            </div>

            <div class="sub">
                <img href="#" src={{asset('img\buy-comics-subscriptions.png')}} alt="img-subscriptions">
                <span><a href="#">SHOP DC</a></span>
            </div>

            <div class="shop-loc">
                <img href="#" src={{asset('img\buy-comics-shop-locator.png')}} alt="img-shop-locator">
                <span><a href="#">COMIC SHOP LOCATOR</a></span>
            </div>

            <div class="dc-merchandise">
                <img href="#" src={{asset('img\buy-comics-merchandise.png')}} alt="img-merchandise">
                <span><a href="#">SUBSCRIPTIONS</a></span>
            </div>

        </section>

    </main>

@endsection
