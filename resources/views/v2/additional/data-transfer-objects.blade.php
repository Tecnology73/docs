@extends('v2.layout.app')

@section('content')

    <x-container>
        {{ Illuminate\Mail\Markdown::parse(file_get_contents(base_path() . '\resources\docs\2.0\data-transfer-objects.md')) }}
    </x-container>



@endsection
