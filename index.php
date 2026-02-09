<?php include 'layout/header.php'; ?>
<?php include 'layout/nav.php'; ?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary via-primary-dark to-primary overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent rounded-full filter blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-white">
                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Upload và chia sẻ ảnh
                    <span class="text-accent">dễ dàng</span>
                </h1>
                <p class="text-lg text-white/80 mb-8 leading-relaxed">
                    Nền tảng upload ảnh miễn phí, nhanh chóng và đáng tin cậy.
                    Hỗ trợ nhiều định dạng link để chia sẻ trên mọi nền tảng.
                </p>

                <div class="flex flex-wrap gap-4 mb-8">
                    <div class="flex items-center text-white/90">
                        <i data-lucide="check" class="w-5 h-5 text-accent mr-2"></i>
                        Miễn phí 100%
                    </div>
                    <div class="flex items-center text-white/90">
                        <i data-lucide="check" class="w-5 h-5 text-accent mr-2"></i>
                        Tối đa 32MB
                    </div>
                    <div class="flex items-center text-white/90">
                        <i data-lucide="check" class="w-5 h-5 text-accent mr-2"></i>
                        Không giới hạn
                    </div>
                </div>

                <a href="#upload"
                    class="inline-flex items-center px-6 py-3 bg-white text-primary font-semibold rounded-lg hover:bg-accent hover:text-white transition-all shadow-lg hover:shadow-xl">
                    Bắt đầu Upload
                    <i data-lucide="arrow-right" class="w-5 h-5 ml-2"></i>
                </a>
            </div>

            <!-- Right - Stats -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="text-4xl font-bold text-white mb-2">10K+</div>
                    <div class="text-white/70">Ảnh đã upload</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="text-4xl font-bold text-white mb-2">5K+</div>
                    <div class="text-white/70">Người dùng</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="text-4xl font-bold text-white mb-2">99.9%</div>
                    <div class="text-white/70">Uptime</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="text-4xl font-bold text-white mb-2">24/7</div>
                    <div class="text-white/70">Hỗ trợ</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upload Section -->
