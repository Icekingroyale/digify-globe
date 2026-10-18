<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta name="description" content="Digify Globe Academy is coming soon.">
        <meta name="theme-color" content="#17da57">

        <title>Digify Globe Academy — Coming Soon</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
        <link rel="icon" href="{{ asset('images/icon-512.png') }}" type="image/png">
        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=sora:400,600,700&display=swap" rel="stylesheet">

        <style>
            :root {
                --brand-green: #17da57;
                --brand-dark: #094d1c;
                --brand-mint: #97efb3;
                --background: #ffffff;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
            }

            html,
            body {
                overflow-x: hidden;
            }

            body {
                position: relative;
                min-height: 100vh;
                min-height: 100dvh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 2rem 1rem 5rem;
                background: var(--background);
                color: var(--brand-dark);
                font-family: "Sora", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif;
                text-align: center;
                -webkit-font-smoothing: antialiased;
            }

            .ring {
                position: fixed;
                z-index: 0;
                aspect-ratio: 1;
                border-radius: 50%;
                pointer-events: none;
            }

            .ring--mint {
                top: -38vmin;
                left: -38vmin;
                width: 76vmin;
                border: 9vmin solid var(--brand-mint);
            }

            .ring--green {
                right: -22vmin;
                bottom: -22vmin;
                width: 44vmin;
                border: 4vmin solid var(--brand-green);
                opacity: 0.18;
            }

            main {
                position: relative;
                z-index: 1;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1.75rem;
                max-width: 40rem;
            }

            .logo {
                width: min(300px, 72vw);
                height: auto;
            }

            .badge {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                padding: 0.4rem 1rem;
                border-radius: 999px;
                background: var(--brand-green);
                color: var(--brand-dark);
                font-size: 0.75rem;
                font-weight: 600;
                letter-spacing: 0.14em;
                text-transform: uppercase;
            }

            .badge::before {
                content: "";
                width: 0.5rem;
                height: 0.5rem;
                border-radius: 50%;
                background: var(--brand-dark);
                animation: pulse 1.8s ease-in-out infinite;
            }

            h1 {
                font-size: clamp(2rem, 6vw, 3.5rem);
                font-weight: 700;
                letter-spacing: -0.03em;
                line-height: 1.1;
                text-wrap: balance;
            }

            p {
                text-wrap: pretty;
                max-width: 30rem;
                color: color-mix(in srgb, var(--brand-dark) 78%, transparent);
                font-size: 1.0625rem;
                line-height: 1.7;
            }

            footer {
                position: absolute;
                z-index: 1;
                bottom: 1.5rem;
                color: color-mix(in srgb, var(--brand-dark) 65%, transparent);
                font-size: 0.8125rem;
            }

            @keyframes pulse {
                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.25;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                .badge::before {
                    animation: none;
                }
            }
        </style>
    </head>
    <body>
        <div class="ring ring--mint" aria-hidden="true"></div>
        <div class="ring ring--green" aria-hidden="true"></div>

        <main>
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="Digify Globe Academy" width="474" height="242">
            <span class="badge">Launching soon</span>
            <h1>Digify Globe is coming soon</h1>
            <p>We're building a new home for Digify Globe Academy. Check back shortly — something great is on the way.</p>
        </main>

        <footer>&copy; {{ date('Y') }} Digify Globe Academy</footer>
    </body>
</html>
