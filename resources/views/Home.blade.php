@extends('layouts.master')
@section('title', 'Home')
@section('content')
    @php

        $comments = [
            [
                'author' => 'Mustapha',
                'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'profile1.png',
            ],
            [
                'author' => 'Hamza',
                'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'profile2.png',
            ],
            [
                'author' => 'Asmae',
                'comment' => 'lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'profile' => 'profile3.png',
            ],
        ];
    @endphp
    <style>@media screen and (orientation: landscape) {
.carousel img {
    height: 85vh;
}
}
</style>
    <section style="background-color: #FEFAF6" class="d-block ">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/case-gamer.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
        <h2 class="bg-dark bg-opacity-50 py-2 px-4">make happy its our service</h2>
        <p class="bg-dark bg-opacity-50 py-2 px-4">Get The Best Generation Arrivals</p>
        <a href="#" class="btn btn-outline-light px-4 py-2 rounded-0">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/hardware.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
        <h2 class="bg-dark bg-opacity-50 py-2 px-4">Second slide label</h2>
        <p class="bg-dark bg-opacity-50 py-2 px-4">Some representative placeholder content for the second
          slide.</p>
        <a href="#" class="btn btn-outline-light px-4 py-2 rounded-0">Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/build-pc.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
        <h2 class="bg-dark bg-opacity-50 py-2 px-4">Build your Pc</h2>
        <p class="bg-dark bg-opacity-50 py-2 px-4">we have the best technicien for building your pc</p>
        <a href="#" class="btn btn-outline-light px-4 py-2 rounded-0">Learn More</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .whatsapp-icon:hover {
            background-color: #128C7E;
        }
    </style>
</head>
<body>
    <!-- Your existing HTML content -->

    <!-- WhatsApp Icon -->
    <a href="https://wa.me/0666666666" class="whatsapp-icon" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Your existing scripts -->
</body>
</html>

<!--         <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/case-gamer.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/hardware.jpg') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/big-savings.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md m-auto">
                    <h1 class="p-3 text-center">
                        "Discover our latest <a href="/products" class="text-dark">promotions!</a>"
                    </h1>
                </div>
            </div>
        </div>
 -->    </section>
    <section style="background-color: #3559E0" class="py-3 text-white">
        <div class="container">
            <h1>Find out our latest <a href="/products" class="text-white">Listings!</a></h1>
            <div class="row pt-3">
                @foreach ($latestLisings as $listing)
                    {{-- @dump($listing['Thumbnail']) --}}
                    <x-products-card :product="$listing" />
                @endforeach
            </div>
        </div>
    </section>
    <section style="background-color: #FEFAF6" class="py-3">
        <div class="container">
            <div class="row p-4">
                <div class="col-md m-auto">
                    <h1 class="p-3 text-center">
                        "Locate us!"
                    </h1>
                </div>
                <div class="col-md">
                    <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1659.696817616278!2d-7.390094961243483!3d33.6987618595747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDQxJzU1LjUiTiA3wrAyMycxNy4wIlc!5e0!3m2!1sen!2sma!4v1716598651013!5m2!1sen!2sma"
                        {{--  width="800" --}} height="350" class="col-md w-100" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #102C57" class="py-3 text-white">
        <div class="container">
            <h1>Our best selling <a href="/products" class="text-white">products</a> for the month!</h1>
            <div class="row pt-3">
                @foreach ($bestSellings as $product)
                    <x-products-card :product="$product" />
                @endforeach
            </div>
        </div>
    </section>
    <section style="background-color: #FEFAF6" class="py-3 text-dark">
        <div class="container">
            <h1>Our Customers said some truths!</h1>
            <div class="row d-flex justify-content-around mt-3 py-3">
                @foreach($comments as $comment)
                    <div class="col-md-6 col-lg-4">
                        <x-customer-comments-card :comment="$comment" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
