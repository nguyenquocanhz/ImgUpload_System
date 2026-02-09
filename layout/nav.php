<!-- Top Bar -->
<div class="bg-primary text-white py-2">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center text-sm">
        <div class="flex items-center space-x-4">
            <a href="tel:0969110811" class="flex items-center hover:text-accent transition-colors text-sm sm:text-lg">
                <i data-lucide="phone" class="w-4 h-4 mr-1"></i>
                0969 110 811
            </a>
            <a href="mailto:support@imgupload.vn" class="flex items-center hover:text-accent transition-colors">
                <i data-lucide="mail" class="w-4 h-4 mr-1"></i>
                support@imgupload.vn
            </a>
        </div>
        <div class="flex items-center space-x-3">
            <span class="text-white/80">Upload miễn phí, không giới hạn</span>
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="bg-white shadow-nav sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3">
                <div
                    class="w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                    <i data-lucide="image" class="w-6 h-6 text-white"></i>
                </div>
                <div>
                    <span class="text-xl font-bold text-dark">Img<span class="text-primary">Upload</span></span>
                    <p class="text-xs text-secondary -mt-1">Chia sẻ ảnh dễ dàng</p>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-dark font-medium hover:text-primary transition-colors relative group">
                    Trang chủ
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                </a>
                <a href="#features" class="text-secondary hover:text-primary transition-colors relative group">
                    Tính năng
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                </a>
                <a href="#how-it-works" class="text-secondary hover:text-primary transition-colors relative group">
                    Hướng dẫn
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                </a>
                <a href="#api" class="text-secondary hover:text-primary transition-colors relative group">
                    API
                    <span
                        class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span>
                </a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center space-x-3">
                <button onclick="openApiKeyModal()"
                    class="hidden sm:flex items-center px-4 py-2 text-primary border-2 border-primary rounded-lg font-medium hover:bg-primary hover:text-white transition-all">
                    <i data-lucide="key" class="w-4 h-4 mr-2"></i>
                    API Key
                </button>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden p-2 text-dark hover:text-primary">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
        <div class="px-4 py-3 space-y-2">
            <a href="/" class="block py-2 text-dark font-medium">Trang chủ</a>
            <a href="#features" class="block py-2 text-secondary hover:text-primary">Tính năng</a>
            <a href="#how-it-works" class="block py-2 text-secondary hover:text-primary">Hướng dẫn</a>
            <a href="#api" class="block py-2 text-secondary hover:text-primary">API</a>
            <button onclick="openApiKeyModal()"
                class="w-full mt-2 px-4 py-2 bg-primary text-white rounded-lg font-medium">
                Cấu hình API Key
            </button>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function () {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>