@props(['pavadinimas', "tekstas","pastas","data"])

<div {{ $attributes->merge(['class' => 'block m-auto font-medium mb-2 max-w-screen-md shadow-xl bg-yellow-100']) }}>
    <div class="inline-flex">
    <h3 class="float-left m-2 font-bold">{{ $pavadinimas }}</h3>
    <h4 class="float-right m-2 flex">{{ $data }} {{ $pastas }}</h4>
    
    </div>
    <br>
    <h4 class="justify-between m-1">{{ $tekstas }}</h4>
</div> 