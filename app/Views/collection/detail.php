<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>MONO | Structured Wool Coat</title>
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
            <div class="lg:w-[70%] space-y-12 pr-16">
                <div class="aspect-[4/5] overflow-hidden bg-gray-50">
                    <img alt="Structured Wool Coat Main View" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbslPUvX42dhkCggI10r8XscXug9cTPK6YegjF6ukXD5uC4FDwJKbI6EKuapbdsp-UXhlCKwvvDhe1Nr39Hs0Xs6cz97W40KuhlmCi2PmGCRvz8yjwI1lvA0c0aZANdWtFaIrU98A8mOoP5iC9x93oiQiz5jKV1HYByElLQoAK00gs9X_tlZEomer_D0K71VsYPyP9foa02HNvIadj6bWgvRjnu-QfyCLTEyfRDL-Y-F-GJxafDPDYi4RXqTYRQSgn8-jYaD_Wz3I" />
                </div>
                <div class="grid grid-cols-2 gap-12">
                    <div class="aspect-[4/5] bg-gray-50 overflow-hidden">
                        <img alt="Thumbnail 1" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCR8jcdXUSwWc77Tsje9qYXhA30oXw0sb0Ad2VT7yJX3jiIRgPOl_BOFM40YzaRB1dzN9fHOSYKb9hB4orKQu_346ldJzbGt0FkGH-zv-muYfEBBfLLYDd9I_I4NkLQAQebpX5tbtLNwX09mbsc5ZeF8Qn_BpkEcKuZPO_lwbFbMJSzp-2d8UCGYUlAPaclnjc2vUL2ji0Zrr9bjNWngFmI6sySNtCSupUDHmS7RNlM9d5_2z20EMPX77zFqJfrgRqWME0mU0PRVy4" />
                    </div>
                    <div class="aspect-[4/5] bg-gray-50 overflow-hidden">
                        <img alt="Thumbnail 2" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDp4wvYchqyM-_ZxykphweKBtPSMVcTqxv3qYqxTLNRRe6DD1IUucI1f5HtIsHDsQWanqwrkommj1HR6S8NvMS-ubxWvENuIUM0fpoHoRZtEDHtL4BQucb8rd0LgTr3pvksnDTlbR3qZbj5fB4K0MvnE_DWnETJS1_nCQOPLMbB9xRw_D8PKk6tuP2gqJNEk3X4IZXTBrR_wf5FfrgRW2lM9GOVCxCNutiWPjhln9MwjcYTDaBm5CfaGbV965wGBX9kMF-d2pT8DmA" />
                    </div>
                </div>
            </div>
            <div class="lg:w-[30%]">
                <div class="sticky-details space-y-16">
                    <header class="space-y-6">
                        <h1 class="text-4xl font-serif font-light leading-tight tracking-tight">Structured Wool Coat</h1>
                        <p class="text-xl font-serif italic text-black/80">$850.00</p>
                    </header>
                    <div class="space-y-12">
                        <div class="space-y-6">
                            <div class="flex justify-between items-baseline border-b border-black/10 pb-2">
                                <span class="text-[10px] uppercase tracking-[0.3em] font-medium">Select Size</span>
                                <button class="text-[9px] uppercase tracking-[0.3em] opacity-40 hover:opacity-100">Size Guide</button>
                            </div>
                            <div class="flex flex-wrap gap-x-8 gap-y-4">
                                <button class="text-[10px] tracking-[0.3em] opacity-40 hover:opacity-100 transition-opacity">XS</button>
                                <button class="text-[10px] tracking-[0.3em] opacity-40 hover:opacity-100 transition-opacity">S</button>
                                <button class="text-[10px] tracking-[0.3em] font-bold border-b border-black">M</button>
                                <button class="text-[10px] tracking-[0.3em] opacity-40 hover:opacity-100 transition-opacity">L</button>
                                <button class="text-[10px] tracking-[0.3em] opacity-40 hover:opacity-100 transition-opacity">XL</button>
                            </div>
                        </div>
                        <button class="w-full py-5 border border-black text-[10px] uppercase tracking-[0.4em] hover:bg-black hover:text-white transition-all duration-500 bg-white text-black">
                            Add to Bag
                        </button>
                        <div class="space-y-6 pt-8 border-t border-black/10">
                            <p class="text-[13px] leading-relaxed text-black/90 font-serif italic">
                                A contemporary silhouette defined by sharp lines and architectural shoulders. Crafted from 100% responsibly sourced merino wool with a subtle grain texture.
                            </p>
                            <div class="space-y-4">
                                <h2 class="text-[10px] uppercase tracking-[0.3em] font-medium">Details</h2>
                                <ul class="text-[10px] space-y-3 uppercase tracking-[0.2em] text-black/60">
                                    <li>100% Merino Wool</li>
                                    <li>Dry Clean Only</li>
                                    <li>Responsibly Sourced</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="mt-64">
            <h2 class="text-2xl font-serif italic text-center mb-24 font-light">Latest Products</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
                <div class="group cursor-pointer space-y-6">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                        <img alt="Tapered Trousers" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMICpHKiVzsYbODs4nejWIvRDO8i0zBxs-sxYu4Ee28ohE6Qi6OYb-TOrh09nQ8Wh46ZjzKRR_DjKD3MQHG88IgXXcQTNntShw6KaeDXfOCr4PAfFA87mecqXetjZGeMdfqvMorcTWJXtBOdpv7a_p0Rc_Lg9BpWV3uvzL5sjLtef29FRJfI_MnZe2NiquIZvq-fEdc31xX24Dgoadz7bMfjaTZsJbYkFhJJLx-zmFSyROfilKVpUCB6FhKby8IfwZqxJ46QG4SH8" />
                    </div>
                    <div class="flex justify-between text-[10px] uppercase tracking-[0.2em]">
                        <span>Tapered Trousers</span>
                        <span class="opacity-40">$320</span>
                    </div>
                </div>
                <div class="group cursor-pointer space-y-6">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                        <img alt="Silk Camisole" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJxs0gWQag59_oG9dHrjA9j2kwQSqtfoMplo2PPpGR1OW6T_v5cvjM_8nMC7nwSnudhuIW3f_lcxiObN3lH8fmpfK8PKYF6B4-RyT3_KNjGYtw6hPRuigDZVE0GbsHoSA-shmZ06i8hsUaFEiUg3YkZ_wU1lZtGIw3mOWGO14NqXwHxt1tmlMWr-u9kUCqt623wnsM2qNCvpsTz09gHb2QlImj95I9JfEQt4cv8rFLcP-HFsFoa2wzRgoW7bEV5QU6foLWV50OyYM" />
                    </div>
                    <div class="flex justify-between text-[10px] uppercase tracking-[0.2em]">
                        <span>Silk Camisole</span>
                        <span class="opacity-40">$185</span>
                    </div>
                </div>
                <div class="group cursor-pointer space-y-6">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                        <img alt="Square Toe Boots" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgAPQSL6U0p1bHo7SjQRIiZBWR_syRL2ph7Iw5Gwe-2Y6nAdju1RLjkVEove02ruiocZAZHMw_r9W66IFrK2qDZa3hHpcNNz96w5k02SzBtkv4lIY8PP6Y8h2gGNbkdMIC549LpBPjpycRVTV5kHc4FWvekABTpSoe-e-SrfDd___V5009g0dY6OvJpFRwJfn9Dg0IazTp0jHKc54zez_eFvqZJJ5CZLCgI6rHbzdCyHotKByAT_CUc1geivsRjAv-sQI3xF_N7Us" />
                    </div>
                    <div class="flex justify-between text-[10px] uppercase tracking-[0.2em]">
                        <span>Square Toe Boots</span>
                        <span class="opacity-40">$540</span>
                    </div>
                </div>
                <div class="group cursor-pointer space-y-6">
                    <div class="aspect-[3/4] overflow-hidden bg-gray-50">
                        <img alt="Leather Tote" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALBhj9WG9eKVpliNUl7OmnZtKQovCN_qbyVctoMb_7UqdQXZJJkS11f8KN4kReqJBtv87vEBFTlKKuogi44Cf98wg4t1u3ihCFvy7ru4LDJIGe5JOJ24ah0Ft0fAoXCkjxgCy7ZVKeer-Ux9NSzIipO_6chFHU3J4snvTzftaBF2hDLu63FvlwMPUOSH7DlLhWB9mMf_MNUq4A2GflUzgj7dT4XNzYzXJ6pv6p0Ewr_PyX5aZWToyIt2sWhkKS549739fYebyO2Pk" />
                    </div>
                    <div class="flex justify-between text-[10px] uppercase tracking-[0.2em]">
                        <span>Leather Tote</span>
                        <span class="opacity-40">$680</span>
                    </div>
                </div>
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