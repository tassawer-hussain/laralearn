{{-- Relative path to the base file in views folder --}}
{{-- @extends('template-inheritance.base') --}}

{{-- Need to mentioned which base file it is inherited from --}}
@extends('template-inheritance.base')

@section('name','Tassawer')

@section('content')
   <h1 class="text-4xl font-bold">Home</h1>
   <p class="mt-4 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque in saepe ea eius ex recusandae impedit earum! Aperiam quibusdam quos voluptate quisquam cum saepe incidunt odio delectus! Eius, obcaecati asperiores.</p>
@endsection