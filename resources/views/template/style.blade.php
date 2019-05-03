<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<!--external css-->
<link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
<style>

    body{
        background-color: #4a505f;
    }

    .black-bg{
        background-color:#333844;
        border-bottom: #333844;
    }

    #sidebar{
        background-color: #4a505f;
        margin-left:-210px;
    }

    ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus{
        background-color:#5a6275;
    }

    
    ul.sidebar-menu li a.active{
        background-color:#5a6275;
    }

    ul.top-menu li .logout{
        border: 1px solid #696969 !important;
        background-color: #4a505f;
    }

    #search-btn{
        background-color: #4a505f;
        border: none;
        color:white;
    }

    #search-input{
        background:#6c717f;
        border:1px solid grey;
        color:white;
    }

    #search-input::placeholder{
        color:white;
    }
    .wrapper{
        background-color:#4a505f;
    }

    .overlay{
        position: fixed; /* Sit on top of the page content */
        display:none;
        width: 100%; /* Full width (cover the whole page) */
        height: 100%; /* Full height (cover the whole page) */
        top: 60px; 
        left: 210px;
        right: 0;
        bottom: 0;
        background-color: rgba(0,0,0,0.2); /* Black background with opacity */
        z-index: 2;
    }
</style>