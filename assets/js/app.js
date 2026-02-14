// API Key Management
function getApiKey() {
    return localStorage.getItem('imgbb_api_key');
}

function saveApiKey() {
    const apiKey = document.getElementById('apiKeyInput').value.trim();
    if (!apiKey) {
        Swal.fire({
            icon: 'warning',
            title: 'Thiếu API Key',
            text: 'Vui lòng nhập API key!',
            confirmButtonColor: '#0d6efd'
        });
        return;
    }
    
    localStorage.setItem('imgbb_api_key', apiKey);
    updateApiKeyStatus();
    closeApiKeyModal();
    Swal.fire({
        icon: 'success',
        title: 'Thành công!',
        text: 'Đã lưu API key thành công!',
        confirmButtonColor: '#0d6efd',
        timer: 2000,
        timerProgressBar: true
    });
}

function updateApiKeyStatus() {
    const apiKey = getApiKey();
    const statusEl = document.getElementById('apiKeyStatus');
    
    if (apiKey) {
        statusEl.className = 'px-4 py-3 rounded-lg bg-green-500/10 border border-green-500/50';
        statusEl.innerHTML = `
            <div class="flex items-center space-x-2 text-green-500 text-sm">
                <i data-lucide="check" class="w-4 h-4"></i>
                <span>Đã cấu hình</span>
            </div>
        `;
    } else {
        statusEl.className = 'px-4 py-3 rounded-lg bg-yellow-500/10 border border-yellow-500/50';
        statusEl.innerHTML = `
            <div class="flex items-center space-x-2 text-yellow-500 text-sm">
                <i data-lucide="alert-circle" class="w-4 h-4"></i>
                <span>Chưa cấu hình</span>
            </div>
        `;
    }
    // Re-initialize icons for the new content
    if (window.lucide) lucide.createIcons();
}

// Check API Key on page load - show SweetAlert if not configured
function checkApiKeyOnLoad() {
    const apiKey = getApiKey();
    if (!apiKey) {
        Swal.fire({
            icon: 'warning',
            title: 'Chưa cấu hình API Key',
            html: `
                <p class="mb-2">Bạn cần cấu hình <strong>ImgBB API Key</strong> để sử dụng chức năng upload ảnh.</p>
                <p class="text-sm text-gray-500">Lấy API key miễn phí tại: <a href="https://api.imgbb.com/" target="_blank" class="text-blue-500 underline">api.imgbb.com</a></p>
            `,
            confirmButtonText: 'Cấu hình ngay',
            confirmButtonColor: '#0d6efd',
            showCancelButton: true,
            cancelButtonText: 'Để sau',
            cancelButtonColor: '#6c757d',
            allowOutsideClick: true
        }).then((result) => {
            if (result.isConfirmed) {
                openApiKeyModal();
            }
        });
    }
}

// Modal Management
function openApiKeyModal() {
    const apiKey = getApiKey();
    if (apiKey) {
        document.getElementById('apiKeyInput').value = apiKey;
    }
    document.getElementById('apiKeyModal').classList.remove('hidden');
    // Re-initialize icons just in case
    if (window.lucide) lucide.createIcons();
}

function closeApiKeyModal() {
    document.getElementById('apiKeyModal').classList.add('hidden');
}

// Copy to Clipboard
function copyToClipboard(elementId) {
    const input = document.getElementById(elementId);
    input.select();
    document.execCommand('copy');
    
    // Visual feedback
    const button = event.currentTarget;
    const originalHTML = button.innerHTML;
    button.innerHTML = `
        <i data-lucide="check" class="w-5 h-5 text-white"></i>
    `;
    if (window.lucide) lucide.createIcons();
    
    setTimeout(() => {
        button.innerHTML = originalHTML;
        if (window.lucide) lucide.createIcons();
    }, 1500);
}

