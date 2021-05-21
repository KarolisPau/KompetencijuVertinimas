<x-app-layout>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-xl text-center"> Skelbimai </h1>
                    <hr>
                    @if ($skelbimai != null)
                        
                    
                    @foreach ($skelbimai as $skelbimas)
                    <x-skelbimas :pavadinimas="$skelbimas->pavadinimas" :tekstas="$skelbimas->tekstas" :pastas="$skelbimas->user->email" :data="$skelbimas->created_at"></x-skelbimas>
                        <hr>
                    @endforeach
                    @endif

                    @auth
                    <div class="m-2">
                        Kurti Skelbimą
                            <form action="{{ route("skelbti") }}" method="post">
                                @csrf
                                <x-label for="pavadinimas" :value="__('Pavadinimas')" class="mt-2"/>
                                <x-input id="pavadinimas" class="mt-1 w-full" type="text" name="pavadinimas" required/>

                                <x-label for="tekstas" :value="__('Tekstas')" class="mt-2" />
                                <x-input id="tekstas" class="mt-1 w-full" type="text" name="tekstas" required/>

                                
                                </br>
                                <div class="w-full justify-center">
                                <x-button class="mt-2">Patvirtinti</x-button>
                                </div>
                            </form>
                    </div>                  
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>