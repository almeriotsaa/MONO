<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO | Luxury Fashion</title>
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
        .product-card:hover .product-info {
            opacity: 1;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="fixed top-0 w-full z-50 bg-white/95 border-thin-b">
        <div class="max-w-[1800px] mx-auto px-12 h-16 flex items-center justify-between">
            <div class="flex items-center space-x-12">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="<?= base_url('collection') ?>">Shop</a>
            </div>
            <div class="text-sm font-serif-luxury tracking-[0.3em] uppercase">MONO</div>
            <div class="flex items-center space-x-12">
                <a class="nav-link" href="#">Cart (0)</a>
                <a class="nav-link" href="#">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen w-full pt-16 px-12 pb-12">
        <div class="relative w-full h-full border-thin overflow-hidden group">
            <img alt="Editorial monochrome" class="w-full h-full object-cover grayscale brightness-90 transition-transform duration-[2000ms] group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPdtQ4PiWMKeD8ewAg5ITYR43qe0aQmZYcEBUi5STh1LELWIG6GCrDPxF45dmKoG1ZE9_Zfaj42mCI8EOlzphJyOK33Tjyf4A6TOdFyfCIJmQdgLxBnU-A63P3ba5aoElP17NlS0OBuePWKloqislccYKAgHUbhz2NinFnkAUaJrciZPNQnpGbduHB2E16jC_q_pkIQklcs7FOsbk4rhriIYPGFf0krg0SoX1hw1sFZeEqroQ-PYMS6eHKB5sTWaMRmPNfYQQvwoE" />
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                <div class="mb-4">
                    <span class="font-serif-luxury text-2xl tracking-[0.8em] opacity-80">MONO</span>
                </div>
                <div class="mt-8">
                    <a class="text-[9px] uppercase tracking-[0.6em] font-light hover:underline underline-offset-8" href="<?= base_url('collection') ?>">Enter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tagline Section -->
    <section class="py-64 bg-white">
        <div class="max-w-[1200px] mx-auto px-12 text-center">
            <h1 class="font-serif-luxury text-5xl md:text-6xl italic leading-tight mb-16">The reduction to essentials.</h1>
            <p class="text-[10px] uppercase tracking-[0.5em] font-light max-w-lg mx-auto leading-loose text-black/60">
                A study of silhouette and texture. Eliminating the superfluous to reveal the architecture of form.
            </p>
        </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="px-12 pb-64">
        <div class="max-w-[1800px] mx-auto">
            <div class="flex justify-between items-baseline mb-24 border-thin-b pb-4">
                <h2 class="font-serif-luxury text-4xl">New Arrivals</h2>
                <span class="text-[9px] uppercase tracking-[0.4em]">01 — 0<?= count($newArrivals) ?></span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-24">
                <?php foreach ($newArrivals as $item) : ?>
                <a href="<?= base_url('detail/' . $item['product_id']) ?>" class="group relative">
                    <div class="aspect-[2/3] overflow-hidden bg-white border-thin">
                        <img 
                            alt="<?= esc($item['name_product']) ?>" 
                            class="w-full h-full object-cover grayscale" 
                            src="<?= base_url('uploads/' . $item['image']) ?>" 
                        />
                    </div>
                    <div class="product-info absolute inset-0 bg-white/90 flex flex-col items-center justify-center opacity-0 transition-opacity duration-500 pointer-events-none px-6 text-center">
                        <h4 class="text-[10px] uppercase tracking-[0.4em] mb-4"><?= esc($item['name_product']) ?></h4>
                        <p class="text-[10px] font-light tracking-widest text-black/60">
                            Rp <?= number_format($item['price'], 0, ',', '.') ?>
                        </p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Editorial Section -->
    <section class="px-12 pb-64">
        <div class="max-w-[1800px] mx-auto grid grid-cols-12 items-center gap-12">
            <div class="col-span-12 lg:col-span-7">
                <div class="aspect-[16/9] overflow-hidden border-thin">
                    <img alt="Texture detail" class="w-full h-full object-cover grayscale" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo4XKaNNSKD8jO-H9f7ojFc9esUA0ncOpCBqZZxBvIwDF5FrqJcUUjXrrJLm1f0NIIB1DSBLgupkGNxZdeS_W-E1qwPn13ARd-4GmzkeV8gYk2Fa1P5o1cV7IWCFnHU7l40PZteyJpqWyiyKEUI3m9YO-VsJaH3YDMx_0BLbHnTWRdVLOEssXLViVted3ZMChUfYa52O6GGX5F7ymCWHidgdB9y2pYnJxJExpnjSGFoUnzVfkslDbqtWU5vdbRNoAtx1ASiuIrYXI" />
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4 lg:col-start-9">
                <h3 class="font-serif-luxury text-4xl mb-8 leading-tight">Quiet confidence.</h3>
                <p class="text-[10px] uppercase tracking-[0.4em] font-light leading-loose text-black/60 mb-12">
                    A curated selection for the modern wardrobe. Functional, lasting, and devoid of noise.
                </p>
                <a class="text-[9px] uppercase tracking-[0.4em] border-thin px-8 py-3 hover:bg-black hover:text-white transition-colors" href="<?= base_url('collection') ?>">Discover</a>
            </div>
        </div>
    </section>

    <footer class="bg-white px-12 py-24 border-thin-t">
        <div class="max-w-[1800px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-24">
            <div class="space-y-4">
                <span class="nav-link block">Studio</span>
                <p class="text-[9px] uppercase tracking-[0.3em] font-light text-black/40 leading-relaxed">
                    A01, Avenue de l'Esprit<br />Paris, France
                </p>
            </div>
            <div class="space-y-4">
                <span class="nav-link block">Follow</span>
                <div class="flex space-x-8">
                    <a class="nav-link" href="#">Instagram</a>
                    <a class="nav-link" href="#">Journal</a>
                </div>
            </div>
            <div class="space-y-4 md:text-right">
                <span class="nav-link block">Legal</span>
                <p class="text-[9px] uppercase tracking-[0.3em] font-light text-black/40">
                    © 2024 MONO. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>