// Upload Handler
function uploadImage(file) {
    const apiKey = getApiKey();
    
    if (!apiKey) {
        Swal.fire({
            icon: 'error',
            title: 'Chưa cấu hình API Key!',
            html: `
                <p>Vui lòng cấu hình <strong>ImgBB API Key</strong> trước khi upload.</p>
                <p class="text-sm text-gray-500 mt-2">Lấy API key miễn phí tại: <a href="https://api.imgbb.com/" target="_blank" class="text-blue-500 underline">api.imgbb.com</a></p>
            `,
            confirmButtonText: 'Cấu hình ngay',
            confirmButtonColor: '#0d6efd',
            showCancelButton: true,
            cancelButtonText: 'Hủy',
            cancelButtonColor: '#6c757d'
        }).then((result) => {
            if (result.isConfirmed) {
                openApiKeyModal();
            }
        });
        return;
    }
    
    // Get upload options
    const customFilename = document.getElementById('customFilename')?.value.trim() || '';
    const expirationTime = document.getElementById('expirationTime')?.value || '';
    const generateVietQR = document.getElementById('generateVietQR')?.checked || false;
    
    // Store VietQR preference for use after upload
    window.pendingVietQR = generateVietQR;
    
    // Show progress UI
    const progressSection = document.getElementById('progressSection');
    const resultSection = document.getElementById('resultSection');
    const progressBar = document.getElementById('progressBar');
    const progressPercent = document.getElementById('progressPercent');
    const progressText = document.getElementById('progressText');
    
    progressSection.classList.remove('hidden');
    resultSection.classList.add('hidden');
    
    // Reset progress bar
    progressBar.style.width = '0%';
    progressBar.classList.remove('animate-pulse');
    progressPercent.textContent = '0%';
    progressText.textContent = 'Đang chuẩn bị...';
    
    // Build FormData with options
    const formData = new FormData();
    formData.append('image', file);
    
    // Add custom filename if provided
    if (customFilename) {
        formData.append('name', customFilename);
    }
    
    // Add expiration time if selected
    if (expirationTime) {
        formData.append('expiration', expirationTime);
    }
    
    const xhr = new XMLHttpRequest();
    
    // Upload start event
    xhr.upload.onloadstart = function() {
        progressText.textContent = 'Bắt đầu upload...';
        console.log('Upload started');
    };
    
    // Real-time upload progress event
    xhr.upload.onprogress = function(e) {
        if (e.lengthComputable && e.total > 0) {
            const percentComplete = Math.min(100, Math.max(0, Math.round((e.loaded / e.total) * 100)));
            
            progressBar.style.width = percentComplete + '%';
            progressPercent.textContent = percentComplete + '%';
            progressText.textContent = `Đang upload: ${percentComplete}%`;
            
            console.log(`Upload progress: ${e.loaded}/${e.total} (${percentComplete}%)`);
        }
    };
    
    // Upload complete (data sent, waiting for response)
    xhr.upload.onload = function() {
        progressBar.style.width = '100%';
        progressPercent.textContent = '100%';
        progressText.textContent = 'Đang xử lý trên server...';
        progressBar.classList.add('animate-pulse');
        console.log('Upload complete, waiting for server response');
    };
    
    // Server response received
    xhr.onload = function() {
        progressBar.classList.remove('animate-pulse');
        
        if (xhr.status === 200) {
            try {
                const response = JSON.parse(xhr.responseText);
                if (response.success) {
                    progressText.textContent = 'Upload thành công!';
                    progressBar.style.width = '100%';
                    progressPercent.textContent = '100%';
                    
                    setTimeout(() => {
                        progressSection.classList.add('hidden');
                        // Reset for next upload
                        progressBar.style.width = '0%';
                        progressPercent.textContent = '0%';
                        displayResult(response.data);
                    }, 500);
                } else {
                    throw new Error(response.error ? response.error.message : 'Upload failed');
                }
            } catch (error) {
                console.error('API Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi Upload',
                    text: error.message,
                    confirmButtonColor: '#0d6efd'
                });
                progressText.textContent = 'Lỗi upload!';
                progressSection.classList.add('hidden');
            }
        } else {
            console.error('Request failed', xhr.status, xhr.statusText);
            Swal.fire({
                icon: 'error',
                title: 'Lỗi kết nối',
                text: xhr.statusText || 'Không thể kết nối đến server',
                confirmButtonColor: '#0d6efd'
            });
            progressText.textContent = 'Lỗi kết nối!';
            progressSection.classList.add('hidden');
        }
    };
    
    // Network error
    xhr.onerror = function() {
        progressBar.classList.remove('animate-pulse');
        console.error('Network Error');
        Swal.fire({
            icon: 'error',
            title: 'Lỗi mạng',
            text: 'Vui lòng kiểm tra kết nối internet!',
            confirmButtonColor: '#0d6efd'
        });
        progressText.textContent = 'Lỗi mạng!';
        progressSection.classList.add('hidden');
    };
    
    // Timeout handling
    xhr.ontimeout = function() {
        progressBar.classList.remove('animate-pulse');
        console.error('Request timeout');
        Swal.fire({
            icon: 'warning',
            title: 'Quá thời gian',
            text: 'Quá thời gian chờ! Vui lòng thử lại.',
            confirmButtonColor: '#0d6efd'
        });
        progressText.textContent = 'Quá thời gian!';
        progressSection.classList.add('hidden');
    };
    
    // Open and send request
    xhr.open('POST', 'https://api.imgbb.com/1/upload?key=' + apiKey, true);
    xhr.timeout = 60000; // 60 second timeout
    xhr.send(formData);
}

