<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImgUpload - Chia sẻ ảnh dễ dàng</title>
    <meta name="description" content="Upload và chia sẻ ảnh nhanh chóng với ImgBB - Miễn phí, không giới hạn">
    <meta name="keywords" content="upload ảnh, chia sẻ ảnh, imgbb, hosting ảnh miễn phí">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Lucide CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0d6efd',
                        'primary-dark': '#0056b3',
                        secondary: '#6c757d',
                        accent: '#0dcaf0',
                        success: '#198754',
                        warning: '#ffc107',
                        danger: '#dc3545',
                        light: '#f8f9fa',
                        dark: '#212529',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'card': '0 0 20px rgba(0, 0, 0, 0.08)',
                        'card-hover': '0 10px 40px rgba(0, 0, 0, 0.12)',
                        'nav': '0 2px 10px rgba(0, 0, 0, 0.1)',
                    }
                }
            }
        }
    </script>

    <!-- Custom Styles -->
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #0d6efd;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0056b3;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Button animations */
        .btn-primary {
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.3);
        }

        /* Card animations */
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        /* Upload zone animation */
        .upload-zone {
            transition: all 0.3s ease;
        }

        .upload-zone:hover {
            border-color: #0d6efd;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.02) 0%, rgba(13, 202, 240, 0.02) 100%);
        }

        .upload-zone.dragover {
            border-color: #0d6efd;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.05) 0%, rgba(13, 202, 240, 0.05) 100%);
            transform: scale(1.01);
        }

        /* Pulse animation for upload icon */
        @keyframes pulse-ring {
            0% {
                transform: scale(0.9);
                opacity: 0.7;
            }

            50% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(0.9);
                opacity: 0.7;
            }
        }

        .pulse-animation {
            animation: pulse-ring 2s ease-in-out infinite;
        }

        /* Progress bar animation */
        .progress-bar {
            background: linear-gradient(90deg, #0d6efd 0%, #0dcaf0 50%, #0d6efd 100%);
            background-size: 200% 100%;
            animation: progress-shine 1.5s ease-in-out infinite;
        }

        @keyframes progress-shine {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }
    </style>
</head>

<body class="bg-light font-inter text-dark antialiased">