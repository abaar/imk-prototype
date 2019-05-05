@extends('template.index')
@section('main')
<div class="row">
    <div class="container col-md-6">
        <div class="container-homepage">
            <div class="container-title">
                <h3>Welcome To</h3>

                <h1>Tidiup</h1>
                <div class="second-title"><h3>Hahahahahaha</h3></div>

                <div class="text-list-images"><h3>Ini gan</h3></div>
            </div>
            <div class="container-image">
                <div class="container-image-row">
                    <img class="img" src="{{asset('img/tidy-shoes.jpg')}}" style="width:100%; max-height: 150px; height:100%">
                </div>
                <div class="container-image-row">
                        <img class="img" src="{{asset('img/tidy-wardrobe.jpg')}}" style="width:100%; max-height:150px; height:100%">
                </div>
                <div class="container-image-row">
                        <img class="img" src="{{asset('img/tidy-wardrobe.jpeg')}}" style="width:100%; max-height:150px; height:100%">
                </div>
            
            </div>

        </div>
    </div>
    <div class="container col-md-6">
        <div class="container-homepage">
            <div class="container-image">
                <img class="img" src="{{asset('img/tidy-house.jpg')}}" style="width:100%; max-height:375px; height:100%">
            </div>
            <div class="container-title">
                <h2>Hohohihi</h2>
            </div>
        </div>
    </div>
</div>

@endsection

@section('additional-styles')
    <style>
    .container-homepage {
        padding-left: 40px;
        padding-top: 60px;
        padding-right: 40px;
    }

    .container-title {
        color: black;
    }

    .container-title h1 {
        font-size: 100px;   
    }

    .container-title h2 {
        text-align: center;
        font-size: 60px;
        padding-top: 10px;
    }

    .second-title {
        padding-left: 100px;
    }

    .container-image {
        display: flex;
    }

    .container-image-row {
        flex: 33.33%;
        padding: 10px;
    }

    .text-list-images {
        padding-top: 20px;
    }

    .img {
        border-radius: 10px;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
    }


    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection