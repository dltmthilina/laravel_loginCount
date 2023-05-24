<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="/app.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <!-- Styles -->
        
    </head>
    <body>
      
        <div  class="loginpage">
            <form method="POST" action="/">
                @csrf
                <h1>Login Page</h1>
                <div class="inputbox">
                    <label for="name" > Name</label>
                    <input required type="text" name="name">
                </div>

                <div class="inputbox">
                    <label for="name" >Password</label>
                    <input required type="text" name="password">
                </div>
                <input class="btn btn-primary" type="submit" value="Log In">
            </form>
        </div>
    </body>
</html>
