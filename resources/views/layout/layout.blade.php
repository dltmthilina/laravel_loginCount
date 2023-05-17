<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="/dashboard.css" rel="stylesheet" />
        <link href="/app.css" rel="stylesheet" />

    </head>

    <body>
        <header>
            <h1>Admin Dashboard</h1>
          </header>
          <nav>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="/admin/create_user">Create User</a></li>
            </ul>
            <ul>
              <li><a href="/admin/create_user">Log Out</a></li>
            </ul>
          </nav>
          <section class="content">
            @yield('content')
          </section> 
    </body>
</html>