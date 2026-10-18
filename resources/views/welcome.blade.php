<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex">
        <meta name="description" content="Our new website is coming soon.">

        <title>Coming Soon</title>

        <style>
            :root {
                --background: #fdfdfc;
                --foreground: #1b1b18;
                --muted: #706f6c;
                --rule: #e3e3e0;
            }

            @media (prefers-color-scheme: dark) {
                :root {
                    --background: #0a0a0a;
                    --foreground: #ededec;
                    --muted: #a1a09a;
                    --rule: #3e3e3a;
                }
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
                margin: 0;
            }

            body {
                min-height: 100vh;
                min-height: 100dvh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                gap: 1.5rem;
                padding: 1.5rem;
                background: var(--background);
                color: var(--foreground);
                font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                text-align: center;
                -webkit-font-smoothing: antialiased;
            }

            h1 {
                font-size: clamp(2.25rem, 6vw, 4rem);
                font-weight: 600;
                letter-spacing: -0.03em;
                line-height: 1.1;
            }

            .rule {
                width: 3rem;
                height: 1px;
                background: var(--rule);
            }

            p {
                max-width: 32rem;
                color: var(--muted);
                font-size: 1.0625rem;
                line-height: 1.6;
            }

            footer {
                position: absolute;
                bottom: 1.5rem;
                color: var(--muted);
                font-size: 0.8125rem;
            }
        </style>
    </head>
    <body>
        <main style="display: contents;">
            <h1>Website coming soon</h1>
            <div class="rule" aria-hidden="true"></div>
            <p>We're putting the finishing touches on something new. Please check back shortly.</p>
        </main>

        <footer>&copy; {{ date('Y') }}</footer>
    </body>
</html>
