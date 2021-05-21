<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h1 class="text-xl text-center"> Klubo Kontaktai </h1>
                    <hr>
                    <p class="text-l text-center block">Adresas: Gulbių g.</p>
                    <p class="text-l text-center block">Telefono nr: +370 699 987 8787</p>
                    <p class="text-l text-center block">Pašto kodas: LT-98555</p>
                    <p class="text-l text-center block">Miestas: Klaipėda</p>
                        
                    <div class="pr-2">
                        Klauskite
                            <form action="{{ route("klausti") }}" method="post">
                                @csrf
                                <x-label for="vardas" :value="__('Vardas')" class="mt-2"/>
                                <x-input id="vardas" class="mt-1 w-full" type="text" name="vardas" required autofocus />

                                <x-label for="pastas" :value="__('El. Paštas')" class="mt-2" />
                                <x-input id="pastas" class="mt-1 w-full" type="text" name="pastas" required autofocus />

                                <x-label for="telefonas" :value="__('Tel. nr.')" class="mt-2"/>
                                <x-input id="telefonas" class="mt-1 w-full" type="text" name="telefonas" required autofocus />

                                <x-label for="klausimas" :value="__('Klausimas')" class="mt-2"/>
                                <x-input id="klausimas" class="mt-1 w-full" type="text" name="klausimas" required autofocus />
                                </br>
                                <div class="w-full justify-center">
                                <x-button class="mt-2">Patvirtinti</x-button>
                                </div>
                            </form>
                    </div>
                        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>