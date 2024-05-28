<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @foreach ($header as $item)
  <title>{{ $item->companny_name }}</title> 
  @endforeach

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >


  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>





    @include('partials.header')
    <main>
        <article>
            @include('partials.hero')
            @include('partials.about')
            @include('partials.property')
            @include('partials.cta')
            @include('partials.contact')
        </article>
    </main>
    @include('partials.footer')


  <!-- 
    - custom js link
  -->
  <script src="{{ asset('js/script.js') }}"></script>
  <!-- <script src="./assets/js/script.js"></script> -->

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>