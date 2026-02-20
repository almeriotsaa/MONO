<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO Admin Product Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#000000",
                        "background-light": "#ffffff",
                        "mono-black": "#000000",
                        "mono-gray": "#f2f2f2",
                        "mono-border": "#e5e5e5",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                font-family: 'Manrope', sans-serif;
                -webkit-font-smoothing: antialiased;
            }
        }
        .tracking-widest-xl {
            letter-spacing: 0.25em;
        }
        .thin-border {
            border-width: 0.5px;
        }
    </style>
</head>

<body class="bg-background-light text-mono-black font-display overflow-x-hidden">
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
                <a class="flex items-center gap-4 px-4 py-3 bg-mono-black text-white" href="#">
                    <span class="material-symbols-outlined text-lg">inventory_2</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Products</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors" href="#">
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
                    <h1 class="text-xl font-light tracking-tight text-mono-black">Products</h1>
                    <nav class="flex text-[10px] text-gray-400 uppercase tracking-widest space-x-2">
                        <span>Inventory</span>
                        <span>/</span>
                        <span class="text-mono-black">Collection 2024</span>
                    </nav>
                </div>
                <div class="flex items-center gap-6">
                    <div class="relative hidden md:block">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400">search</span>
                        <input class="pl-10 pr-4 py-2 border border-mono-border text-[10px] font-bold tracking-widest uppercase focus:outline-none focus:border-mono-black w-64" placeholder="SEARCH PRODUCTS..." type="text" />
                    </div>
                    <button class="flex items-center gap-2 px-6 py-3 bg-mono-black text-white text-[11px] font-bold uppercase tracking-widest hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span>
                        Add New Product
                    </button>
                </div>
            </header>
            <div class="p-8 lg:p-12 space-y-8 max-w-7xl mx-auto w-full">
                <div class="flex flex-wrap items-center justify-between gap-4 border-b border-mono-border pb-6">
                    <div class="flex gap-8">
                        <button class="text-[11px] font-bold uppercase tracking-widest border-b border-mono-black pb-1">All Products (124)</button>
                        <button class="text-[11px] font-bold uppercase tracking-widest text-gray-400 hover:text-mono-black transition-colors">Active</button>
                        <button class="text-[11px] font-bold uppercase tracking-widest text-gray-400 hover:text-mono-black transition-colors">Archived</button>
                        <button class="text-[11px] font-bold uppercase tracking-widest text-gray-400 hover:text-mono-black transition-colors">Out of Stock</button>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="flex items-center gap-2 px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:border-mono-black">
                            <span class="material-symbols-outlined text-sm">filter_list</span>
                            Filter
                        </button>
                        <button class="flex items-center gap-2 px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:border-mono-black">
                            <span class="material-symbols-outlined text-sm">sort</span>
                            Sort
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-mono-black">
                                <th class="py-5 w-16">
                                    <input class="border-mono-border text-mono-black focus:ring-0 rounded-none" type="checkbox" />
                                </th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Thumbnail</th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Product Name</th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">SKU</th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Stock Level</th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Price</th>
                                <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-mono-border">
                            <tr class="hover:bg-mono-gray/30 transition-colors group">
                                <td class="py-6">
                                    <input class="border-mono-border text-mono-black focus:ring-0 rounded-none" type="checkbox" />
                                </td>
                                <td class="py-6">
                                    <div class="size-16 bg-mono-gray border border-mono-border overflow-hidden grayscale hover:grayscale-0 transition-all">
                                        <img alt="Product" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEUnaB0tdLJQVj3tdjMIWZTqjjVdlkoeGRY2PoBwHHDbNU_cRd3p4dxQPz5shGDKfpJh2Hy8RjrR1phduMMKsFPzIszj7ZVNvmpJcJ9bwwwcypz5YRE00dzoE9XFiwT7jTPbG0Kg13Stnfso7v3mapBDO7cjdvLckQ4n9B1w6sN_g4felunELAbLAvu-Nt4SECffsLtHL2DthscX7_9VVFSF9uPof7T79_ocgL4DRla47fkjfdU6biQ75RCmd8PB7YmhgcD6CpJZ8" />
                                    </div>
                                </td>
                                <td class="py-6">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold uppercase tracking-wider">Minimalist Silk Coat</span>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-tighter mt-1">Outerwear / Black</span>
                                    </div>
                                </td>
                                <td class="py-6 text-[11px] font-medium tracking-widest">MN-CT-001</td>
                                <td class="py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="size-1.5 bg-green-500 rounded-full"></span>
                                        <span class="text-[11px] font-bold uppercase tracking-widest">42 In Stock</span>
                                    </div>
                                </td>
                                <td class="py-6 text-sm font-medium tracking-tight">$1,250.00</td>
                                <td class="py-6 text-right">
                                    <div class="flex items-center justify-end gap-4">
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">edit</button>
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">more_vert</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-mono-gray/30 transition-colors group">
                                <td class="py-6">
                                    <input class="border-mono-border text-mono-black focus:ring-0 rounded-none" type="checkbox" />
                                </td>
                                <td class="py-6">
                                    <div class="size-16 bg-mono-gray border border-mono-border overflow-hidden grayscale hover:grayscale-0 transition-all">
                                        <img alt="Product" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQUNJ0zhqsAixpKXoxKa1f80tOQ-_BPuXDUfXXMPp773VDO1_4JZ-BBWm3TytBM7Rc-SNy7PohUHUiW__a6llAZiDkcHexm15MrSUizGtYDLB6LEfaZqijn8QgSRIDIyq8h9aYc9hmTxZBXSY5hRlNMhVBY8OMi9kKfuo_HP_IgjXfQSa7PS4SjWtW5GZsuiW2yMyEopE69tBQoUK6eI5rDRwI9lBI4hwxbvmudqN36LH_DBBct-vsQ_DBdRD7T_RA0QNG00cV1Ts" />
                                    </div>
                                </td>
                                <td class="py-6">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold uppercase tracking-wider">Raw Hem Denim</span>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-tighter mt-1">Trousers / Indigo</span>
                                    </div>
                                </td>
                                <td class="py-6 text-[11px] font-medium tracking-widest">MN-DN-012</td>
                                <td class="py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="size-1.5 bg-orange-400 rounded-full"></span>
                                        <span class="text-[11px] font-bold uppercase tracking-widest">8 In Stock</span>
                                    </div>
                                </td>
                                <td class="py-6 text-sm font-medium tracking-tight">$420.00</td>
                                <td class="py-6 text-right">
                                    <div class="flex items-center justify-end gap-4">
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">edit</button>
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">more_vert</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-mono-gray/30 transition-colors group">
                                <td class="py-6">
                                    <input class="border-mono-border text-mono-black focus:ring-0 rounded-none" type="checkbox" />
                                </td>
                                <td class="py-6">
                                    <div class="size-16 bg-mono-gray border border-mono-border overflow-hidden grayscale hover:grayscale-0 transition-all">
                                        <img alt="Product" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCU-tihLEVHIAZFlOFdOzmHvgQHxI_1iObY-V3giVmxGfM-7fZk-PrOJQks3768C5zO9o-_aZ2yhzDX2HTjlgJZFQwYahZtvWmk7mDBVPx465YQ_vAOBKxsLUEzUFYUd3rn-CcntWryAnHw1bTNtPzUz5ghosTqCNFnRxECbj8RQ8GC0me2jMh-k0PJrhYrayJ1FDyWTN4KSfZlM3qxf7YKUIH9Thf9wQkBmxcyJewMFS9FGH9AUmMQa-UW-C9xsF0Z_rCncgIydl8" />
                                    </div>
                                </td>
                                <td class="py-6">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold uppercase tracking-wider">Architectural Blazer</span>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-tighter mt-1">Outerwear / Ash Grey</span>
                                    </div>
                                </td>
                                <td class="py-6 text-[11px] font-medium tracking-widest">MN-BL-089</td>
                                <td class="py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="size-1.5 bg-mono-black rounded-full"></span>
                                        <span class="text-[11px] font-bold uppercase tracking-widest">Out of Stock</span>
                                    </div>
                                </td>
                                <td class="py-6 text-sm font-medium tracking-tight">$890.00</td>
                                <td class="py-6 text-right">
                                    <div class="flex items-center justify-end gap-4">
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">edit</button>
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">more_vert</button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-mono-gray/30 transition-colors group">
                                <td class="py-6">
                                    <input class="border-mono-border text-mono-black focus:ring-0 rounded-none" type="checkbox" />
                                </td>
                                <td class="py-6">
                                    <div class="size-16 bg-mono-gray border border-mono-border overflow-hidden grayscale hover:grayscale-0 transition-all">
                                        <img alt="Product" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhu4u4cg2XZ8JCWkjYt4A0JOBMoAkL0oaOGR8vYnlohHRxwXWcoP3uvqjYosxh7_pvGiv2mW0A11ry3s5tw73tQ0h76bccpu3PNZcgPIBbCpEZ1y7SaoFYGaup9Ku0zy8gfe4gaeMCHayi57IDa5rk3R7ZHdaJCuR1gNgb6CjMVBO4Dv-modQtuRxcIKRqV69aZ4c6S0wpCfUx830v03xpuVeFsd6_sVdyFZZK-isupRTJ2tiKRmmY4HkC2AwN5P2xtvAhvWW6G_U" />
                                    </div>
                                </td>
                                <td class="py-6">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-bold uppercase tracking-wider">Essential Crew Neck</span>
                                        <span class="text-[10px] text-gray-400 uppercase tracking-tighter mt-1">Tops / White</span>
                                    </div>
                                </td>
                                <td class="py-6 text-[11px] font-medium tracking-widest">MN-TS-044</td>
                                <td class="py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="size-1.5 bg-green-500 rounded-full"></span>
                                        <span class="text-[11px] font-bold uppercase tracking-widest">128 In Stock</span>
                                    </div>
                                </td>
                                <td class="py-6 text-sm font-medium tracking-tight">$180.00</td>
                                <td class="py-6 text-right">
                                    <div class="flex items-center justify-end gap-4">
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">edit</button>
                                        <button class="material-symbols-outlined text-lg hover:text-gray-400 transition-colors">more_vert</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-between pt-8 border-t border-mono-border">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Showing 1 to 10 of 124 products</span>
                    <div class="flex gap-2">
                        <button class="px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:bg-mono-black hover:text-white transition-all">Previous</button>
                        <button class="px-4 py-2 bg-mono-black text-white text-[10px] font-bold uppercase tracking-widest">1</button>
                        <button class="px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:bg-mono-black hover:text-white transition-all">2</button>
                        <button class="px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:bg-mono-black hover:text-white transition-all">3</button>
                        <button class="px-4 py-2 border border-mono-border text-[10px] font-bold uppercase tracking-widest hover:bg-mono-black hover:text-white transition-all">Next</button>
                    </div>
                </div>
            </div>
            <footer class="mt-auto border-t border-mono-border p-8 flex justify-between items-center text-[10px] text-gray-400 font-bold uppercase tracking-widest">
                <span>© 2024 MONO Studio</span>
                <div class="flex gap-6">
                    <a class="hover:text-mono-black" href="#">Terms</a>
                    <a class="hover:text-mono-black" href="#">Privacy</a>
                    <a class="hover:text-mono-black" href="#">Support</a>
                </div>
            </footer>
        </main>
    </div>

</body>

</html>