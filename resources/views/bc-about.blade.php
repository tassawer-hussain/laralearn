{{-- Relative path to the base file in views folder --}}
{{-- @extends('template-inheritance.base') --}}

{{-- Need to mentioned which base file it is inherited from --}}
{{-- @extends('template-inheritance.base') --}}

{{-- Instead of using the above extend directive, we used it to extend the component. Here -base represents the name of the base file inside the components folder --}}
<x-base>

    {{-- @section('name','Tassawer') --}}
    <x-slot name="name">
        Tassawer
    </x-slot>

    {{-- @section('content') --}}
    <x-slot name="content">
        <h1 class="text-4xl font-bold">About</h1>
        <p class="mt-4 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in saepe ea eius ex recusandae impedit earum! Aperiam quibusdam quos voluptate quisquam cum saepe incidunt odio delectus! Eius, obcaecati asperiores.</p>
    {{-- @endsection --}}
    </x-slot>

</x-base>