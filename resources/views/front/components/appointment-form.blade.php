   <div id="appointment-modal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-center justify-center min-h-screen p-4">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-black/60 bg-opacity-75 transition-opacity"></div>

            <!-- Modal panel -->
            <div
                class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" onclick="closeModal()" class="text-gray-400 cursor-pointer hover:text-gray-500">
                        <span class="sr-only">Kapat</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="#fff">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="bg-[#796ad8] px-4 pt-5 pb-4 sm:p-6 sm:pb-4 ">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left w-full">
                            <h3 style="font-style:italic" class="leading-6 text-4xl font-medium text-white"
                                id="modal-title">
                                Randevu Formu
                            </h3>
                            <div class="mt-2">
                                <p class="text-white" id="selected-service-info"></p>
                            </div>
                            <div class="mt-4">
                                <form action="{{ route('front.thank-you') }}" method="POST" class="space-y-4"
                                    id="appointment-form">
                                    @csrf
                                    <input type="hidden" name="subservice_id" id="subservice_id">

                                    <div class="flex flex-col gap-2 items-start">
                                        <label class="block text-sm font-medium text-white">Seçilen Hizmet</label>
                                        <select name="subservice_id" id="subservice_select" required
                                            class="w-full p-3 bg-white text-[#796ad8] rounded-md">
                                            <option value="">Hizmet Seçiniz</option>
                                            @foreach ($subservices as $subservice)
                                                <option value="{{ $subservice->id }}">{{ $subservice->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="service-error" class="hidden text-red-200 text-sm mt-1">Lütfen bir hizmet
                                            seçiniz</div>
                                    </div>

                                    <div class="flex flex-col gap-2 items-start">
                                        <label for="name" class="block text-sm font-medium text-white">Ad Soyad</label>
                                        <input placeholder="Ad Soyad giriniz" type="text" name="name" id="name"
                                            required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>

                                    <div class="flex flex-col gap-2 items-start">
                                        <label for="phone" class="block text-sm font-medium text-white">Telefon</label>
                                        <input type="tel" placeholder="Telefon numaranızı giriniz" name="phone"
                                            id="phone" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>

                                    <div class="flex flex-col gap-2 items-start">
                                        <label for="message" class="block text-sm font-medium text-white">Mesaj</label>
                                        <textarea placeholder="Mesajınızı giriniz" name="message" id="message" rows="3"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-[#796ad8] px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse items-center">
                    <button type="submit" form="appointment-form"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-white text-base font-medium text-[#796ad8] hover:!bg-[#6455c6] hover:text-white sm:ml-3 sm:w-auto sm:text-sm transition-all duration-300">
                        Randevu Al
                    </button>
                </div>
            </div>
        </div>
    </div>
