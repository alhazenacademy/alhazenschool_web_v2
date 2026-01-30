@props(['title','description'=>null,'image'=>null])

<meta property="og:title" content="{{ $title }}">
@if($description)<meta property="og:description" content="{{ $description }}">@endif
<meta property="og:type" content="website">
<meta property="og:locale" content="id_ID">
<meta property="og:url" content="{{ url()->current() }}">
@if($image)<meta property="og:image" content="{{ $image }}">@endif
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description"
  content="{{ Str::limit(strip_tags($description), 150) }}">
<meta name="twitter:image" content="{{ $image }}">