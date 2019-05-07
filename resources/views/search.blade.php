@extends('template.index')
@section('main')
<div class="row">
    <div class="filter-wrapper col-md-4">
        
            <div class="filter-header">
                <h4 id="filter-close-title" class="filter-header-title">Filter</h4>
                <div class="pull-right">
                    <h4><span id="filter-close-trigger" class="fa fa-times"></span></h4>
                    <p class="filter-closed-text">F</p>
                    <p class="filter-closed-text">I</p>
                    <p class="filter-closed-text">L</p>
                    <p class="filter-closed-text">T</p>
                    <p class="filter-closed-text">E</p>
                    <p class="filter-closed-text">R</p>
                </div>
            </div>
            <div id="filter">
            <div class="filter-content">
                <div class="content-of-filters row">
                        <h5><span>Content Type</span></h5>
                        <ul style="padding-left:0">
                            <li class="col-md-5 filter-option left"><span>Video</span></li>
                            <li class="col-md-5 filter-option right"><span>Artikel</span></li>
                        </ul>
                    </div>
                <div class="content-of-filters row video">
                    <h5><span>Video Quality</span></h5>
                    <ul style="padding-left:0">
                        <li class="col-md-5 filter-option left"><span>>360P</span></li>
                        <li class="col-md-5 filter-option  right"><span>360P</span></li>
                        <li class="col-md-5 filter-option left"><span>720P</span></li>
                        <li class="col-md-5 filter-option right"><span>>720P</span></li>
                    </ul>
                </div>
                <div class="content-of-filters row video">
                    <h5><span>Duration (minutes)</span></h5>
                    <ul style="padding-left:0">
                        <li class="col-md-5 filter-option left"><span>>5</span></li>
                        <li class="col-md-5 filter-option right"><span>5-10</span></li>
                        <li class="col-md-5 filter-option left"><span>>10</span></li>
                    </ul>
                </div>
                <div class="content-of-filters row tag">
                    <h5 class="tag-title"><span>Tag</span></h5>
                        <select class="chosen-select" multiple="multiple">
                            <option value="">Small Room</option>
                            <option value="">Wardrobe</option>
                            <option value="">Ruang Sempit</option>
                            <option value="">Lemari</option>
                            <option value="">Ruang luas</option>
                        </select>
                </div>
                <div class="content-of-filters row tag" style="margin-top:30px">
                        <button class="btn col-md-11 btn-filter" >FILTER</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper col-md-9">
        <div id="content" class="row">
            <a href="{{url('video')}}">
                <div class="col-md-10 content-container" >
                    <div class="col-md-5 content-tumbnail">
                        <div class="content-img-container">
                            <img src="{{ asset('img/tidy-house-2.jpg') }}" width="100%" max-width="288" height="178">
                        </div>
                    </div>
                    <div class="col-md-7 content-desc">
                        <div class="content-desc-container col-md-12">
                            <div class="content-desc-title">
                                <p class="content-type"><b>VIDEO</b></p>
                                <h3>How to tidy up your bedroom in 5 mins</h3>
                                <p class="content-date">04.32 Minutes - 1M Views - 3 Days Ago</p>
                            </div>
                            <div class="content-description">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...
                            </div>  
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{ route('article') }}">
            <div class="col-md-10 content-container" >
                <div class="col-md-5 content-tumbnail">
                    <div class="content-img-container">
                        <img src="{{ asset('img/tidy-house.jpg') }}" width="100%" max-width="288" height="178">
                    </div>
                </div>
                <div class="col-md-7 content-desc">
                    <div class="content-desc-container col-md-12">
                        <div class="content-desc-title">
                            <p class="content-type"><b>ARTICLE</b></p>
                            <h3>How to tidy up your bedroom in 5 mins</h3>
                            <p class="content-date">1M Clicks - 3 Days Ago</p>
                        </div>
                        <div class="content-description">
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...
                        </div>  
                    </div>
                </div>
            </div>
            </a>
                <div class="col-md-10 content-container" >
                        <div class="col-md-5 content-tumbnail">
                            <div class="content-img-container">
                                <img src="{{ asset('img/tidy-house-2.jpg') }}" width="100%" max-width="288" height="178">
                            </div>
                        </div>
                        <div class="col-md-7 content-desc">
                            <div class="content-desc-container col-md-12">
                                <div class="content-desc-title">
                                    <p class="content-type"><b>VIDEO</b></p>
                                    <h3>How to tidy up your bedroom in 5 mins</h3>
                                    <p class="content-date">04.32 Minutes - 1M Views - 3 Days Ago</p>
                                </div>
                                <div class="content-description">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim...
                                </div>  
                            </div>
                        </div>
                    </div>       
        </div>
    </div>

