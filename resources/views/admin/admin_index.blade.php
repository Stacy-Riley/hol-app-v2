@extends('layouts/admin')

@section('content')
    <section class="form-screen-transition mr-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-md-2-5">
                    <h1 class="text-center ml-4 mt-5">Admin Dashboard</h1>
                </div>
                <div class="row">
                    @if(session('success'))
                        <div class="col-12 col-lg-4 offset-md-2-5 alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    @if(isset($quote) && isset($author))
                        <div class="col-12 col-lg-10 offset-md-2-5 quote-box mt-5 p-4 border rounded shadow">>
                            <blockquote>
                                <p class="text-lg italic">{{ $quote }}</p>
                                <footer class="blockquote-footer">{{ $author }}</footer>
                            </blockquote>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
{{--    Function to fade out the login message--}}
    <script>
    document.addEventListener('DOMContentLoaded', function(){
        setTimeout(function() {
            let alert = document.querySelector('.alert-success');
            if(alert) {
                alert.style.transition = 'opacity 1s ease';
                alert.style.opacity = '0';
                setTimeout(function() {
                    alert.remove();
                }, 1000);
            }
        },3000);
    })
    </script>
@endsection
