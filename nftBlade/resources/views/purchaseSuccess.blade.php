<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/purchaseSuccess.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Pixel NFTArt|Success</title>

    <!-- Fonts -->
</head>

<body>
    @include('includes.navbar')
    <div class='successPurchase'>
        {{-- <canvas id="confetti"></canvas> --}}
        <a href="{{ url('/explore') }}">
            <x-heroicon-o-arrow-left id="svg" />
        </a>
        <p>Congratulations</p>
        <p>You have made your offer</p>
    </div>

    @include('includes.footer')
    {{-- <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@^1.0.1"></script>
        <script>
            function fireConfetti() {
                var confettiSettings = {
                    "target": "confetti",
                    "max": "80",
                    "size": "1.5",
                    "animate": true,
                    "props": ["circle", "square", "triangle", "line"],
                    "colors": [[165,104,246],[230,61,135],[0,199,228],[253,214,126]],
                    "clock": "25",
                    "rotate": true,
                    "start_from_edge": true,
                    "respawn": true
                };
                var confetti = new ConfettiGenerator(confettiSettings);
                confetti.render();
            }
        </script> --}}
</body>

</html>
