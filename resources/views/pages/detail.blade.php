@extends('layouts.app')

@section('name', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Bromo, Malang</h1>
                        <p>Republic of Indonesia</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                            <img src="{{url('frontend/images/details-image.png')}}" class="xzoom" id="xzoom-default" xoriginal="frontend/images/details-image.png">
                            </div>
                            <div class="xzoom-thumbs">
                            <a href="{{url('frontend/images/details-image.png')}}">
                            <img src="{{url('frontend/images/subpic1.png')}}" class="xzoom-gallery" width="128" xpreview="frontend/images/details-image.png">
                                </a>
                            <a href="{{url('frontend/images/details-image2.jpg')}}">
                            <img src="{{url('frontend/images/subpic2.png')}}" class="xzoom-gallery" width="128" xpreview="frontend/images/details-image2.jpg">
                                </a>
                            <a href="{{url('frontend/images/details-image3.jpg')}}">
                            <img src="{{url('frontend/images/subpic3.png')}}" class="xzoom-gallery" width="128" xpreview="frontend/images/details-image3.jpg">
                                </a>
                            <a href="{{url('frontend/images/details-image4.jpg')}}">
                            <img src="{{url('frontend/images/subpic4.png')}}" class="xzoom-gallery" width="128" xpreview="frontend/images/details-image4.jpg">
                                </a>
                            <a href="{{url('frontend/images/details-image5.jpg')}}">
                            <img src="{{url('frontend/images/subpic5.png')}}" class="xzoom-gallery" width="128" xpreview="frontend/images/details-image5.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Indonesia sits on the Ring of Fire, an area with some of the most active volcanoes in the world. Many of the country's volcanoes, such as Mount Merapi, are famous for their violent eruptions and their stunning, but dangerous
                            beauty. Mount Bromo is among the best known, thanks largely to its incredible views, particularly when seen standing over the caldera at sunrise.</p>
                        <p>Bromo's peak was blown off in an eruption, and you can still see white smoke spewing from the mountain. The volcano is part of Bromo Tengger Semeru National Park, which also includes Mount Semeru, the highest peak in Java.
                            The park is home to the Tengger people, an isolated ethnic group who trace their ancestry back to the ancient Majapahit empire.</p>
                        <di class="features row">
                            <div class="col-md-4">
                            <img src="{{url('frontend/images/ic_event.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Mountain Climbing</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/ic_language.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Indonesian</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/ic_foods.png')}}" alt="" class="features-image">
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </di>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{url('frontend/images/member-1.png')}}" class="member-image mr-1">
                            <img src="{{url('frontend/images/member-2.png')}}" class="member-image mr-1">
                            <img src="{{url('frontend/images/member-3.png')}}" class="member-image mr-1">
                            <img src="{{url('frontend/images/member-4.png')}}" class="member-image mr-1">
                            <img src="{{url('frontend/images/member-5.png')}}" class="member-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">20 November 2019</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$95,00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                    <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush
