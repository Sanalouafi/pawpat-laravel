<x-marketplace>
    <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-6 py-3">
        <div class=" w-full flex justify-center items-center">
            <form action="/search" class="max-w-[480px] w-full px-4">
                <div class="relative">
                    <input type="text" name="q"
                        class="w-full border h-12 shadow p-4 rounded-full dark:text-gray-800 dark:border-gray-700 dark:bg-gray-200"
                        placeholder="search">
                    <button type="submit">
                        <svg class="text-teal-400 h-5 w-5 absolute top-3.5 right-3 fill-current dark:text-teal-300"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex flex-wrap justify-center mt-10">
            @foreach ($types as $type)
                <!-- card 1 -->
                <div class="py-2 max-w-sm px-2">
                    <div class="rounded-lg bg-black px-16 py-4 flex items-center justify-center" style="height: 100%;">
                        <a href="#" class="type-link" data-type="{{ $type->id }}">
                            <h2 class="text-white text-lg font-medium">{{ $type->type_name }}</h2>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-white mb-8">Our Pets</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="pet-container">
                @foreach ($pets as $pet)
                    <div class="pet-card bg-white rounded-lg shadow-lg p-8" data-pet-type="{{ $pet->type_id }}">
                        <div class="relative overflow-hidden">
                            <div style="max-height: 320px;">
                                <img class="object-cover w-full h-full" src="{{ $pet->getFirstMediaUrl('pet') }}"
                                    alt="pet">
                            </div>
                            <div class="absolute inset-0 bg-black opacity-40"></div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mt-4 pet-name">{{ $pet->name }}</h3>
                        <p class="text-gray-500 text-sm mt-2">{{ $pet->city }}</p>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-gray-900 font-bold text-lg">{{ $pet->type->type_name }}</span>
                            <a href="{{ route('pets.show', $pet->id) }}"
                                class="bg-gray-900 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800">Learn
                                More</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $pets->links() }}
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const typeLinks = document.querySelectorAll('.type-link');
            const petCards = document.querySelectorAll('.pet-card');
            const searchInput = document.querySelector('input[name="q"]');

            typeLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const typeId = this.getAttribute('data-type');
                    filterPets(typeId, searchInput.value.trim().toLowerCase());
                });
            });

            searchInput.addEventListener('input', function() {
                const searchText = this.value.trim().toLowerCase();
                const activeTypeLink = document.querySelector('.type-link.active');
                const typeId = activeTypeLink ? activeTypeLink.getAttribute('data-type') : null;
                filterPets(typeId, searchText);
            });

            function filterPets(typeId, searchText) {
                petCards.forEach(card => {
                    const petType = card.getAttribute('data-pet-type');
                    const petName = card.querySelector('.pet-name').textContent.toLowerCase();
                    const matchesType = typeId ? petType === typeId : true;
                    const matchesSearch = searchText ? petName.includes(searchText) : true;

                    if (matchesType && matchesSearch) {
                        card.style.display = 'block'; // Show matching pet cards
                    } else {
                        card.style.display = 'none'; // Hide non-matching pet cards
                    }
                });
            }

            // Optional: To highlight the active type link
            typeLinks.forEach(link => {
                link.addEventListener('click', function() {
                    typeLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>


</x-marketplace>
