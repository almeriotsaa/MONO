<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO Admin - Customers</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&amp;family=Bodoni+Moda:ital,wght@0,400..900;1,400..900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "mono-black": "#000000",
                        "mono-gray": "#f2f2f2",
                        "mono-border": "#e5e5e5",
                        "mono-soft": "#7a7a7a",
                        "mono-light-gray": "#F9F9F9"
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"],
                        "serif": ["Bodoni Moda", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0px",
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-white text-mono-black font-sans antialiased;
            }
        }
        .tracking-widest-xl {
            letter-spacing: 0.25em;
        }
        .serif-italic {
            font-style: italic;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 20;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <div class="flex min-h-screen">
        <aside class="w-20 lg:w-64 border-r border-mono-border h-screen sticky top-0 flex flex-col bg-white">
            <div class="p-8 border-b border-mono-border flex items-center gap-3">
                <div class="h-8 w-8 bg-mono-black flex items-center justify-center text-white font-bold text-xl">M</div>
                <div class="hidden lg:flex flex-col">
                    <span class="text-sm font-bold tracking-widest leading-none">MONO</span>
                    <span class="text-[10px] text-gray-400 font-medium tracking-tighter uppercase mt-1">Management</span>
                </div>
            </div>
            <nav class="flex-1 px-4 py-8 space-y-2">
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg">dashboard</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Overview</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg">shopping_bag</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Orders</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg">inventory_2</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Products</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 bg-mono-black text-white" href="#">
                    <span class="material-symbols-outlined text-lg">group</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Customers</span>
                </a>
                <div class="pt-8 pb-4">
                    <span class="hidden lg:block px-4 text-[9px] text-gray-400 font-bold tracking-widest-xl uppercase mb-2">System</span>
                </div>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors" href="#">
                    <span class="material-symbols-outlined text-lg">settings</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Settings</span>
                </a>
            </nav>
            <div class="p-6 border-t border-mono-border">
                <div class="flex items-center gap-3">
                    <div class="size-10 bg-mono-gray border border-mono-border flex items-center justify-center overflow-hidden">
                        <img class="w-full h-full object-cover" data-alt="Admin user profile portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDu9yYRzPr4SarL46pB-I7T69GDkObY1QNijSW-6Go6qEqya9zsc5Yrf19IOASVlCAINBKDJcwzP3hHC7Ufwo_Z_6ddgXyTxi6a61OHZ67ZCRQBH-reI_md7wXsqllGHmEuCes7QVA_Nz9obF44tIwLCcUw6wdvRXr9K2-ah9wki_QFQrmuzdmS7lf_oiB2uILS63ck_SHCEga0gXWpe3lRqI_zs-uYYfQ1bhkUkfGDPF6QBZLIMRxbW-K4wCuDY8owflHomibE2_c" />
                    </div>
                    <div class="hidden lg:block">
                        <p class="text-[11px] font-bold uppercase tracking-wider">A. Harrison</p>
                        <p class="text-[9px] text-gray-500 uppercase">Administrator</p>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-20 border-b border-mono-border flex items-center justify-between px-8 bg-white/80 backdrop-blur-md sticky top-0 z-10">
                <div class="flex flex-col">
                    <h1 class="text-xl font-light tracking-tight text-mono-black">Customers</h1>
                    <nav class="flex text-[10px] text-gray-400 uppercase tracking-widest space-x-2">
                        <span>Admin</span>
                        <span>/</span>
                        <span class="text-mono-black">Customers</span>
                    </nav>
                </div>
                <div class="flex items-center gap-6">
                    <div class="relative hidden md:block">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400">search</span>
                        <input class="pl-10 pr-4 py-2 border border-mono-border text-[10px] font-bold tracking-widest uppercase focus:outline-none focus:border-mono-black w-64" placeholder="SEARCH CUSTOMERS..." type="text" />
                    </div>
                    <button class="flex items-center gap-2 px-6 py-3 bg-mono-black text-white text-[11px] font-bold uppercase tracking-widest hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span>
                        Add New Customer
                    </button>
                </div>
            </header>
            <div class="p-12 max-w-7xl mx-auto w-full">
                <section class="bg-white">
                    <div class="mb-10 flex items-center justify-between">
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl border-b-2 border-mono-black pb-1">All Registered Users (842)</h2>
                        <div class="flex gap-6">
                            <button class="text-[10px] font-bold uppercase tracking-widest text-mono-soft hover:text-mono-black transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">filter_list</span> FILTER
                            </button>
                            <button class="text-[10px] font-bold uppercase tracking-widest text-mono-soft hover:text-mono-black transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-sm">download</span> EXPORT CSV
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-mono-black">
                                    <th class="py-6 text-[10px] font-bold uppercase tracking-widest text-mono-soft w-1/3">Name</th>
                                    <th class="py-6 text-[10px] font-bold uppercase tracking-widest text-mono-soft">Email</th>
                                    <th class="py-6 text-[10px] font-bold uppercase tracking-widest text-mono-soft">Total Orders</th>
                                    <th class="py-6 text-[10px] font-bold uppercase tracking-widest text-mono-soft text-right">Lifetime Value</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-mono-border">
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">JD</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Julianne Deville</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">j.deville@studio-mono.com</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">14 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$12,450.00</td>
                                </tr>
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">RK</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Rainer Koch</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">r.koch@arch-berlin.de</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">08 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$5,120.50</td>
                                </tr>
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">ML</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Marc Laurent</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">m.laurent@vogue.fr</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">21 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$32,800.00</td>
                                </tr>
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">ES</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Elena Sterling</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">e.sterling@independent.co.uk</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">05 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$4,220.00</td>
                                </tr>
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">TH</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Thomas Haze</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">haze.thomas@minimalist.com</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">11 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$9,890.00</td>
                                </tr>
                                <tr class="hover:bg-mono-light-gray transition-colors group cursor-pointer">
                                    <td class="py-8">
                                        <div class="flex items-center gap-4">
                                            <div class="size-10 bg-mono-gray flex items-center justify-center text-[10px] font-bold grayscale border border-mono-border">AO</div>
                                            <span class="text-sm font-serif font-normal tracking-tight">Amélie Ono</span>
                                        </div>
                                    </td>
                                    <td class="py-8 text-xs font-medium text-mono-soft group-hover:text-mono-black transition-colors">a.ono@tokyo.design</td>
                                    <td class="py-8 text-xs font-bold tracking-widest uppercase">32 Orders</td>
                                    <td class="py-8 text-right text-sm font-serif italic">$45,100.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-12 flex items-center justify-between border-t border-mono-border pt-8">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-mono-soft">Showing 1-10 of 842 Customers</p>
                        <div class="flex gap-4">
                            <button class="size-10 border border-mono-border flex items-center justify-center hover:bg-mono-black hover:text-white transition-all">
                                <span class="material-symbols-outlined text-lg">chevron_left</span>
                            </button>
                            <button class="size-10 border border-mono-black flex items-center justify-center bg-mono-black text-white">
                                <span class="text-[10px] font-bold">01</span>
                            </button>
                            <button class="size-10 border border-mono-border flex items-center justify-center hover:border-mono-black transition-all">
                                <span class="text-[10px] font-bold">02</span>
                            </button>
                            <button class="size-10 border border-mono-border flex items-center justify-center hover:bg-mono-black hover:text-white transition-all">
                                <span class="material-symbols-outlined text-lg">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="mt-auto border-t border-mono-border p-10 flex justify-between items-center text-[9px] text-mono-soft font-bold uppercase tracking-widest">
                <span>© 2024 MONO STUDIO — INTERNATIONAL</span>
                <div class="flex gap-8">
                    <a class="hover:text-mono-black transition-colors" href="#">Legal</a>
                    <a class="hover:text-mono-black transition-colors" href="#">Data Protection</a>
                    <a class="hover:text-mono-black transition-colors" href="#">Help Center</a>
                </div>
            </footer>
        </main>
    </div>

</body>

</html>