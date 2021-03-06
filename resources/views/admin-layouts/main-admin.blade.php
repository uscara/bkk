<!DOCTYPE Html>
<Html>
    <head>
        <meta charset="utf-8"></meta>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")Bangkok Smiles Admin</title>
        
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
        {!! Html::style("/css/font-awesome.min.css") !!}
        {!! Html::style("/css/admin-style.css") !!}
        @yield("specific_css")
        
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js"></script>
        {!! Html::script("/js/backend/admin-menu.js") !!}
        @yield("specific_js_head")
    </head>
    <body>
        @yield("body")
        
        <script>
            $(document).foundation();
        </script>
        @yield("specific_js_body")
    </body>
</Html>