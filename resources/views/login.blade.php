<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="/app.css" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body>
      
        <div  class="loginpage">
         
            <header>
                <h1>Login Page</h1>
              </header>
            <form method="POST" action="/">
                @csrf
                <div class="inputbox">
                    <label for="name" > Name</label>
                    <input required type="text" name="name">
                </div>
              {{--   <div class="inputbox">
                    <label for="name" >NIC</label>
                    <input  type="text" name="nic">
                </div>
                <div class="inputbox">
                    <label for="name" >Phone Number</label>
                    <input  type="text" name="contact">
                </div> --}}
                <div class="inputbox">
                    <label for="name" >Password</label>
                    <input required type="text" name="password">
                </div>
                <input type="submit" value="Log In">
            </form>
        </div>
    </body>
</html>
