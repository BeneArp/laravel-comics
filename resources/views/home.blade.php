{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')

    <section id="main">

        <div class="label top">
            <h2>CURRENT SERIES</h2>
        </div>

        <div class="container">

        </div>

        <div class="label center">
            <h4>LOAD MORE</h4>
        </div>

    </section>

    <section id="main-nav">

        <div class="container">

            <div>
                <a href="#">
                    <img src="getImagePath(`../assets/${shop.image}`)" alt="">
                    <span>DIGITAL COMICS</span>
                </a>
            </div>


            <div>
                <a href="#">
                    <img src="getImagePath(`../assets/${shop.image}`)" alt="">
                    <span>DC MERCH</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="getImagePath(`../assets/${shop.image}`)" alt="">
                    <span>SUBSCRIPTION</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="getImagePath(`../assets/${shop.image}`)" alt="">
                    <span>COMICS SCHOP LOCATOR</span>
                </a>
            </div>

            <div>
                <a href="#">
                    <img src="getImagePath(`../assets/${shop.image}`)" alt="">
                    <span>DC POWER VISA</span>
                </a>
            </div>

        </div>

    </section>

@endsection


@section('titlePage')
    home
@endsection
