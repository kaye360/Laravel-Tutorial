<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ieblueg5">
  <title>Laragigs</title>
  <link rel="stylesheet" href="/laragigs/resources/css/app.css">
  <link 
    href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
    rel="stylesheet"
  />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          animation: {
            flash : 'flash 5s ease-in-out both',
          },
          keyframes: {
            flash: {
              '0%' : { 
                transform: 'translate(-50%, -100%)',
                opacity : '0',
              },
              '20%' : { 
                transform: 'translate(-50%, 0)',
                opacity : '1',
              },
              '90%' : {
                transform: 'translate(-50%, 0)',
                opacity : '1',
              },
              '100%' : {
                opacity : '0',
                display : 'none',
              },
            },
          },
        },
        fontFamily : {
          'sans': ['Poppins', 'Helvetica', 'sans-serif'],
        }
      }
    }
  </script>
</head>
<body>

<div class="px-8">

  <header class="flex justify-between items-center bg-white px-8 py-4">
    <x-layout.logo />
    <x-layout.nav />
  </header>

  <main>
    {{ $slot }}
  </main>

</div>
  
<x-layout.flash />

</body>
</html>