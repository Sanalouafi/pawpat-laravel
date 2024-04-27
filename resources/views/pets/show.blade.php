<x-marketplace>
    <div class="font-[sans-serif] bg-white">
        <div class="p-6 lg:max-w-7xl max-w-4xl mx-auto">
            <div
                class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
                <div class="lg:col-span-3 w-full lg:sticky top-0 text-center">
                    <div class="px-4 py-10 rounded-xl shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative">
                        <img src="{{ $pet->getFirstMediaUrl('pet') }}" alt="pet"
                            class="w-4/5 rounded object-cover" />
                        <button type="button" class="absolute top-4 right-4">
                            <a href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="#ccc"
                                    class="mr-1 hover:fill-[#333]" viewBox="0 0 64 64">
                                    <path
                                        d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                        data-original="#000000"></path>
                                </svg>
                            </a>

                        </button>
                    </div>
                </div>
                <div class="lg:col-span-2">
                    <h2 class="text-2xl font-extrabold text-[#333]">{{ $pet->name }} |
                        {{ $pet->type->type_name }}</h2>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <p class="text-[#333] text-4xl font-bold">{{ $pet->breed }} </p>
                    </div>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <h4>Description:</h4>
                    </div>
                    <div class="flex flex-wrap gap-4 mt-6">
                        <p class="text-[#333] text-2xl font-light">{{ $pet->description }} </p>
                    </div>
                    
                    <div class="flex flex-wrap gap-4 mt-10">

                            <a href="{{ route('login') }}"  class="min-w-[200px] px-4 py-3 text-center bg-[#333] hover:bg-[#111] text-white text-sm font-bold rounded">

                                adopt now
                            </a>

                    </div>
                </div>
            </div>





            <div class="mt-16 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-6">
                <h3 class="text-lg font-bold text-[#333]">pet information</h3>
                <ul class="mt-6 space-y-6 text-[#333]">
                    <li class="text-sm">Name <span class="ml-4 float-right">{{ $pet->name }}</span></li>
                    <li class="text-sm">Type <span class="ml-4 float-right">{{ $pet->type->type_name }}</span>
                    </li>
                    <li class="text-sm">Size <span class="ml-4 float-right">{{ $pet->size }}</span></li>
                    <li class="text-sm">Weight <span class="ml-4 float-right">{{ $pet->weight }} kg</span></li>
                    <li class="text-sm">Description <span class="ml-4 float-right">{{ $pet->description }}</span>

                    </li>
                    <li class="text-sm">Breed <span class="ml-4 float-right">{{ $pet->breed }}</span></li>
                    <li class="text-sm">Gender <span class="ml-4 float-right">{{ $pet->gender }}</span></li>
                    <li class="text-sm">
                        Age <span class="ml-4 float-right">{{ $pet->age }} Years</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</x-marketplace>
