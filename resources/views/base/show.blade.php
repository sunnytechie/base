
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

            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-6">
                        {{-- Base start --}}
                         @include('base.snippets.base')
                     </div>
 
                     <div class="col-sm-6">
                         @include('base.snippets.showcounter')


                         <!-- Widgets Start -->
                        @include('base.snippets.showwidgets')
                        <!-- Widgets End -->

                        {{-- include newthread modal --}}
                        @include('base.snippets.modals.newthread')
                     </div>
                </div>
                    
            </div>

            

            


            <!-- Footer Start -->
            @include('base.snippets.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@endsection