function displayResult(data) {
    // Show preview
    document.getElementById('previewImage').src = data.url;
    document.getElementById('previewSection').classList.remove('hidden');
    
    // Fill link fields
    document.getElementById('directLink').value = data.url;
    document.getElementById('htmlCode').value = `<img src="${data.url}" alt="${data.title || 'image'}">`;
    document.getElementById('bbCode').value = `[img]${data.url}[/img]`;
    document.getElementById('markdown').value = `![${data.title || 'image'}](${data.url})`;
    
    // Handle VietQR if enabled
    const vietQRSection = document.getElementById('vietQRSection');
    const vietQRImage = document.getElementById('vietQRImage');
    
    if (window.pendingVietQR && vietQRSection && vietQRImage) {
        // Generate VietQR from image URL
        // Using VietQR API: https://img.vietqr.io/image/
        // Format: https://img.vietqr.io/image/BANK-ACCOUNT-template.png?addInfo=URL
        const encodedUrl = encodeURIComponent(data.url);
        const vietQRUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodedUrl}`;
        
        vietQRImage.src = vietQRUrl;
        vietQRSection.classList.remove('hidden');
    } else if (vietQRSection) {
        vietQRSection.classList.add('hidden');
    }
    
    // Reset VietQR flag
    window.pendingVietQR = false;
    
    // Show result section
    document.getElementById('resultSection').classList.remove('hidden');
    
    // Ensure icons are rendered
    if (window.lucide) lucide.createIcons();
}

// Drag and Drop Handler
const dropZone = document.getElementById('dropZone');
const fileInput = document.getElementById('fileInput');

if (dropZone) {
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('border-primary', 'bg-primary/5');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('border-primary', 'bg-primary/5');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-primary', 'bg-primary/5');
        
        const file = e.dataTransfer.files[0];
        if (file && file.type.startsWith('image/')) {
            uploadImage(file);
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'File không hợp lệ',
                text: 'Vui lòng chọn file ảnh (JPG, PNG, GIF)!',
                confirmButtonColor: '#0d6efd'
            });
        }
    });

    // Click to upload
    dropZone.addEventListener('click', (e) => {
        // Prevent triggering if clicking specific children like the button (which already triggers it)
        if (e.target !== fileInput && !e.target.closest('button')) {
             fileInput.click();
        }
    });
}

if (fileInput) {
    fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
            uploadImage(file);
        }
    });
}

// =====================================================
// VietQR Functions
// =====================================================

// Store current VietQR URL
let currentVietQRUrl = '';

function generateVietQR() {
    const bankId = document.getElementById('bankSelect').value;
    const accountNo = document.getElementById('accountNumber').value.trim();
    const accountName = document.getElementById('accountName').value.trim();
    const amount = document.getElementById('qrAmount').value.trim();
    const description = document.getElementById('qrDescription').value.trim();
    
    // Validate required fields
    if (!bankId) {
        Swal.fire({
            icon: 'warning',
            title: 'Thiếu thông tin',
            text: 'Vui lòng chọn ngân hàng!',
            confirmButtonColor: '#0d6efd'
        });
        return;
    }
    if (!accountNo) {
        Swal.fire({
            icon: 'warning',
            title: 'Thiếu thông tin',
            text: 'Vui lòng nhập số tài khoản!',
            confirmButtonColor: '#0d6efd'
        });
        return;
    }
    
    // Build VietQR URL
    // Format: https://img.vietqr.io/image/{BANK_ID}-{ACCOUNT_NO}-compact2.png?amount={AMOUNT}&addInfo={DESC}&accountName={NAME}
    let qrUrl = `https://img.vietqr.io/image/${bankId}-${accountNo}-compact2.png`;
    
    const params = [];
    if (amount) params.push(`amount=${amount}`);
    if (description) params.push(`addInfo=${encodeURIComponent(description)}`);
    if (accountName) params.push(`accountName=${encodeURIComponent(accountName)}`);
    
    if (params.length > 0) {
        qrUrl += '?' + params.join('&');
    }
    
    // Store for copy/download
    currentVietQRUrl = qrUrl;
    
    // Update UI
    const qrImage = document.getElementById('vietQRCodeImage');
    const preview = document.getElementById('vietQRPreview');
    const placeholder = document.getElementById('vietQRPlaceholder');
    
    qrImage.src = qrUrl;
    preview.classList.remove('hidden');
    placeholder.classList.add('hidden');
    
    // Re-render Lucide icons in case new ones appeared
    if (window.lucide) lucide.createIcons();
}

