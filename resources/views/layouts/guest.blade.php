<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
        <!-- Custom Styles -->
        <style>
            body, h1, h2, h3, h4, h5, h6, p, label {
                font-family: 'Tajawal', sans-serif;
            }
            
            input[type=button], button {
                font-family: 'Tajawal', sans-serif !important;
                font-size: 12px !important;
            }
            
            .rtl-container {
                direction: rtl;
                text-align: right;
            }
            
            .login-container {
                /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
                background: linear-gradient(135deg,rgb(236, 115, 16) 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 20px;
            }
            
            .login-card {
                background: white;
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                width: 100%;
                max-width: 400px;
            }
            
            .logo-container {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .logo-container img {
                width: 100px;
                height: auto;
            }
            
            .title {
                font-size: 30px;
                color: #8B4513;
                text-align: center;
                margin-bottom: 10px;
                font-weight: bold;
            }
            
            .subtitle {
                color: #666;
                text-align: center;
                margin-bottom: 30px;
            }
            
            .form-group {
                margin-bottom: 20px;
            }
            
            .form-label {
                display: block;
                margin-bottom: 8px;
                color: #333;
                font-weight: 500;
            }
            
            .form-input {
                width: 100%;
                padding: 12px 15px;
                border: 2px solid #e1e5e9;
                border-radius: 8px;
                font-size: 14px;
                transition: border-color 0.3s ease;
                text-align: right;
            }
            
            .form-input:focus {
                outline: none;
                border-color: #1a95bb;
                box-shadow: 0 0 0 3px rgba(26, 149, 187, 0.1);
            }
            
            .login-btn {
                width: 100%;
                background-color:rgb(234, 124, 21);
                color: white;
                padding: 12px;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            
            .login-btn:hover {
                background-color: #147a9e;
            }
            
            .error-message {
                color: #dc3545;
                font-size: 14px;
                margin-top: 5px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <div class="login-card">
                <div class="logo-container">
                    <img src="{{ url('assets/admin/images/profile.jpg') }}" alt="Logo">
                </div>
                
                <h1 class="title">منصة حساباتي</h1>
                <p class="subtitle">متابعة الحسابات</p>
                
                <div class="rtl-container">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
