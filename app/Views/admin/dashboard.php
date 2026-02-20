<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#16169c",
                        "background-light": "#ffffff",
                        "background-dark": "#111121",
                        "mono-black": "#000000",
                        "mono-gray": "#f2f2f2",
                        "mono-border": "#e5e5e5",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Manrope', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .tracking-widest-xl {
            letter-spacing: 0.2em;
        }
    </style>
</head>

<body class="bg-background-light text-mono-black font-display overflow-x-hidden">
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation -->
        <aside class="w-20 lg:w-64 border-r border-mono-border h-screen sticky top-0 flex flex-col bg-white">
            <div class="p-8 border-b border-mono-border flex items-center gap-3">
                <div class="h-8 w-8 bg-mono-black flex items-center justify-center text-white font-bold text-xl">M</div>
                <div class="hidden lg:flex flex-col">
                    <span class="text-sm font-bold tracking-widest leading-none">MONO</span>
                    <span class="text-[10px] text-gray-400 font-medium tracking-tighter uppercase mt-1">Management</span>
                </div>
            </div>
            <nav class="flex-1 px-4 py-8 space-y-2">
                <a class="flex items-center gap-4 px-4 py-3 bg-mono-black text-white rounded" href="#">
                    <span class="material-symbols-outlined text-lg">dashboard</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Overview</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors rounded" href="#">
                    <span class="material-symbols-outlined text-lg">shopping_bag</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Orders</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors rounded" href="#">
                    <span class="material-symbols-outlined text-lg">inventory_2</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Products</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors rounded" href="#">
                    <span class="material-symbols-outlined text-lg">group</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Customers</span>
                </a>
                <div class="pt-8 pb-4">
                    <span class="hidden lg:block px-4 text-[9px] text-gray-400 font-bold tracking-widest-xl uppercase mb-2">System</span>
                </div>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors rounded" href="#">
                    <span class="material-symbols-outlined text-lg">settings</span>
                    <span class="hidden lg:inline text-[11px] font-bold tracking-widest-xl uppercase">Settings</span>
                </a>
            </nav>
            <div class="p-6 border-t border-mono-border">
                <div class="flex items-center gap-3">
                    <div class="size-10 rounded-full bg-mono-gray border border-mono-border flex items-center justify-center overflow-hidden">
                        <img class="w-full h-full object-cover" data-alt="Admin user profile portrait" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDu9yYRzPr4SarL46pB-I7T69GDkObY1QNijSW-6Go6qEqya9zsc5Yrf19IOASVlCAINBKDJcwzP3hHC7Ufwo_Z_6ddgXyTxi6a61OHZ67ZCRQBH-reI_md7wXsqllGHmEuCes7QVA_Nz9obF44tIwLCcUw6wdvRXr9K2-ah9wki_QFQrmuzdmS7lf_oiB2uILS63ck_SHCEga0gXWpe3lRqI_zs-uYYfQ1bhkUkfGDPF6QBZLIMRxbW-K4wCuDY8owflHomibE2_c" />
                    </div>
                    <div class="hidden lg:block">
                        <p class="text-[11px] font-bold uppercase tracking-wider">A. Harrison</p>
                        <p class="text-[9px] text-gray-500 uppercase">Administrator</p>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 flex flex-col min-w-0">
            <!-- Header -->
            <header class="h-20 border-b border-mono-border flex items-center justify-between px-8 bg-white/80 backdrop-blur-md sticky top-0 z-10">
                <div class="flex flex-col">
                    <h1 class="text-xl font-light tracking-tight text-mono-black">Dashboard Overview</h1>
                    <nav class="flex text-[10px] text-gray-400 uppercase tracking-widest space-x-2">
                        <span>Admin</span>
                        <span>/</span>
                        <span class="text-mono-black">Analytics</span>
                    </nav>
                </div>
                <div class="flex items-center gap-6">
                    <button class="flex items-center gap-2 px-4 py-2 border border-mono-black text-[11px] font-bold uppercase tracking-widest hover:bg-mono-black hover:text-white transition-all">
                        <span class="material-symbols-outlined text-sm">download</span>
                        Export Report
                    </button>
                    <div class="flex items-center gap-4 text-mono-black">
                        <span class="material-symbols-outlined cursor-pointer hover:opacity-50">search</span>
                        <span class="material-symbols-outlined cursor-pointer hover:opacity-50 relative">
                            notifications
                            <span class="absolute top-0 right-0 size-1.5 bg-primary rounded-full"></span>
                        </span>
                    </div>
                </div>
            </header>
            <div class="p-8 lg:p-12 space-y-12 max-w-7xl mx-auto w-full">
                <!-- Metrics Section -->
                <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-8 border border-mono-black flex flex-col justify-between h-48 group hover:bg-mono-black transition-colors duration-300">
                        <div class="flex justify-between items-start">
                            <span class="text-[11px] font-bold uppercase tracking-widest-xl group-hover:text-white/60 transition-colors">Total Revenue</span>
                            <span class="material-symbols-outlined text-mono-black group-hover:text-white transition-colors">trending_up</span>
                        </div>
                        <div>
                            <p class="text-3xl font-light tracking-tighter group-hover:text-white transition-colors">$124,500.00</p>
                            <p class="text-[10px] font-bold text-primary mt-1 uppercase tracking-widest group-hover:text-white/80 transition-colors">+8.4% VS LAST MONTH</p>
                        </div>
                    </div>
                    <div class="p-8 border border-mono-border flex flex-col justify-between h-48 hover:border-mono-black transition-all">
                        <div class="flex justify-between items-start">
                            <span class="text-[11px] font-bold uppercase tracking-widest-xl text-gray-500">Orders</span>
                            <span class="material-symbols-outlined">shopping_cart</span>
                        </div>
                        <div>
                            <p class="text-3xl font-light tracking-tighter">1,240</p>
                            <p class="text-[10px] font-bold text-mono-black mt-1 uppercase tracking-widest">+5.2% COMPLETED</p>
                        </div>
                    </div>
                    <div class="p-8 border border-mono-border flex flex-col justify-between h-48 hover:border-mono-black transition-all">
                        <div class="flex justify-between items-start">
                            <span class="text-[11px] font-bold uppercase tracking-widest-xl text-gray-500">New Customers</span>
                            <span class="material-symbols-outlined">person_add</span>
                        </div>
                        <div>
                            <p class="text-3xl font-light tracking-tighter">482</p>
                            <p class="text-[10px] font-bold text-mono-black mt-1 uppercase tracking-widest">+12.0% GROWTH</p>
                        </div>
                    </div>
                </section>
                <!-- Charts Section -->
                <section class="space-y-6">
                    <div class="flex items-end justify-between border-b border-mono-border pb-4">
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl">Sales Performance</h2>
                        <div class="flex gap-4 text-[10px] font-bold uppercase tracking-widest">
                            <span class="flex items-center gap-1.5"><span class="size-2 bg-mono-black"></span> Current Period</span>
                            <span class="flex items-center gap-1.5 text-gray-300"><span class="size-2 bg-gray-200"></span> Previous</span>
                        </div>
                    </div>
                    <div class="w-full h-80 relative py-8">
                        <!-- Simulated Grid Lines -->
                        <div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-10">
                            <div class="border-t border-mono-black w-full"></div>
                            <div class="border-t border-mono-black w-full"></div>
                            <div class="border-t border-mono-black w-full"></div>
                            <div class="border-t border-mono-black w-full"></div>
                        </div>
                        <!-- Minimalist Line Chart SVG -->
                        <svg class="w-full h-full overflow-visible" preserveaspectratio="none" viewbox="0 0 1000 100">
                            <!-- Background line -->
                            <path d="M0,80 L100,75 L200,85 L300,60 L400,65 L500,40 L600,45 L700,20 L800,25 L900,10 L1000,5" fill="none" stroke="#e5e5e5" stroke-dasharray="4" stroke-width="1"></path>
                            <!-- Main line -->
                            <path d="M0,90 L100,70 L200,75 L300,50 L400,55 L500,30 L600,35 L700,15 L800,20 L900,5 L1000,2" fill="none" stroke="black" stroke-width="2"></path>
                            <!-- Points -->
                            <circle cx="0" cy="90" fill="white" r="3" stroke="black" stroke-width="1.5"></circle>
                            <circle cx="500" cy="30" fill="white" r="3" stroke="black" stroke-width="1.5"></circle>
                            <circle cx="1000" cy="2" fill="white" r="3" stroke="black" stroke-width="1.5"></circle>
                        </svg>
                        <div class="flex justify-between mt-6 text-[10px] font-bold uppercase tracking-widest text-gray-400">
                            <span>Monday</span>
                            <span>Tuesday</span>
                            <span>Wednesday</span>
                            <span>Thursday</span>
                            <span>Friday</span>
                            <span>Saturday</span>
                            <span>Sunday</span>
                        </div>
                    </div>
                </section>
                <!-- Recent Orders Table -->
                <section class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl">Recent Orders</h2>
                        <a class="text-[10px] font-bold uppercase tracking-widest border-b border-mono-black" href="#">View All Transactions</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-mono-black">
                                    <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Order ID</th>
                                    <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Customer</th>
                                    <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Date</th>
                                    <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500">Amount</th>
                                    <th class="py-5 text-[10px] font-bold uppercase tracking-widest text-gray-500 text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-mono-border">
                                <tr class="hover:bg-mono-gray/50 transition-colors group">
                                    <td class="py-6 text-sm font-light tracking-tight">#M-92841</td>
                                    <td class="py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="size-7 bg-mono-gray flex items-center justify-center text-[10px] font-bold">JD</div>
                                            <span class="text-xs uppercase tracking-wider font-bold">Julianne Deville</span>
                                        </div>
                                    </td>
                                    <td class="py-6 text-[11px] text-gray-500 uppercase tracking-widest">Oct 24, 2023</td>
                                    <td class="py-6 text-sm font-medium">$2,450.00</td>
                                    <td class="py-6 text-right">
                                        <span class="inline-block px-3 py-1 bg-mono-black text-white text-[9px] font-bold uppercase tracking-widest">Shipped</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-mono-gray/50 transition-colors group">
                                    <td class="py-6 text-sm font-light tracking-tight">#M-92840</td>
                                    <td class="py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="size-7 bg-mono-gray flex items-center justify-center text-[10px] font-bold">RK</div>
                                            <span class="text-xs uppercase tracking-wider font-bold">Rainer Koch</span>
                                        </div>
                                    </td>
                                    <td class="py-6 text-[11px] text-gray-500 uppercase tracking-widest">Oct 24, 2023</td>
                                    <td class="py-6 text-sm font-medium">$890.00</td>
                                    <td class="py-6 text-right">
                                        <span class="inline-block px-3 py-1 border border-mono-black text-mono-black text-[9px] font-bold uppercase tracking-widest">Processing</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-mono-gray/50 transition-colors group">
                                    <td class="py-6 text-sm font-light tracking-tight">#M-92839</td>
                                    <td class="py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="size-7 bg-mono-gray flex items-center justify-center text-[10px] font-bold">ML</div>
                                            <span class="text-xs uppercase tracking-wider font-bold">Marc Laurent</span>
                                        </div>
                                    </td>
                                    <td class="py-6 text-[11px] text-gray-500 uppercase tracking-widest">Oct 23, 2023</td>
                                    <td class="py-6 text-sm font-medium">$12,200.00</td>
                                    <td class="py-6 text-right">
                                        <span class="inline-block px-3 py-1 bg-mono-black text-white text-[9px] font-bold uppercase tracking-widest">Shipped</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-mono-gray/50 transition-colors group">
                                    <td class="py-6 text-sm font-light tracking-tight">#M-92838</td>
                                    <td class="py-6">
                                        <div class="flex items-center gap-3">
                                            <div class="size-7 bg-mono-gray flex items-center justify-center text-[10px] font-bold">ES</div>
                                            <span class="text-xs uppercase tracking-wider font-bold">Elena Sterling</span>
                                        </div>
                                    </td>
                                    <td class="py-6 text-[11px] text-gray-500 uppercase tracking-widest">Oct 23, 2023</td>
                                    <td class="py-6 text-sm font-medium">$4,120.00</td>
                                    <td class="py-6 text-right">
                                        <span class="inline-block px-3 py-1 bg-primary text-white text-[9px] font-bold uppercase tracking-widest">New</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <!-- Simple Footer -->
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