function downloadVietQR() {
    if (!currentVietQRUrl) {
        Swal.fire({
            icon: 'info',
            title: 'Chưa có mã QR',
            text: 'Vui lòng tạo mã QR trước!',
            confirmButtonColor: '#0d6efd'
        });
        return;
    }
    
    // Create a temporary link to download
    const link = document.createElement('a');
    link.href = currentVietQRUrl;
    link.download = 'vietqr-payment.png';
    link.target = '_blank';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

function copyVietQRLink() {
    if (!currentVietQRUrl) {
        Swal.fire({
            icon: 'info',
            title: 'Chưa có mã QR',
            text: 'Vui lòng tạo mã QR trước!',
            confirmButtonColor: '#0d6efd'
        });
        return;
    }
    
    navigator.clipboard.writeText(currentVietQRUrl).then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Đã copy!',
            text: 'Đã copy link QR vào clipboard.',
            confirmButtonColor: '#0d6efd',
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
    }).catch(err => {
        console.error('Copy failed:', err);
        // Fallback
        const textarea = document.createElement('textarea');
        textarea.value = currentVietQRUrl;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        Swal.fire({
            icon: 'success',
            title: 'Đã copy!',
            text: 'Đã copy link QR vào clipboard.',
            confirmButtonColor: '#0d6efd',
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    updateApiKeyStatus();
    // Check API key and show SweetAlert if not configured
    checkApiKeyOnLoad();
    // Lucide is initialized in header script, but we can call it here too to be sure
    if (window.lucide) lucide.createIcons();
});
