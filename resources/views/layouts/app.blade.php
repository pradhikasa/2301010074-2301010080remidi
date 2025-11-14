<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Universitas')</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* STYLING NAVIGASI */
        .main-nav {
            background-color: #ffffff;
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-start; 
        }
        .nav-item {
            margin-right: 20px;
        }
        .nav-link {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 5px 0;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: orange;
        }
        
        /* STYLING KONTEN UTAMA */
        .main-content {
            flex-grow: 1; 
            width: 100%;
            padding: 20px 15px;
            box-sizing: border-box;
        }
        .content-container {
            max-width: 900px; /* Batasi lebar container utama untuk konten about */
            margin: 0 auto;
            width: 100%;
        }

        /* STYLING FOOTER */
        .main-footer {
            background-color: #ffffff; 
            color: #333;
            padding: 10px 15px;
            text-align: right; 
            font-size: 0.8em;
            width: 100%;
            border-top: 1px solid #eee;
            box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.05); 
        }
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: flex-end; 
            max-width: 900px; /* Batasi lebar footer agar sejajar dengan konten */
            margin: 0 auto;
        }
        .footer-text {
            margin: 2px 0;
            line-height: 1.3;
        }
        .footer-links {
             font-weight: bold;
             margin-bottom: 5px;
             display: block;
        }
    </style>
    
    {{-- Sisipkan style tambahan dari view anak (khusus untuk Home) --}}
    @yield('styles') 
    
</head>
<body>

    <nav class="main-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
            {{-- Item Navigasi Sesuai Permintaan Gambar About --}}
    
            </li>
             {{-- Item Navigasi Sesuai Permintaan Sebelumnya --}}
            <li class="nav-item">
                <a href="#" class="nav-link">2301010074 Saktiya Yuda P</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">2301010080 Mohamad Roy</a>
            </li>
        </ul>
    </nav>
    <div class="main-content">
        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="footer-content">
            <p class="footer-text">© 2025 Company, Inc</p>
            {{-- Footer Teks Sesuai Gambar About --}}
            <p class="footer-links">Home About 2301010074 SAKTI feat</p>
            <p class="footer-text">2301010080 ROY Mohamad</p>
        </div>
    </footer>
    {{-- Tempat untuk menyertakan JS dari view anak (khusus untuk Home) --}}
    @yield('scripts')

</body>
</html>