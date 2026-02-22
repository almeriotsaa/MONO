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
                <!-- PERUBAHAN 1: Showing count dinamis -->
                <div class="text-[9px] uppercase tracking-[0.4em] text-black/40">
                    Showing <?= count($products) ?> Products
                </div>
            </div>
            <!-- PERUBAHAN 2: Grid produk dinamis -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-24">
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <a href="/detail/<?= esc($product['product_id']) ?>" class="group cursor-pointer">
                            <div class="product-image-container mb-6">
                                <?php if (!empty($product['image'])) : ?>
                                    <img
                                        alt="<?= esc($product['name_product']) ?>"
                                        class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105"
                                        src="<?= base_url('uploads/products/' . esc($product['image'])) ?>"
                                    />
                                <?php else : ?>
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                        <span class="text-[9px] uppercase tracking-[0.3em] text-black/30">No Image</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex justify-between items-baseline">
                                <h3 class="text-[10px] uppercase tracking-[0.3em] font-light">
                                    <?= esc($product['name_product']) ?>
                                </h3>
                                <span class="text-[10px] tracking-widest text-black/60">
                                    <?= number_format($product['price'], 2) ?>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="col-span-3 text-center py-24">
                        <p class="text-[9px] uppercase tracking-[0.4em] text-black/40">No products found</p>
                    </div>
                <?php endif; ?>
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