<html>
    <head>
        <title>Flavory - Home</title>
    </head>
    <body>
        <h1>Homepage of Flavory</h1>
        @if(Session::has('username'))
            hello {{ Session::get('username') }}

            @if(file_exists('storage/profile-pic/'.Session::get('username').'.jpg'))
                <img src="{!! asset('storage/profile-pic/'.Session::get('username').'.jpg?lastmod'.rand()) !!}" alt="This is you " width="500">
            @else
                <img src="defaultpp.png" alt="This is you" width="500">
            @endif
        @endif

        @if(!Session::has('username'))
            hello Guest
        @endif

        @if(Session::has('news'))
            {{ Session::get('news') }}
        @endif
        <input type="hidden" value="<?php echo rand() ?>">
        
    </body>
</html>