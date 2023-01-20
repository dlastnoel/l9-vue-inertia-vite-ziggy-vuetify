<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- ziggy routing directive --}}
    @routes

    {{-- vite directive --}}
    @vite('resources/js/app.js') 

    {{-- inertia directive --}}
    @inertiaHead
  </head>

  <body class="font-sans antialiased">
    @inertia
  </body>
</html>