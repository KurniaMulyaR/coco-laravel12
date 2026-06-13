<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>COCO — Digital Agency @yield('title')</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            coco: {
              teal: '#1a4a5c',
              sky:  '#87ceeb',
              cream:'#f5f0eb',
              dark: '#0c2535',
            }
          },
          fontFamily: {
            playfair: ['"Playfair Display"', 'Georgia', 'serif'],
            dm:       ['"DM Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>
  @vite(['resources/css/style.css', 'resources/js/main.js', 'resources/css/animation.css', 'resources/css/marquee'])
  <!-- Custom CSS -->
</head>
    <body class="font-sans antialiased">
            @include('layouts.navigation-user')

            <!-- Page Content -->
            @yield('content')


            @include('components.footer')
    </body>
</html>
