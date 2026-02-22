<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO | <?= esc($product['name_product']) ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300&amp;family=Inter:wght@200;300;400&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#000000",
                        "background": "#ffffff",
                    },
                    fontFamily: {
                        "serif": ["'Cormorant Garamond'", "serif"],
                        "sans": ["Inter", "sans-serif"],
                    },
                },
            },
        }
    </script>
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
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .sticky-details {
            position: sticky;
            top: 6rem;
        }
        img {
            filter: grayscale(100%);
        }
    </style>
</head>

<body class="bg-white">
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

    <main class="max-w-[1800px] mx-auto px-8 pt-32 pb-20">
        <div class="flex flex-col lg:flex-row gap-0">

            <!-- Kolom Gambar -->
            <div class="lg:w-[70%] space-y-12 pr-16">
                <div class="aspect-[4/5] overflow-hidden bg-gray-50">
                    <img 
                        alt="<?= esc($product['name_product']) ?> Main View" 
                        class="w-full h-full object-cover" 
                        src="<?= base_url('uploads/' . $product['image']) ?>" 
                    />
                </div>
                <div class="grid grid-cols-2 gap-12">
                    <div class="aspect-[4/5] bg-gray-50 overflow-hidden">
                        <img 
                            alt="Thumbnail 1" 
                            class="w-full h-full object-cover" 
                            src="<?= base_url('uploads/' . $product['image']) ?>" 
                        />
                    </div>
                    <div class="aspect-[4/5] bg-gray-50 overflow-hidden">
                        <img 
                            alt="Thumbnail 2" 
                            class="w-full h-full object-cover" 
                            src="<?= base_url('uploads/' . $product['image']) ?>" 
                        />
                    </div>
                </div>
            </div>

            <!-- Kolom Detail Produk -->
            <div class="lg:w-[30%]">
                <div class="sticky-details space-y-16">
                    <header class="space-y-6">
                        <h1 class="text-4xl font-serif font-light leading-tight tracking-tight">
                            <?= esc($product['name_product']) ?>
                        </h1>
                        <p class="text-xl font-serif italic text-black/80">
                            Rp <?= number_format($product['price'], 0, ',', '.') ?>
                        </p>
                    </header>

                    <div class="space-y-12">
                        <!-- Size Selector -->
                        <div class="space-y-6">
                            <div class="flex justify-between items-baseline border-b border-black/10 pb-2">
                                <span class="text-[10px] uppercase tracking-[0.3em] font-medium">Select Size</span>
                                <button class="text-[9px] uppercase tracking-[0.3em] opacity-40 hover:opacity-100">Size Guide</button>
                            </div>
                            <div class="flex flex-wrap gap-x-8 gap-y-4">
                                <?php 
                                // Pisahkan size berdasarkan koma jika ada beberapa size
                                $sizes = explode(',', $product['size']);
                                foreach ($sizes as $index => $size) :
                                    $size = trim($size);
                                ?>
                                <button class="text-[10px] tracking-[0.3em] <?= $index === 0 ? 'font-bold border-b border-black' : 'opacity-40 hover:opacity-100 transition-opacity' ?>">
                                    <?= esc($size) ?>
                                </button>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <button class="w-full py-5 border border-black text-[10px] uppercase tracking-[0.4em] hover:bg-black hover:text-white transition-all duration-500 bg-white text-black">
                            Add to Bag
                        </button>

                        <!-- Description & Details -->
                        <div class="space-y-6 pt-8 border-t border-black/10">
                            <p class="text-[13px] leading-relaxed text-black/90 font-serif italic">
                                <?= esc($product['description']) ?>
                            </p>
                            <div class="space-y-4">
                                <h2 class="text-[10px] uppercase tracking-[0.3em] font-medium">Details</h2>
                                <ul class="text-[10px] space-y-3 uppercase tracking-[0.2em] text-black/60">
                                    <li>Size: <?= esc($product['size']) ?></li>
                                    <li>Stock: <?= esc($product['stock']) ?> pcs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Latest Products -->
        <section class="mt-64">
            <h2 class="text-2xl font-serif italic text-center mb-24 font-light">Latest Products</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                <?php foreach ($latestProducts as $item) : ?>
                <div class="group cursor-pointer space-y-6">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                        <img 
                            alt="<?= esc($item['name_product']) ?>" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
                            src="<?= base_url('uploads/' . $item['image']) ?>" 
                        />
                    </div>
                    <div class="flex justify-between text-[10px] uppercase tracking-[0.2em]">
                        <span><?= esc($item['name_product']) ?></span>
                        <span class="opacity-40">Rp <?= number_format($item['price'], 0, ',', '.') ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer class="border-t border-black py-24 mt-24">
        <div class="max-w-[1800px] mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-16">
            <div class="space-y-6">
                <p class="text-3xl font-serif tracking-[0.2em] uppercase">MONO</p>
                <p class="text-[10px] leading-loose uppercase tracking-[0.3em] opacity-40 max-w-xs">
                    Architectural precision. Material integrity. Minimalist restraint.
                </p>
            </div>
            <div>
                <h4 class="text-[10px] uppercase tracking-[0.3em] mb-8 font-medium">Navigation</h4>
                <ul class="space-y-4 text-[10px] uppercase tracking-[0.2em] opacity-50">
                    <li><a class="hover:opacity-100" href="#">About</a></li>
                    <li><a class="hover:opacity-100" href="#">Stockists</a></li>
                    <li><a class="hover:opacity-100" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[10px] uppercase tracking-[0.3em] mb-8 font-medium">Legal</h4>
                <ul class="space-y-4 text-[10px] uppercase tracking-[0.2em] opacity-50">
                    <li><a class="hover:opacity-100" href="#">Shipping</a></li>
                    <li><a class="hover:opacity-100" href="#">Returns</a></li>
                    <li><a class="hover:opacity-100" href="#">Privacy</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-[10px] uppercase tracking-[0.3em] mb-8 font-medium">Newsletter</h4>
                <div class="relative border-b border-black pb-2">
                    <input class="w-full bg-transparent text-[10px] uppercase tracking-[0.3em] focus:outline-none placeholder:opacity-30 border-none p-0" placeholder="Enter Email" type="email" />
                </div>
            </div>
        </div>
        <div class="max-w-[1800px] mx-auto px-8 mt-24 pt-8 border-t border-black/5 flex justify-between text-[9px] uppercase tracking-[0.4em] opacity-30">
            <span>© 2024 MONO Studio</span>
            <div class="flex gap-8">
                <a class="hover:opacity-100" href="#">Instagram</a>
                <a class="hover:opacity-100" href="#">Pinterest</a>
            </div>
        </div>
    </footer>

</body>
</html>