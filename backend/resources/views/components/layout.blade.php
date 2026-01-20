<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Instrument Sans', 'sans-serif'],
                    },
                    colors: {
                        border: "hsl(var(--border))",
                        input: "hsl(var(--input))",
                        ring: "hsl(var(--ring))",
                        background: "hsl(var(--background))",
                        foreground: "hsl(var(--foreground))",
                        primary: {
                            DEFAULT: "hsl(var(--primary))",
                            foreground: "hsl(var(--primary-foreground))",
                        },
                        secondary: {
                            DEFAULT: "hsl(var(--secondary))",
                            foreground: "hsl(var(--secondary-foreground))",
                        },
                        destructive: {
                            DEFAULT: "hsl(var(--destructive))",
                            foreground: "hsl(var(--destructive-foreground))",
                        },
                        muted: {
                            DEFAULT: "hsl(var(--muted))",
                            foreground: "hsl(var(--muted-foreground))",
                        },
                        accent: {
                            DEFAULT: "hsl(var(--accent))",
                            foreground: "hsl(var(--accent-foreground))",
                        },
                        popover: {
                            DEFAULT: "hsl(var(--popover))",
                            foreground: "hsl(var(--popover-foreground))",
                        },
                        card: {
                            DEFAULT: "hsl(var(--card))",
                            foreground: "hsl(var(--card-foreground))",
                        },
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
                :root {
                    --background: 0 0% 100%;
                    --foreground: 222.2 84% 4.9%;
                    --card: 0 0% 100%;
                    --card-foreground: 222.2 84% 4.9%;
                    --popover: 0 0% 100%;
                    --popover-foreground: 222.2 84% 4.9%;
                    --primary: 221.2 83.2% 53.3%;
                    --primary-foreground: 210 40% 98%;
                    --secondary: 210 40% 96.1%;
                    --secondary-foreground: 222.2 47.4% 11.2%;
                    --muted: 210 40% 96.1%;
                    --muted-foreground: 215.4 16.3% 46.9%;
                    --accent: 210 40% 96.1%;
                    --accent-foreground: 222.2 47.4% 11.2%;
                    --destructive: 0 84.2% 60.2%;
                    --destructive-foreground: 210 40% 98%;
                    --border: 214.3 31.8% 91.4%;
                    --input: 214.3 31.8% 91.4%;
                    --ring: 221.2 83.2% 53.3%;
                    --radius: 0.5rem;
                }
            }
        </style>
</head>

<body class="bg-background text-foreground font-sans min-h-screen pt-14 selection:bg-primary/20 selection:text-primary">
    <!-- Navigation -->
    <nav
        class="fixed top-0 left-0 right-0 z-50 border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
        <div class="flex h-14 items-center justify-center max-w-screen-xl mx-auto px-4 md:px-8">
            <ul class="flex items-center gap-6">
                <x-link-item href="/" :active="Route::currentRouteName() === 'homepage'">HomePage</x-link-item>
                <x-link-item href="/projects" :active="Route::currentRouteName() === 'projects'">Projects</x-link-item>
                <x-link-item href="/recipes" :active="Route::currentRouteName() === 'projects'">Recipes</x-link-item>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-screen-xl mx-auto px-4 md:px-8 py-8 animate-in fade-in slide-in-from-bottom-4 duration-500">
        {{ $slot }}
    </main>
</body>

</html>