<!-- Sponsor Banner -->
<section class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 py-4">
    <div class="max-w-7xl mx-auto px-4">
        <a href="https://123host.vn/hosting-mien-phi.html?utm_source=INV&utm_medium=FHREF&utm_campaign=132016"
            target="_blank" rel="noopener sponsored"
            class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-6 text-white group">
            <div class="flex items-center gap-2">
                <i data-lucide="server" class="w-5 h-5 text-yellow-300"></i>
                <span class="text-sm font-medium opacity-80">TÀI TRỢ BỞI</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-lg md:text-xl font-bold">🌐 123HOST.VN</span>
                <span class="hidden md:inline text-white/80">—</span>
                <span class="text-sm md:text-base text-white/90">Hosting Miễn Phí cho website của bạn</span>
            </div>
            <span
                class="inline-flex items-center gap-1 px-4 py-1.5 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold hover:bg-white/30 transition-all group-hover:scale-105">
                Đăng ký ngay
                <i data-lucide="external-link" class="w-4 h-4"></i>
            </span>
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Brand -->
            <div class="md:col-span-2">
                <div class="flex items-center space-x-3 mb-4">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-primary to-accent rounded-lg flex items-center justify-center">
                        <i data-lucide="image" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-xl font-bold">Img<span class="text-primary">Upload</span></span>
                </div>
                <p class="text-gray-400 mb-6 max-w-sm">
                    Nền tảng upload và chia sẻ ảnh miễn phí, nhanh chóng và đáng tin cậy. Hỗ trợ nhiều định dạng link.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i data-lucide="facebook" class="w-5 h-5"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i data-lucide="twitter" class="w-5 h-5"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-primary transition-colors">
                        <i data-lucide="github" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-lg mb-4">Liên kết</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="/" class="hover:text-primary transition-colors">Trang chủ</a></li>
                    <li><a href="#features" class="hover:text-primary transition-colors">Tính năng</a></li>
                    <li><a href="#how-it-works" class="hover:text-primary transition-colors">Hướng dẫn</a></li>
                    <li><a href="#api" class="hover:text-primary transition-colors">API</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h4 class="font-bold text-lg mb-4">Hỗ trợ</h4>
                <ul class="space-y-2 text-gray-400">
                    <li class="flex items-center">
                        <i data-lucide="mail" class="w-4 h-4 mr-2 text-primary"></i>
                        support@imgupload.vn
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="phone" class="w-4 h-4 mr-2 text-primary"></i>
                        0969 110 811
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2026 ImgUpload. All rights reserved.</p>
                <p class="mt-2 md:mt-0">Powered by <a href="https://nguyenquocanh.io.vn" target="_blank"
                        class="text-primary hover:underline">Nguyen Quoc Anh</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="/assets/js/app.js"></script>

<!-- Additional functions -->
<script>
    // Initialize Lucide icons
    document.addEventListener('DOMContentLoaded', function () {
        if (window.lucide) {
            lucide.createIcons();
        }
    });

    // Reset upload function
    function resetUpload() {
        document.getElementById('previewSection').classList.add('hidden');
        document.getElementById('resultSection').classList.add('hidden');
        document.getElementById('vietQRSection')?.classList.add('hidden');
        document.getElementById('fileInput').value = '';
        document.getElementById('customFilename').value = '';
    }
</script>
</body>

</html>