<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title>@yield('title')</title>
  @include('includes.style')

</head>

<body>
    @yield('content')
    @include('includes.script')
</body>

</html>