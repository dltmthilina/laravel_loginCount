<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="/dashboard.css" rel="stylesheet" />
    </head>

    <body>
        <header>
            <h1>{{ session('userName') }}</h1>
          </header>
          <nav>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
            <ul>
              <li><a href="/logout">Log Out</a></li>
            </ul>
          </nav>

            <section>
              <form method="POST" action="/pdf/download">
                @csrf
                <button type="submit">Download PDF</button>
              </form>
            </section> 
    </body>
</html>