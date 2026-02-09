# Changelog

Tất cả thay đổi đáng chú ý của dự án sẽ được ghi lại trong file này.

Định dạng dựa trên [Keep a Changelog](https://keepachangelog.com/vi/1.0.0/),
và dự án này tuân theo [Semantic Versioning](https://semver.org/lang/vi/).

## [1.0.0] - 2026-02-09

### ✨ Thêm mới
- **Giao diện upload ảnh** - Drag & drop hoặc chọn file để upload
- **Tích hợp ImgBB API** - Upload ảnh lên ImgBB hosting
- **Nhiều định dạng link** - Direct Link, HTML, BBCode, Markdown
- **Quản lý API Key** - Cấu hình API key qua giao diện web
- **Lưu trữ localStorage** - API key được lưu an toàn trên trình duyệt
- **Progress bar** - Hiển thị tiến trình upload
- **Copy nhanh** - Sao chép link với một click và feedback trực quan

### 🎨 Giao diện
- **Dark mode** - Giao diện tối mặc định
- **Glassmorphism** - Hiệu ứng backdrop blur hiện đại
- **Gradient buttons** - Nút bấm gradient đẹp mắt
- **Responsive design** - Tương thích mọi kích thước màn hình
- **TailwindCSS** - Sử dụng Tailwind để styling

### 🔧 Cấu hình
- **SEO-friendly URLs** - Ẩn đuôi .php trong URL
- **Security headers** - Bảo vệ XSS, clickjacking
- **Gzip compression** - Nén tối ưu performance
- **Browser caching** - Cache ảnh và assets

### 📁 Cấu trúc
- `index.php` - Trang chủ upload
- `layout/` - Components giao diện (header, nav, sidebar, footer)
- `assets/js/` - JavaScript logic
- `.htaccess` - Cấu hình Apache
- `.env` - Cấu hình môi trường

---

## Hướng dẫn cập nhật

### Thêm phiên bản mới

```markdown
## [X.Y.Z] - YYYY-MM-DD

### ✨ Thêm mới
- Tính năng mới 1
- Tính năng mới 2

### 🔄 Thay đổi
- Thay đổi 1
- Thay đổi 2

### 🐛 Sửa lỗi
- Lỗi 1
- Lỗi 2

### 🗑️ Đã loại bỏ
- Tính năng bị loại bỏ
```

### Loại thay đổi
- `✨ Thêm mới` - Tính năng mới
- `🔄 Thay đổi` - Thay đổi tính năng hiện có
- `⚠️ Deprecated` - Tính năng sắp bị loại bỏ
- `🗑️ Đã loại bỏ` - Tính năng đã bị loại bỏ
- `🐛 Sửa lỗi` - Sửa lỗi
- `🔒 Bảo mật` - Vá lỗi bảo mật
