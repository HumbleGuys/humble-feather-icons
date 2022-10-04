@php
$icons = collect(app('files')->files(basePath('src/resources/components')))->map(function ($file) {
    $name = str($file->getFilename())->before('.');
    
    $fullName = "x-featherIcons::{$name}";

    return \Illuminate\Support\Facades\Blade::render("<x-featherIcons::{$name} />");
});
@endphp

<x-layout>
    <div style="padding:5rem;">
        @foreach ($icons as $icon)
            {!! $icon !!}
        @endforeach
    </div>

    <div style="padding:5rem;">
        <x-featherIcons::chevron-left style="width:4rem;height:4rem;" :stroke-width="2" />

        <x-featherIcons::chevron-right style="width:4rem;height:4rem;" :stroke-width="3" />
    </div>
</x-layout>