@extends('front.layouts.app')
@section('content')
    <section class="my-8">
        <div class="container">
            <div class="flex gap-1">
                <a href="{{ route('front.index') }}" class="text-blue-500">Anasayfa</a>
                <span>/</span>
                <a href="{{ route('front.service') }}" class="text-blue-500">Hizmetlerimiz</a>
                <span>/</span>
                <div>{{ $service->name }}</div>
            </div>
        </div>
    </section>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">{{ $service->name }}</h1>
            @if ($service->description)
                <p class="mt-4 text-lg text-gray-600">{{ $service->description }}</p>
            @endif
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($subservices as $subservice)
                <div class="align-self-center event_outer cursor-pointer modal-form">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="javascript:void(0)"><img src="{{ asset('storage/' . $subservice->image) }}"
                                    alt=""></a>
                            <span class="category">{{ $subservice->time }}</span>
                            <span class="price">
                                <h6><em>₺</em>{{ number_format($subservice->price, 0) }}</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <h4>{{ $subservice->name }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Single Modal for all subservices -->

    @include('front.components.appointment-form')
    @include('front.components.form')
@endsection