</div>

@endsection

@section('additional-styles')
    <style>
        .btn-filter{
            background-color: #333844;
            color: white;
            border: 1px solid #232329;
        }

        .btn-filter:hover{
            background-color: #0f1629;
            color: white;
            border: 1px solid #232329;            
        }

        .filter-header{
            /* border-bottom: 1px solid white */
        }

        .filter-header-title{
            display:inline-block;
        }

        .filter-content{
            padding-left:20px;
        }

        .right, .left{
            margin-left:7px;
        }
        .filter-option{
            padding-top:5px;
            padding-bottom:5px;
            border:1px solid white;
            border-radius:5px;
            margin-top:5px;
            background-color:#6c717f;
        }

        .filter-option:hover{
            background-color: #333844;
            color:white;
            cursor:pointer;
            border:1px solid grey;
        }

        .opt-selected{
            background-color: #333844;
            color:white;
            cursor:pointer;
            border:1px solid grey;
        }

        .content-of-filters{
            margin-top:10px;
        }

        .filter-wrapper{
            color:white;
            padding-left: 10px;
            padding-right:10px;
            /* background-color:white; */
            margin-top:20px;
            height: 80vh;
            width: 15%;
            border-right: 1px solid white;
        }

        #filter-close-trigger{
            cursor: pointer;
        }

        .select2-multiple-results .select2-multiple-highlighted {
            background: red;
            color: #fff;
        }

        .tag{
            color:black;
        }
        
        .tag-title{
            color:white;
        }

        .filter-closed-text{
            width: 100%;
            display:none;
            font-size:1.2em;
        }

    </style>


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


        .content-desc-container{
            text-overflow: ellipsis;
        }
        .content-desc-title h3{
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

        .content-date{
            margin-top:0;
        }

        .content-type{
            background-color:white;
            color:black;
            display: inline-block;
            padding:1px;
            padding-left:3px;
            padding-right:3px;
            margin-bottom: 0;
            margin-top:5px;
        }

        .content-description{
            white-space: unset;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .kotakin{
            border:1px solid white;
        }

        .content-tumbnail{
            padding-left:0
        }

    </style>
@endsection

@section('additional-scripts')
    <script>
         $("#filter-close-trigger").click(function(){
            if($("#filter").hasClass("hidden")){
                $(".filter-wrapper").css("width","15%").css("background-color","unset");
                $("#filter").removeClass("hidden");
                $("#filter-close-title").removeClass("hidden")
                $(this).removeClass("fa-chevron-right").addClass("fa-times");
                $(".filter-closed-text").css("display","none");
            }else{
                $("#filter").addClass("hidden");
                $(".filter-wrapper").css("width","3%").css("background-color","#333844");
                $("#filter-close-title").addClass("hidden");
                $(this).removeClass("fa-times").addClass("fa-chevron-right");
                $(".filter-closed-text").css("display","block");
            }
         });

         $(".chosen-select").select2({width: "92%"}); 

         $(".filter-option").click(function(){
            if($(this).hasClass("opt-selected"))
            {
                $(this).removeClass("opt-selected");
            }else{
                $(this).addClass("opt-selected");
            }

         });

         $(".content-container").hover(function(){
            $(this).addClass("kotakin")
         });

         $(".content-container").mouseleave(function(){
            $(this).removeClass("kotakin")
         });
    </script>
@endsection