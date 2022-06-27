
@extends('layouts.app')

@section('content')
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Sidebar Start -->
        @include('base.snippets.sidebar')
        <!-- Sidebar End -->

        
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('base.snippets.nav')
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            @include('base.snippets.counter')
            <!-- Sale & Revenue End -->

            {{-- Base start --}}
            {{-- @include('base.snippets.base') --}}

            <!-- Widgets Start -->
            @include('base.snippets.widgets')
            <!-- Widgets End -->

            {{-- include add modal --}}
            @include('base.snippets.modals.newbank')

            <!-- Footer Start -->
            @include('base.snippets.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@endsection