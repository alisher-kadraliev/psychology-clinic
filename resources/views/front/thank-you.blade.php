@extends('front.layouts.app')
@section('content')
        <section class="my-20">
            <div class="container">
                <div class="flex mx-auto justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.2 161.2" width="30%" height="30%">
                        <circle class="path" fill="none" stroke="#6396e3" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6"
                                r="62.1" />
                        <path class="path" fill="none" stroke="#6396e3" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10"
                              d="M113 52.8l-38.9 55.6-25.9-22" />
                        <circle class="spin" fill="none" stroke="#6396e3" stroke-width="4" stroke-miterlimit="10"
                                stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9" />
                    </svg>
                </div>
                <div class="text-center">
                    <h2>
                        <span class="textgradiendc text-5xl font-bold " style="font-style: italic;">Randevu Alındı</span>
                    </h2>
                </div>
                <div class="text-center mt-3">
                    <span class="text-gray-500 text-2xl">
                        Randevu alma işleminiz başarıyla tamamlandı.
                    </span>
                </div>
            </div>
        </section>
@endsection