<section id="upload" class="py-16 bg-light">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-dark mb-3">Upload ảnh của bạn</h2>
            <p class="text-secondary">Kéo thả hoặc chọn file để bắt đầu upload</p>
        </div>

        <!-- Upload Zone -->
        <div id="dropZone"
            class="upload-zone bg-white rounded-2xl border-2 border-dashed border-gray-300 p-12 text-center cursor-pointer shadow-card">

            <!-- Upload Icon -->
            <div class="mb-6">
                <div
                    class="w-24 h-24 mx-auto bg-gradient-to-br from-primary/10 to-accent/10 rounded-full flex items-center justify-center pulse-animation">
                    <i data-lucide="cloud-upload" class="w-12 h-12 text-primary"></i>
                </div>
            </div>

            <h3 class="text-2xl font-bold text-dark mb-2">Kéo thả ảnh vào đây</h3>
            <p class="text-secondary mb-6">hoặc nhấp để chọn tệp từ máy tính</p>

            <input type="file" id="fileInput" accept="image/*" class="hidden">
            <button onclick="document.getElementById('fileInput').click()"
                class="btn-primary inline-flex items-center px-8 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg font-semibold">
                <i data-lucide="upload" class="w-5 h-5 mr-2"></i>
                Chọn ảnh
            </button>

            <div class="mt-6 flex flex-wrap justify-center gap-4 text-sm text-secondary">
                <span class="flex items-center">
                    <i data-lucide="image" class="w-4 h-4 mr-1 text-success"></i>
                    JPG, PNG, GIF
                </span>
                <span class="flex items-center">
                    <i data-lucide="file-warning" class="w-4 h-4 mr-1 text-success"></i>
                    Tối đa 32MB
                </span>
            </div>
        </div>

        <!-- Upload Options -->
        <div class="mt-6 bg-white rounded-2xl shadow-card p-6">
            <div class="flex items-center mb-4">
                <i data-lucide="settings-2" class="w-5 h-5 text-primary mr-2"></i>
                <h4 class="font-semibold text-dark">Tùy chọn Upload</h4>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <!-- Custom Filename -->
                <div>
                    <label class="block text-sm font-medium text-dark mb-2">
                        <i data-lucide="file-edit" class="w-4 h-4 inline mr-1"></i>
                        Tên file (tùy chọn)
                    </label>
                    <input type="text" id="customFilename" placeholder="Để trống để dùng tên gốc"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                </div>

                <!-- Expiration Time -->
                <div>
                    <label class="block text-sm font-medium text-dark mb-2">
                        <i data-lucide="timer" class="w-4 h-4 inline mr-1"></i>
                        Thời gian tự xóa
                    </label>
                    <select id="expirationTime"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Không tự xóa (Vĩnh viễn)</option>
                        <option value="60">1 phút</option>
                        <option value="300">5 phút</option>
                        <option value="600">10 phút</option>
                        <option value="3600">1 giờ</option>
                        <option value="86400">1 ngày</option>
                        <option value="604800">1 tuần</option>
                        <option value="2592000">1 tháng</option>
                        <option value="15552000">6 tháng (Tối đa)</option>
                    </select>
                    <p class="text-xs text-secondary mt-1">
                        <i data-lucide="info" class="w-3 h-3 inline mr-1"></i>
                        Ảnh sẽ tự động bị xóa sau khoảng thời gian đã chọn (60-15552000 giây)
                    </p>
                </div>
            </div>

            <!-- VietQR Option -->
            <div class="mt-4 pt-4 border-t border-gray-100">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" id="generateVietQR" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/20 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                    </div>
                    <div class="ms-3">
                        <span class="text-sm font-medium text-dark">Tạo VietQR</span>
                        <p class="text-xs text-secondary">Tự động tạo mã QR thanh toán từ link ảnh</p>
                    </div>
                </label>
            </div>
        </div>

        <!-- Preview Section -->
        <div id="previewSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-card p-6">
                <h4 class="font-semibold text-dark mb-4">Xem trước</h4>
                <img id="previewImage" class="max-w-full max-h-80 mx-auto rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Progress Section -->
        <div id="progressSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-card p-6">
                <div class="flex items-center justify-between mb-3">
                    <span class="font-medium text-dark">Đang upload...</span>
                    <span id="progressPercent" class="text-primary font-semibold">0%</span>
                </div>
                <div class="h-3 bg-gray-200 rounded-full overflow-hidden">
                    <div id="progressBar"
                        class="h-full bg-primary progress-bar rounded-full transition-all duration-300"
                        style="width: 0%"></div>
                </div>
                <p id="progressText" class="text-sm text-secondary mt-2 text-center">Vui lòng đợi...</p>
            </div>
        </div>

        <!-- Result Section -->
        <div id="resultSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-card overflow-hidden">
                <!-- Success Header -->
                <div class="bg-gradient-to-r from-success to-emerald-500 px-6 py-4">
                    <div class="flex items-center text-white">
                        <i data-lucide="check-circle" class="w-6 h-6 mr-2"></i>
                        <span class="font-semibold text-lg">Upload thành công!</span>
                    </div>
                </div>

                <!-- Links Content -->
                <div class="p-6 space-y-4">
                    <!-- Direct Link -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-dark mb-2">
                            <i data-lucide="link" class="w-4 h-4 mr-2 text-primary"></i>
                            Direct Link
                        </label>
                        <div class="flex">
                            <input type="text" id="directLink" readonly
                                class="flex-1 bg-light border border-gray-200 rounded-l-lg px-4 py-3 text-sm focus:outline-none focus:border-primary">
                            <button onclick="copyToClipboard('directLink')"
                                class="px-4 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors">
                                <i data-lucide="copy" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- HTML Code -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-dark mb-2">
                            <i data-lucide="code" class="w-4 h-4 mr-2 text-warning"></i>
                            HTML
                        </label>
                        <div class="flex">
                            <input type="text" id="htmlCode" readonly
                                class="flex-1 bg-light border border-gray-200 rounded-l-lg px-4 py-3 text-sm focus:outline-none focus:border-primary font-mono">
                            <button onclick="copyToClipboard('htmlCode')"
                                class="px-4 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors">
                                <i data-lucide="copy" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- BBCode -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-dark mb-2">
                            <i data-lucide="message-square" class="w-4 h-4 mr-2 text-danger"></i>
                            BBCode (Forum)
                        </label>
                        <div class="flex">
                            <input type="text" id="bbCode" readonly
                                class="flex-1 bg-light border border-gray-200 rounded-l-lg px-4 py-3 text-sm focus:outline-none focus:border-primary font-mono">
                            <button onclick="copyToClipboard('bbCode')"
                                class="px-4 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors">
                                <i data-lucide="copy" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Markdown -->
                    <div>
                        <label class="flex items-center text-sm font-medium text-dark mb-2">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2 text-secondary"></i>
                            Markdown
                        </label>
                        <div class="flex">
                            <input type="text" id="markdown" readonly
                                class="flex-1 bg-light border border-gray-200 rounded-l-lg px-4 py-3 text-sm focus:outline-none focus:border-primary font-mono">
                            <button onclick="copyToClipboard('markdown')"
                                class="px-4 bg-primary text-white rounded-r-lg hover:bg-primary-dark transition-colors">
                                <i data-lucide="copy" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- VietQR Section (Hidden by default) -->
                    <div id="vietQRSection" class="hidden pt-4 border-t border-gray-100">
                        <div class="flex items-center mb-3">
                            <i data-lucide="qr-code" class="w-5 h-5 text-primary mr-2"></i>
                            <span class="font-semibold text-dark">Mã QR</span>
                        </div>
                        <div class="text-center">
                            <img id="vietQRImage" alt="VietQR"
                                class="mx-auto rounded-lg shadow-md border border-gray-200">
                            <p class="text-xs text-secondary mt-2">Quét mã QR để truy cập link ảnh</p>
                        </div>
                    </div>

                    <!-- Upload Another Button -->
                    <div class="pt-4 border-t border-gray-100">
                        <button onclick="resetUpload()"
                            class="w-full py-3 border-2 border-primary text-primary rounded-lg font-semibold hover:bg-primary hover:text-white transition-all">
                            Upload ảnh khác
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VietQR Section -->
<section id="vietqr" class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-dark mb-3">
                <i data-lucide="qr-code" class="w-8 h-8 inline mr-2 text-primary"></i>
                Tạo VietQR Ngân Hàng
            </h2>
            <p class="text-secondary">Tạo mã QR thanh toán nhanh chóng theo chuẩn VietQR</p>
        </div>

        <div class="bg-light rounded-2xl shadow-card p-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Form -->
                <div class="space-y-4">
                    <!-- Bank Selection -->
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">
                            <i data-lucide="building-2" class="w-4 h-4 inline mr-1"></i>
                            Ngân hàng
                        </label>
                        <select id="bankSelect"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">-- Chọn ngân hàng --</option>
                            <option value="VCB">Vietcombank (VCB)</option>
                            <option value="TCB">Techcombank (TCB)</option>
                            <option value="MB">MB Bank</option>
                            <option value="ACB">ACB</option>
                            <option value="VPB">VPBank</option>
                            <option value="TPB">TPBank</option>
                            <option value="BIDV">BIDV</option>
                            <option value="VIB">VIB</option>
                            <option value="SHB">SHB</option>
                            <option value="STB">Sacombank</option>
                            <option value="MSB">MSB</option>
                            <option value="OCB">OCB</option>
                            <option value="EIB">Eximbank</option>
                            <option value="HDB">HDBank</option>
                            <option value="NAB">Nam A Bank</option>
                            <option value="SCB">SCB</option>
                            <option value="VIETINBANK">VietinBank</option>
                            <option value="AGRIBANK">Agribank</option>
                        </select>
                    </div>

                    <!-- Account Number -->
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">
                            <i data-lucide="credit-card" class="w-4 h-4 inline mr-1"></i>
                            Số tài khoản
                        </label>
                        <input type="text" id="accountNumber" placeholder="Nhập số tài khoản"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>

                    <!-- Account Name -->
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">
                            <i data-lucide="user" class="w-4 h-4 inline mr-1"></i>
                            Tên chủ tài khoản
                        </label>
                        <input type="text" id="accountName" placeholder="VD: NGUYEN VAN A"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent uppercase">
                    </div>

                    <!-- Amount -->
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">
                            <i data-lucide="banknote" class="w-4 h-4 inline mr-1"></i>
                            Số tiền (VNĐ)
                        </label>
                        <input type="number" id="qrAmount" placeholder="Để trống nếu không cố định"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-dark mb-2">
                            <i data-lucide="file-text" class="w-4 h-4 inline mr-1"></i>
                            Nội dung chuyển khoản
                        </label>
                        <input type="text" id="qrDescription" placeholder="VD: Thanh toan don hang 123"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                    </div>

                    <!-- Generate Button -->
                    <button onclick="generateVietQR()"
                        class="w-full py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg font-semibold hover:shadow-lg transition-all flex items-center justify-center">
                        <i data-lucide="qr-code" class="w-5 h-5 mr-2"></i>
                        Tạo mã QR
                    </button>
                </div>

                <!-- QR Preview -->
                <div class="flex flex-col items-center justify-center">
                    <div id="vietQRPreview" class="hidden">
                        <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-200">
                            <img id="vietQRCodeImage" alt="VietQR" class="w-64 h-64 object-contain">
                        </div>
                        <p class="text-center text-sm text-secondary mt-3">Quét mã để thanh toán</p>

                        <!-- Download & Copy -->
                        <div class="flex gap-2 mt-4">
                            <button onclick="downloadVietQR()"
                                class="flex-1 py-2 bg-success text-white rounded-lg text-sm font-medium hover:bg-green-600 transition-colors flex items-center justify-center">
                                <i data-lucide="download" class="w-4 h-4 mr-1"></i>
                                Tải xuống
                            </button>
                            <button onclick="copyVietQRLink()"
                                class="flex-1 py-2 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary-dark transition-colors flex items-center justify-center">
                                <i data-lucide="copy" class="w-4 h-4 mr-1"></i>
                                Copy link
                            </button>
                        </div>
                    </div>

                    <!-- Placeholder when no QR -->
                    <div id="vietQRPlaceholder" class="text-center text-gray-400">
                        <i data-lucide="scan-line" class="w-24 h-24 mx-auto mb-4 opacity-30"></i>
                        <p>Điền thông tin và nhấn "Tạo mã QR"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-dark mb-3">Tính năng nổi bật</h2>
            <p class="text-secondary max-w-2xl mx-auto">Nền tảng upload ảnh với nhiều tính năng hữu ích, giúp bạn chia
                sẻ ảnh dễ dàng</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Feature 1 -->
            <div class="card-hover bg-light rounded-2xl p-6 text-center">
                <div
                    class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-primary/10 to-primary/20 rounded-2xl flex items-center justify-center">
                    <i data-lucide="zap" class="w-8 h-8 text-primary"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Tốc độ cao</h3>
                <p class="text-secondary text-sm">Upload nhanh chóng, xử lý tức thì</p>
            </div>

            <!-- Feature 2 -->
            <div class="card-hover bg-light rounded-2xl p-6 text-center">
                <div
                    class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-success/10 to-success/20 rounded-2xl flex items-center justify-center">
                    <i data-lucide="shield" class="w-8 h-8 text-success"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">An toàn & Bảo mật</h3>
                <p class="text-secondary text-sm">Dữ liệu được mã hóa và bảo vệ</p>
            </div>

            <!-- Feature 3 -->
            <div class="card-hover bg-light rounded-2xl p-6 text-center">
                <div
                    class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-warning/10 to-warning/20 rounded-2xl flex items-center justify-center">
                    <i data-lucide="link-2" class="w-8 h-8 text-warning"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Nhiều định dạng link</h3>
                <p class="text-secondary text-sm">Direct, HTML, BBCode, Markdown</p>
            </div>

            <!-- Feature 4 -->
            <div class="card-hover bg-light rounded-2xl p-6 text-center">
                <div
                    class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-accent/10 to-accent/20 rounded-2xl flex items-center justify-center">
                    <i data-lucide="gift" class="w-8 h-8 text-accent"></i>
                </div>
                <h3 class="font-bold text-dark mb-2">Hoàn toàn miễn phí</h3>
                <p class="text-secondary text-sm">Không giới hạn số lượng upload</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-16 bg-light">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-dark mb-3">Cách sử dụng</h2>
            <p class="text-secondary">Chỉ với 3 bước đơn giản</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Step 1 -->
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-card p-8 text-center card-hover">
                    <div
                        class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6">
                        1</div>
                    <h3 class="font-bold text-dark text-lg mb-3">Chọn ảnh</h3>
                    <p class="text-secondary">Kéo thả ảnh vào khung upload hoặc click để chọn file từ máy tính</p>
                </div>
                <!-- Arrow -->
                <div class="hidden md:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="arrow-right" class="w-8 h-8 text-primary"></i>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative">
                <div class="bg-white rounded-2xl shadow-card p-8 text-center card-hover">
                    <div
                        class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6">
                        2</div>
                    <h3 class="font-bold text-dark text-lg mb-3">Upload tự động</h3>
                    <p class="text-secondary">Hệ thống tự động upload lên server với tốc độ cao</p>
                </div>
                <!-- Arrow -->
                <div class="hidden md:block absolute top-1/2 -right-4 transform -translate-y-1/2">
                    <i data-lucide="arrow-right" class="w-8 h-8 text-primary"></i>
                </div>
            </div>

            <!-- Step 3 -->
            <div>
                <div class="bg-white rounded-2xl shadow-card p-8 text-center card-hover">
                    <div
                        class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-6">
                        3</div>
                    <h3 class="font-bold text-dark text-lg mb-3">Nhận link</h3>
                    <p class="text-secondary">Copy link chia sẻ với nhiều định dạng: Direct, HTML, BBCode, Markdown</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- API Key Modal -->
