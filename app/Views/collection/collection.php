<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO | Shop</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;1,6..96,400&amp;family=Inter:wght@300;400&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        @layer base {
            body {
                @apply bg-white text-black;
                font-family: 'Inter', sans-serif;
            }
            .font-serif-luxury {
                font-family: 'Bodoni+Moda', serif;
                font-weight: 300;
            }
        }
        .nav-link {
            @apply text-[9px] uppercase tracking-[0.4em] font-light transition-opacity hover:opacity-50;
        }
        .border-thin {
            border: 0.5px solid black;
        }
        .border-thin-b {
            border-bottom: 0.5px solid black;
        }
        .border-thin-t {
            border-top: 0.5px solid black;
        }
        .product-image-container {
            @apply relative overflow-hidden bg-white border-thin aspect-[2/3];
        }
        .filter-link {
            @apply text-[9px] uppercase tracking-[0.4em] font-light border-thin px-6 py-2 transition-all hover:bg-black hover:text-white;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="fixed top-0 w-full z-50 bg-white/95 border-thin-b">
        <div class="max-w-[1800px] mx-auto px-12 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-12">
                <a class="nav-link" href="#">Shop</a>
                <a class="nav-link" href="#">Archive</a>
            </div>
            <div class="text-sm font-serif-luxury tracking-[0.3em] uppercase">MONO</div>
            <div class="flex items-center space-x-12">
                <a class="nav-link" href="#">Search</a>
                <a class="nav-link" href="#">Cart (0)</a>
            </div>
        </div>
    </nav>
    <main class="pt-32 pb-64 px-12">
        <div class="max-w-[1800px] mx-auto">
            <div class="flex justify-between items-center mb-16">
                <div class="flex items-center">
                    <a class="filter-link" href="#">Filter</a>
                </div>
                <div class="text-[9px] uppercase tracking-[0.4em] text-black/40">
                    Showing 12 Products
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAojNBPNDPF7dusolYOQrfS-e60JnHH01DO78ImYP8m1mXOl--WlMlQvll0_Eq2rtcuPUbLfiWWNqEDh6SgrkN-V6r8MxDmllszf7uFcFukhE1UEkstTvy20VG-IpTbPR3IerZ9Yqd8zSIx_j--wCwgTfYvqdM127j42h59soNbB9a5Wl2Q3DuBCx30lmq-isloIl4rrWScHtoxZ4PLt3D0eHhO-KVBxKxC5EmcrsvQJTVnnQ5D40kc6rL5jTtsU9_mj9f0nVm4H6w" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Structure Blazer</h3>
                        <span class="text-[10px] tracking-widest text-black/60">450.00</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkzuBeF0zkgoBc_WbfvuQ5z0RiomL5HerMlEZnCFskPbGS-yGCfEfJ3RfffsqhD261c3c20AMnsldsh9UcVeof98IkFMAc9nZHxeYe2INamv4CKfetmrFMYIAOxKHGPvGUI-VYCDo-R84qYz1ZMzsrnWC6FzlAxjpsKei5nmuBGBqc5kz7-prBk5Pcm3wbM0NsfEHz-uEaSjWZhbSSU3P5-Jvkxy9o9R8YVx4tlEHxr5spnWd59JDdlMBwSqsnqyKYuOKJBrUJ_bU" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Ribbed Wool Knit</h3>
                        <span class="text-[10px] tracking-widest text-black/60">280.00</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXqeGW8VuUbmosIbR27suDvmQVHk8IIqKtKNUEUd80X78JpEWto1R4LXxOpdLNGyYKfDkUO5qeNqDbx_oilm-rzWXF-UHTK_NdsFjtW-zwbBBsdXj3idqYxxZIMHcYwrFS9ORZgJXz5wl3QARbQbj6hw-EiUVfspkPufwKn8ZF0U8JvsJYTdvv3AUOlO7KwBFpQWg_ZhVCwXx_4iUGm2UEMtF5DINJklJliSkCdtC_v6pXFU1d3f2B2FyUEoVX3s0FGdZpSqIm8d8" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Chelsea Boot 01</h3>
                        <span class="text-[10px] tracking-widest text-black/60">620.00</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4jE2ZtEJvHM6daGDulhX77QD0cTay55GyOJcPtLgy1YDG1OReaLjRHqtIHtWS-VPfVbzXnqh4z0UYWbRHynHm8pWDEa18PNaAmEOyBiBE-lfTMcT3OVu-eqHryunGBa8j0kRkp1vEiiHaIdF1Gy0auQb5us2tG_L33tnXKF3xbBSs4bWZbtOKFIEaX736vwCpXNLAkmC0rNMg7VVzk8ybmZ8s3F154xqjiNucTx1X0dCM7c0IjzDVQ-YzKfgsz334LaPN-JzvwHo" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Tapered Trouser</h3>
                        <span class="text-[10px] tracking-widest text-black/60">340.00</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPdtQ4PiWMKeD8ewAg5ITYR43qe0aQmZYcEBUi5STh1LELWIG6GCrDPxF45dmKoG1ZE9_Zfaj42mCI8EOlzphJyOK33Tjyf4A6TOdFyfCIJmQdgLxBnU-A63P3ba5aoElP17NlS0OBuePWKloqislccYKAgHUbhz2NinFnkAUaJrciZPNQnpGbduHB2E16jC_q_pkIQklcs7FOsbk4rhriIYPGFf0krg0SoX1hw1sFZeEqroQ-PYMS6eHKB5sTWaMRmPNfYQQvwoE" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Overcoat Noir</h3>
                        <span class="text-[10px] tracking-widest text-black/60">890.00</span>
                    </div>
                </div>
                <div class="group cursor-pointer">
                    <div class="product-image-container mb-6">
                        <img alt="Monochrome product" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo4XKaNNSKD8jO-H9f7ojFc9esUA0ncOpCBqZZxBvIwDF5FrqJcUUjXrrJLm1f0NIIB1DSBLgupkGNxZdeS_W-E1qwPn13ARd-4GmzkeV8gYk2Fa1P5o1cV7IWCFnHU7l40PZteyJpqWyiyKEUI3m9YO-VsJaH3YDMx_0BLbHnTWRdVLOEssXLViVted3ZMChUfYa52O6GGX5F7ymCWHidgdB9y2pYnJxJExpnjSGFoUnzVfkslDbqtWU5vdbRNoAtx1ASiuIrYXI" />
                    </div>
                    <div class="flex justify-between items-baseline">
                        <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">Textured Scarf</h3>
                        <span class="text-[10px] tracking-widest text-black/60">120.00</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-white px-12 py-32 border-thin-t">
        <div class="max-w-[1800px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-24 items-start">
            <div class="space-y-6">
                <span class="nav-link block opacity-100">Studio</span>
                <p class="text-[9px] uppercase tracking-[0.3em] font-light text-black/40 leading-relaxed">
                    A01, Avenue de l'Esprit<br />75001 Paris, France
                </p>
            </div>
            <div class="space-y-6">
                <span class="nav-link block opacity-100">Follow</span>
                <div class="flex space-x-12">
                    <a class="nav-link" href="#">Instagram</a>
                    <a class="nav-link" href="#">Journal</a>
                </div>
            </div>
            <div class="space-y-6 md:text-right">
                <span class="nav-link block opacity-100">Legal</span>
                <p class="text-[9px] uppercase tracking-[0.3em] font-light text-black/40">
                    © 2024 MONO. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>