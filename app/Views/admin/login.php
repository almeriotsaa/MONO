<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO Admin Login</title>
    <!-- Tailwind CSS with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Fonts: Inter for UI, Bodoni Moda for Brand Logo -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;family=Bodoni+Moda:opsz,wght@6..96,400;700&amp;display=swap" rel="stylesheet" />
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#16169c",
                        "background-light": "#ffffff", // Overridden for stark white luxury feel
                        "background-dark": "#0a0a0a",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"],
                        "serif-logo": ["'Bodoni Moda'", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .mono-logo {
            font-family: 'Bodoni Moda', serif;
            letter-spacing: 0.15em;
        }

        input::placeholder {
            color: #a1a1aa;
            font-weight: 300;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-black dark:text-white transition-colors duration-300">
    <div class="relative flex min-h-screen w-full flex-col items-center justify-center overflow-x-hidden p-6">
        <!-- Header / Logo -->
        <div class="mb-16 text-center">
            <h1 class="mono-logo text-5xl md:text-6xl font-bold uppercase tracking-[0.2em] text-black dark:text-white">
                MONO
            </h1>
            <p class="mt-4 text-[10px] uppercase tracking-[0.4em] text-zinc-400 font-medium">
                Administrative Portal
            </p>
        </div>
        <!-- Login Container -->
        <div class="w-full max-w-[360px] flex flex-col gap-8">
            <form action="#" class="flex flex-col gap-6">
                <!-- Email Field -->
                <div class="flex flex-col gap-2">
                    <label class="text-[10px] font-semibold uppercase tracking-[0.1em] text-zinc-500" for="email">
                        Email Address
                    </label>
                    <input class="w-full bg-transparent border-t-0 border-x-0 border-b border-zinc-200 dark:border-zinc-800 p-0 py-3 text-sm font-light focus:ring-0 focus:border-black dark:focus:border-white transition-colors duration-200 placeholder:text-zinc-300" id="email" placeholder="admin@mono.com" type="email" />
                </div>
                <!-- Password Field -->
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between items-end">
                        <label class="text-[10px] font-semibold uppercase tracking-[0.1em] text-zinc-500" for="password">
                            Password
                        </label>
                    </div>
                    <input class="w-full bg-transparent border-t-0 border-x-0 border-b border-zinc-200 dark:border-zinc-800 p-0 py-3 text-sm font-light focus:ring-0 focus:border-black dark:focus:border-white transition-colors duration-200 placeholder:text-zinc-300" id="password" placeholder="••••••••" type="password" />
                </div>
                <!-- Action Button -->
                <div class="mt-4">
                    <button class="w-full h-12 bg-black dark:bg-white text-white dark:text-black text-[11px] font-bold uppercase tracking-[0.2em] hover:bg-zinc-800 dark:hover:bg-zinc-200 transition-all duration-300">
                        Sign In
                    </button>
                </div>
            </form>
            <!-- Secondary Actions -->
            <div class="flex flex-col items-center gap-4">
                <a class="text-[10px] uppercase tracking-wider text-zinc-400 hover:text-black dark:hover:text-white transition-colors" href="#">
                    Forgot Password?
                </a>
                <div class="w-8 h-[1px] bg-zinc-100 dark:bg-zinc-900 my-2"></div>
                <p class="text-[9px] text-zinc-300 dark:text-zinc-700 uppercase tracking-widest text-center leading-relaxed">
                    Access strictly restricted to <br /> authorized personnel only
                </p>
            </div>
        </div>
        <!-- Mode Toggle (Subtle floating element) -->
        <div class="fixed top-8 right-8">
            <button class="p-2 text-zinc-300 hover:text-black dark:hover:text-white transition-colors" onclick="document.documentElement.classList.toggle('dark')">
                <span class="material-symbols-outlined text-[20px]">
                    contrast
                </span>
            </button>
        </div>
    </div>
    <!-- Background Pattern - Minimal visual interest without breaking monochrome -->
    <div class="fixed inset-0 -z-10 pointer-events-none opacity-[0.03] dark:opacity-[0.05]">
        <div class="absolute inset-0" data-alt="Subtle dot grid background pattern" style="background-image: radial-gradient(#000 0.5px, transparent 0.5px); background-size: 24px 24px;"></div>
    </div>
</body>

</html>