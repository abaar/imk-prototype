@extends('template.index')
@section('main')

<div class="content-wrapper col-md-9">
    <div id="content" class="row">
        <div class="content-container" >
            <div class="col-md-5 content-tumbnail">
                <div class="content-img-container">
                    <img src="{{ asset('img/tidy-house-2.jpg') }}" width="675px",height="380px">
                </div>
                
                <div class="content-desc-title">
                    <h1>
                        Tes123
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('additional-styles')
    <style>
        .content-wrapper{
            /* background-color:white; */
            height: 100vh;
            margin-left: 2%;
            margin-top:20px;
        }

        .content-container{
            height:33vh;
            cursor: pointer;
            border-radius: 5px
        }


        .content-img-container{
            padding-top:5px;
            padding-bottom:5px;
            padding-left:0;
            margin-left:0;
        }

        .content-desc-title h1{
            margin-top:0;
            margin-bottom: 0;
        }

        .content-desc{
            color:white;
        }

        .content-desc-title{  
            white-space: unset;
            text-overflow: ellipsis;
            overflow: hidden;
            padding-left: 0;
        }
    </style>
@endsection

@section('additional-scripts')
    <script>
    </script>
@endsection