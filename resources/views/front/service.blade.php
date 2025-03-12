@extends('front.layouts.app')
@section('content')

<section class="my-8">
    <div class="container">
        <div class="flex gap-1">
            <a href="{{ route('front.index') }}" class="text-blue-500">Anasayfa</a>
            <span>/</span>
            <div>Hizmetlerimiz</div>
        </div>
    </div>
</section>
    <section class=" courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Hizmetlerimiz</h6>
                        <h2>Tüm Hizmetlerimiz</h2>
                    </div>
                </div>
            </div>

        
            <div class="!grid !grid-cols-3 max-lg:grid-cols-1 !gap-5 ">
                @foreach ($services as $service)
                    <a href="{{ route('front.subservices', $service) }}" class="align-self-center event_outer ">
                        <div class="events_item">
                            <div class="thumb">
                                <div><img src="{{ asset('storage/' . $service->image) }}" alt=""></div>


                            </div>
                            <div class="down-content">
                                <span class="author">{{ $service->name }}</span>
                                <h4>{{ $service->name }}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>


@include('front.components.form')
@endsection
