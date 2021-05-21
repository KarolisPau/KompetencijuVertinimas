<x-app-layout>
    
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    @slot('header')
                    <p class="text-center text-lg">Titulinis </p> 
                    @endslot('header')
                    
                    <h1 class="text-xl"> Informacija apie svetainę </h1>
                    <hr>
                       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                           Aenean eu dui ex. Phasellus varius vel augue in iaculis. 
                           Integer aliquam tellus quis purus efficitur, non imperdiet ex 
                           euismod. Nulla neque lorem, blandit sit amet est non, pulvinar 
                           elementum erat. Ut faucibus nisi sed quam pulvinar, in efficitur 
                           tellus ultricies. Sed commodo dui vitae scelerisque varius. 
                           Donec eu dui nibh. Donec et scelerisque dolor. Morbi hendrerit vel mauris sed ornare. Curabitur et velit risus.

                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
                        posuere cubilia curae; Sed vulputate lectus ut dapibus fermentum. 
                        Suspendisse blandit rhoncus tellus rhoncus sodales. Ut efficitur 
                        scelerisque nibh et lacinia. Suspendisse porta, ligula ac convallis 
                        mattis, risus sem finibus diam, blandit elementum nisl magna pulvinar odio.
                        Sed eros lacus, consequat a interdum a, sodales vestibulum arcu.
                        Morbi sit amet consequat erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
                        posuere cubilia curae; In id eleifend ligula. Morbi efficitur vestibulum neque quis rhoncus.
                        Aliquam sit amet mauris gravida, posuere diam eget, cursus diam. Quisque eget mattis mauris. Phasellus ultricies 
                        facilisis vehicula. Cras maximus, nulla quis ullamcorper dapibus, ex massa porta turpis, quis tempus odio sem ac orci.</p>
                    

                    

                    
                    @yield('footer')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>