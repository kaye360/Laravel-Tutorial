<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ieblueg5">
  <title>Laragigs</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        fontFamily : {
          'sans': ['Poppins', 'Helvetica', 'sans-serif']
        }
      }
    }
  </script>
</head>
<body>

<div class="px-8">

  <header class="flex justify-between bg-blue-300 px-8 py-4">
    <h1 class="font-bold">
      <a href="/laragigs/public" class="text-blue-900">
        LaraGigs
      </a>
    </h1>

    <nav>
      <ul class="flex align-center gap-4">
        <li><a href="#" class="text-blue-800 hover:text-gray-700 font-bold">Link</a></li>
        <li><a href="#" class="text-blue-800 hover:text-gray-700 font-bold">Link</a></li>
        <li><a href="#" class="text-blue-800 hover:text-gray-700 font-bold">Link</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

</div>
  
</body>
</html>