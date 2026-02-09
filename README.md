# ImgUpload V2 🖼️

> Ứng dụng upload và chia sẻ ảnh nhanh chóng với ImgBB API

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=flat&logo=tailwind-css&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

## ✨ Tính năng

- 🚀 **Upload nhanh** - Kéo thả hoặc chọn file để upload ảnh
- 🔗 **Nhiều định dạng link** - Direct Link, HTML, BBCode, Markdown
- 📋 **Copy nhanh** - Sao chép link chỉ với một click
- 🔑 **Quản lý API Key** - Cấu hình API key ngay trên giao diện
- 🎨 **Giao diện hiện đại** - Dark mode, glassmorphism, responsive
- 📱 **Responsive** - Hoạt động tốt trên mọi thiết bị

## 📁 Cấu trúc thư mục

```
ImgurUploadV2/
├── assets/
│   └── js/
│       └── app.js          # Logic JavaScript chính
├── core/                    # Thư mục core (dự phòng)
├── layout/
│   ├── header.php          # Header & Tailwind config
│   ├── nav.php             # Navigation bar
│   ├── sidebar.php         # Sidebar với cấu hình API
│   └── footer.php          # Footer & script includes
├── .env                    # Cấu hình môi trường
├── .htaccess               # Cấu hình SEO & bảo mật
└── index.php               # Trang chủ upload
```

## 🚀 Cài đặt

### Yêu cầu
- PHP 7.4+
- Apache với mod_rewrite enabled
- ImgBB API Key (miễn phí)

### Bước cài đặt

1. **Clone hoặc download project**
   ```bash
   git clone https://github.com/your-username/ImgurUploadV2.git
   ```

2. **Copy vào thư mục web server**
   ```bash
   # XAMPP
   cp -r ImgurUploadV2 C:/xampp/htdocs/
   
   # Laragon
   cp -r ImgurUploadV2 C:/laragon/www/
   ```

3. **Lấy ImgBB API Key**
   - Truy cập [https://api.imgbb.com/](https://api.imgbb.com/)
   - Đăng ký/đăng nhập tài khoản
   - Copy API Key

4. **Cấu hình API Key** (chọn 1 trong 2 cách)
   
   **Cách 1:** Qua giao diện web
   - Truy cập website
   - Click "Cấu hình API" trên sidebar
   - Nhập API key và lưu

   **Cách 2:** Qua file .env
   ```env
   IMGBB_API_KEY=your_api_key_here
   ```

5. **Truy cập website**
   ```
   http://localhost/ImgurUploadV2
   ```

## 💡 Hướng dẫn sử dụng

1. **Upload ảnh**
   - Kéo thả ảnh vào vùng upload, hoặc
   - Click "Chọn ảnh" để chọn file

2. **Lấy link chia sẻ**
   - Sau khi upload thành công, các loại link sẽ hiển thị:
     - **Direct Link** - Link trực tiếp đến ảnh
     - **HTML** - Code embed cho website
     - **BBCode** - Dùng cho forum
     - **Markdown** - Dùng cho GitHub, blog...

3. **Copy link**
   - Click icon copy bên cạnh mỗi loại link

## ⚡ Định dạng hỗ trợ

| Định dạng | Kích thước tối đa |
|-----------|-------------------|
| JPG/JPEG  | 32 MB            |
| PNG       | 32 MB            |
| GIF       | 32 MB            |

## 🔧 Cấu hình nâng cao

### SEO & Performance (.htaccess)
- ✅ Ẩn đuôi .php trong URL
- ✅ Security Headers (XSS, Clickjacking protection)
- ✅ Gzip Compression
- ✅ Browser Caching
- ⚙️ HTTPS redirect (uncomment để bật)

### Tùy chỉnh giao diện
Màu sắc có thể thay đổi trong `layout/header.php`:
```javascript
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#6366f1',   // Màu chính
                secondary: '#8b5cf6', // Màu phụ
            }
        }
    }
}
```

## 📝 API Reference

Website sử dụng [ImgBB API](https://api.imgbb.com/) để upload ảnh.

**Endpoint:** `POST https://api.imgbb.com/1/upload`

**Parameters:**
- `key` - API key (bắt buộc)
- `image` - Base64 hoặc file ảnh (bắt buộc)

## 🤝 Đóng góp

Mọi đóng góp đều được chào đón! Vui lòng:
1. Fork project
2. Tạo branch mới (`git checkout -b feature/TinhNangMoi`)
3. Commit changes (`git commit -m 'Thêm tính năng mới'`)
4. Push to branch (`git push origin feature/TinhNangMoi`)
5. Tạo Pull Request

## 📄 License

MIT License - Xem file [LICENSE](LICENSE) để biết thêm chi tiết.

## 👨‍💻 Tác giả

Được phát triển với ❤️

---

⭐ Nếu thấy hữu ích, hãy star repo này nhé!
