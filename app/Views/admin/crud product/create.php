<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO Admin - Add New Product</title>
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
                        "mono-soft": "#a1a1a1",
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
            input, textarea, select {
                @apply focus:ring-0 focus:border-mono-black outline-none transition-colors bg-white;
                border-width: 0.5px !important;
                border-color: #000000 !important;
            }
        }
        .tracking-widest-xl {
            letter-spacing: 0.25em;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="overflow-x-hidden">
    <div class="flex min-h-screen">
        <aside class="w-64 border-r border-mono-border h-screen sticky top-0 flex flex-col bg-white">
            <div class="p-8 border-b border-mono-border">
                <div class="flex items-center gap-3">
                    <div class="bg-black w-10 h-10 flex items-center justify-center shrink-0">
                        <span class="text-white font-serif text-xl font-bold">M</span>
                    </div>
                    <div>
                        <span class="text-sm font-bold tracking-[0.2em] uppercase block">MONO</span>
                        <span class="text-[9px] text-mono-soft font-medium tracking-[0.15em] uppercase block">Management</span>
                    </div>
                </div>
            </div>
            <nav class="flex-1 px-6 py-10 space-y-1">
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors group" href="#">
                    <span class="material-symbols-outlined text-lg">dashboard</span>
                    <span class="text-[10px] font-semibold tracking-widest-xl uppercase">Overview</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors group" href="#">
                    <span class="material-symbols-outlined text-lg">shopping_bag</span>
                    <span class="text-[10px] font-semibold tracking-widest-xl uppercase">Orders</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 bg-mono-black text-white transition-colors group" href="#">
                    <span class="material-symbols-outlined text-lg">inventory_2</span>
                    <span class="text-[10px] font-semibold tracking-widest-xl uppercase">Products</span>
                </a>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors group" href="#">
                    <span class="material-symbols-outlined text-lg">group</span>
                    <span class="text-[10px] font-semibold tracking-widest-xl uppercase">Customers</span>
                </a>
                <div class="pt-10 pb-4">
                    <span class="px-4 text-[9px] text-mono-soft font-bold tracking-widest-xl uppercase">System</span>
                </div>
                <a class="flex items-center gap-4 px-4 py-3 text-mono-black hover:bg-mono-gray transition-colors group" href="#">
                    <span class="material-symbols-outlined text-lg">settings</span>
                    <span class="text-[10px] font-semibold tracking-widest-xl uppercase">Settings</span>
                </a>
            </nav>
            <div class="p-8 border-t border-mono-border">
                <div class="flex items-center gap-4">
                    <div class="size-8 bg-mono-gray border border-mono-border overflow-hidden">
                        <img alt="Admin user profile portrait" class="w-full h-full object-cover grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnVQhDPjbYJInoYqayEY8AFG4VzStB7qTqHpLRv6dWN7TEzAJ0yvn7jA8LFeAWJrPYwx8ISCsKPhN6RqxmkUJoB4sJ9oJFSBS9rn9AiAoBdaaRXShC5ecu4TNIGqRfyDwJD3ZtG509wY9kwXCNk_bf9bOLb7Ly-Kv5ZdslWRoRLhKesjrx-1ccdvmq6EHmPzY4LITHUVHr25LNO086nlXPr_Pd0Uui1ahNTTs1uRGu98ydx0IPv-SUtut80Iudiq99S80MvHFrhFs" />
                    </div>
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-wider">A. Harrison</p>
                        <p class="text-[9px] text-mono-soft uppercase">Root Admin</p>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col min-w-0">
            <header class="h-28 border-b border-mono-border flex items-center justify-between px-12 bg-white sticky top-0 z-10">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-bold tracking-[0.1em] text-mono-black uppercase">Add New Product</h1>
                    <nav class="flex text-[10px] text-mono-soft uppercase tracking-[0.2em] space-x-2 mt-2">
                        <span>Inventory</span>
                        <span>/</span>
                        <span class="text-mono-black">Catalog</span>
                    </nav>
                </div>
            </header>
            <div class="p-12 max-w-5xl mx-auto w-full">
                <form class="space-y-16">
                    <section>
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl border-b border-mono-black pb-4 mb-8">Product Information</h2>
                        <div class="grid grid-cols-2 gap-x-12 gap-y-8">
                            <div class="flex flex-col gap-2 col-span-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Product Name</label>
                                <input class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50" placeholder="e.g. Nike Air Max" type="text" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Category</label>
                                <select class="w-full p-4 text-xs tracking-widest uppercase appearance-none">
                                    <option disabled="" selected="" value="">Select Category</option>
                                    <option value="7001">Footwear (7001)</option>
                                    <option value="7002">Outerwear (7002)</option>
                                    <option value="7003">Tops (7003)</option>
                                    <option value="7004">Accessories (7004)</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Size</label>
                                <input class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50" placeholder="e.g. 42" type="text" />
                            </div>
                            <div class="flex flex-col gap-2 col-span-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Description</label>
                                <textarea class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50 leading-loose" placeholder="Short description..." rows="2"></textarea>
                            </div>
                            <div class="flex flex-col gap-2 col-span-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Details</label>
                                <textarea class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50 leading-loose" placeholder="Full product details and technical specifications..." rows="6"></textarea>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl border-b border-mono-black pb-4 mb-8">Inventory &amp; Pricing</h2>
                        <div class="grid grid-cols-2 gap-12">
                            <div class="flex flex-col gap-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Price (USD)</label>
                                <input class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50" placeholder="0.00" type="text" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-[9px] font-bold uppercase tracking-widest text-mono-soft">Stock</label>
                                <input class="w-full p-4 text-xs tracking-widest uppercase placeholder:text-mono-soft/50" placeholder="0" type="number" />
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2 class="text-[11px] font-bold uppercase tracking-widest-xl border-b border-mono-black pb-4 mb-8">Image Upload</h2>
                        <div class="w-full aspect-video border-[0.5px] border-dashed border-mono-black flex flex-col items-center justify-center gap-4 bg-white hover:bg-mono-gray/20 transition-colors cursor-pointer group">
                            <span class="material-symbols-outlined text-4xl font-light">cloud_upload</span>
                            <div class="text-center">
                                <p class="text-[10px] font-bold uppercase tracking-widest">Drag and drop images here</p>
                                <p class="text-[9px] text-mono-soft uppercase tracking-widest mt-1">or click to browse from files</p>
                            </div>
                            <p class="text-[8px] text-mono-soft uppercase mt-4">Recommended: 2000 x 2500px JPG/PNG</p>
                        </div>
                    </section>
                    <div class="flex items-center justify-end gap-6 pt-8 border-t border-mono-border">
                        <button class="px-12 py-4 border-[0.5px] border-mono-black text-mono-black text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-mono-gray transition-all" type="button">
                            Cancel
                        </button>
                        <button class="px-12 py-4 bg-mono-black text-white text-[10px] font-bold uppercase tracking-[0.2em] hover:bg-neutral-800 transition-all" type="submit">
                            Save Product
                        </button>
                    </div>
                </form>
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