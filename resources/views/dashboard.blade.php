@extends('template.index')
@section('main')
<div class="row">
    <div class="container col-md-6">
        <div class="container-homepage">
            <div class="container-title">
                <h3>Welcome To</h3>

                <h1>Tydyiup</h1>
                <div class="second-title"><h3>a greatplace to tidy up your room!</h3></div>

                <div class="text-list-images"><h3>Here is some tips for you <3 </h3></div>
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
                <h2>Introduction to Tydyiup</h2>
            </div>
        </div>
    </div>
</div>

@endsection

@section('additional-styles')
    <style>
    .container-homepage {
        padding-left: 40px;
        margin-top: 100px;
        padding-right: 40px;
    }

    .container-title {
        color: white;
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
        cursor: pointer;
    }


    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection