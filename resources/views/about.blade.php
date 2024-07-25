@extends('layouts/public')
@section('content')

    <!--============================= ABOUT =============================-->
    <section class="clearfix about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Welcome</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        <br>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                        <br> type specimen book. It has survived not only five centuries</p>
                    <img src="{{asset ('/assets/images/welcom_sign.png')}}" class="img-fluid" alt="welcom-img">
                </div>
            </div>
        </div>
    </section>
    <!--//END ABOUT -->
@endsection
