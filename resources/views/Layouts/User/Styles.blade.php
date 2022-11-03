<script src="{{asset('static/user/js/plugin/webfont/webfont.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('static/user/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('static/user/css/atlantis2.css')}}">
<link rel="stylesheet" href="{{asset('static/user/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('static/user/css/demo.css')}}">
</head>
<style>
	.bg1{
		width: 100%;
		height: 430px;
		background-color: rgb(23, 20, 32);
	}
	.square{
		transition-property: box-shadow, transform;
		transition-duration: 350ms;
		transition-timing-function: ease;
  
    	box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.24);
  	}
  
  	.square:is(:hover, :focus) {
		box-shadow: 0px 8px 10px 1px rgba(0, 0, 0, 0.2);
		transform: translateY(-8px);
	}
    .size{
        font-size: 27pt
    }
</style>