<div id="apiKeyModal"
    class="hidden fixed inset-0 bg-black/60 backdrop-blur-sm flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full overflow-hidden animate-fade-in">
        <!-- Modal Header -->
        <div class="bg-gradient-to-r from-primary to-primary-dark px-6 py-4">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-bold text-white flex items-center">
                    <i data-lucide="settings" class="w-6 h-6 mr-2"></i>
                    Cấu hình API Key
                </h3>
                <button onclick="closeApiKeyModal()" class="text-white/80 hover:text-white">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <div class="p-6 space-y-4">
            <!-- Status -->
            <div id="apiKeyStatus" class="px-4 py-3 rounded-lg bg-warning/10 border border-warning/30">
                <div class="flex items-center text-warning text-sm">
                    <i data-lucide="alert-circle" class="w-4 h-4 mr-2"></i>
                    <span>Chưa cấu hình API Key</span>
                </div>
            </div>

            <!-- Input -->
            <div>
                <label class="block text-sm font-medium text-dark mb-2">ImgBB API Key</label>
                <input type="text" id="apiKeyInput" placeholder="Nhập API key của bạn"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
            </div>

            <!-- Info Box -->
            <div class="bg-primary/5 border border-primary/20 rounded-lg p-4">
                <p class="text-sm text-dark">
                    <strong class="text-primary">Lấy API key miễn phí:</strong><br>
                    1. Truy cập <a href="https://api.imgbb.com/" target="_blank"
                        class="text-primary underline hover:no-underline">https://api.imgbb.com/</a><br>
                    2. Đăng ký hoặc đăng nhập<br>
                    3. Copy API key và dán vào đây
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-3 pt-2">
                <button onclick="saveApiKey()"
                    class="flex-1 px-6 py-3 bg-gradient-to-r from-primary to-primary-dark text-white rounded-lg font-semibold hover:shadow-lg transition-all">
                    Lưu API Key
                </button>
                <button onclick="closeApiKeyModal()"
                    class="px-6 py-3 bg-gray-100 text-dark rounded-lg font-medium hover:bg-gray-200 transition-all">
                    Hủy
                </button>
            </div>
        </div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>