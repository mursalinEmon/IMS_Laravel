@extends('layouts.app')

@section('content')
    <!-- Add Product Component-->
    <div class="container">
        <div id="app">
            <add-product></add-product>
            @yield('content')
        </div>
    </div>
@endsection

