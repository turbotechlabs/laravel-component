    @props([
        "description"   => "",
        "keywords"      => [],
        "title"         => "",
        "image"         => "",
        "canonical"     => ""
    ])
    @php
        $words = "";
        foreach ($keywords as $key) {
            $words .= $key.', ';
        }
    @endphp
    
    
    <title>{{ $title }}</title>
    
    {{-- SEO Meta Tags --}}
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ substr($words, 0, -2)}}">
    
    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $image }}">
    
    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    
    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $canonical }}">
