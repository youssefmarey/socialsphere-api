<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook - log in or sign up</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#F0F2F5] dark:bg-[#18191A] text-[#1C1E21] dark:text-[#E4E6EB] antialiased min-h-screen flex flex-col">

    <div class="flex-grow flex items-center justify-center pt-[72px] pb-[112px]">
        <div class="max-w-[980px] w-full flex flex-col lg:flex-row items-center lg:items-start lg:justify-between px-4 lg:px-0 mx-auto">
            
            <!-- Left Side: Logo & Text -->
            <div class="w-full lg:w-[580px] text-center lg:text-left pr-0 lg:pr-8 mb-10 lg:mb-0 mt-0 lg:mt-[40px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook" class="h-[106px] -ml-7 mx-auto lg:mx-0 mb-4 dark:hidden">
                <svg viewBox="0 0 36 36" class="fill-[#0866FF] h-[106px] -ml-7 mx-auto lg:mx-0 mb-4 hidden dark:block">
                    <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
                    <path class="fill-white" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
                </svg>
                <h2 class="text-[24px] lg:text-[28px] font-normal leading-[32px] w-full lg:w-[500px]">
                    Connect with friends and the world around you on Facebook.
                </h2>
            </div>

            <!-- Right Side: Login Box -->
            <div class="w-full sm:w-[396px] shrink-0">
                <div class="bg-white dark:bg-[#242526] p-4 rounded-lg shadow-[0_2px_4px_rgba(0,0,0,0.1),0_8px_16px_rgba(0,0,0,0.1)] dark:shadow-[0_2px_4px_rgba(0,0,0,0.2),0_8px_16px_rgba(0,0,0,0.2)]">
                    <form action="#" method="POST" class="flex flex-col gap-3">
                        @csrf
                        <input type="text" placeholder="Email or phone number" class="w-full text-[17px] px-4 py-3 rounded-md border border-[#dddfe2] dark:border-[#3E4042] bg-white dark:bg-[#3A3B3C] text-gray-900 dark:text-[#E4E6EB] placeholder-[#90949c] dark:placeholder-[#B0B3B8] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                        
                        <input type="password" placeholder="Password" class="w-full text-[17px] px-4 py-3 rounded-md border border-[#dddfe2] dark:border-[#3E4042] bg-white dark:bg-[#3A3B3C] text-gray-900 dark:text-[#E4E6EB] placeholder-[#90949c] dark:placeholder-[#B0B3B8] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                        
                        <button type="submit" class="w-full bg-[#0866FF] hover:bg-[#1877f2] text-white text-[20px] font-bold py-3 rounded-md transition-colors mt-2">
                            Log In
                        </button>
                    </form>
                    
                    <div class="text-center mt-4 mb-5">
                        <a href="#" class="text-[#1877f2] dark:text-[#4599FF] text-[14px] font-medium hover:underline">Forgot password?</a>
                    </div>
                    
                    <hr class="border-[#dadde1] dark:border-[#3E4042] mb-6">
                    
                    <div class="text-center pb-2">
                        <a href="/register" class="inline-block bg-[#42b72a] hover:bg-[#36a420] text-white text-[17px] font-bold px-4 py-3 rounded-md transition-colors">
                            Create new account
                        </a>
                    </div>
                </div>
                
                <div class="text-center mt-7 text-[14px] text-[#1c1e21] dark:text-[#E4E6EB]">
                    <a href="#" class="font-bold hover:underline">Create a Page</a> for a celebrity, brand or business.
                </div>
            </div>
            
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white dark:bg-[#242526] pt-5 text-[#737373] dark:text-[#B0B3B8] text-[12px]">
        <div class="max-w-[980px] mx-auto px-4 lg:px-0">
            <div class="flex flex-wrap gap-x-3 gap-y-1 pb-2 border-b border-[#dadde1] dark:border-[#3E4042]">
                <span>English (US)</span>
                <a href="#" class="hover:underline">Español</a>
                <a href="#" class="hover:underline">Français (France)</a>
                <a href="#" class="hover:underline">中文(简体)</a>
                <a href="#" class="hover:underline">العربية</a>
                <a href="#" class="hover:underline">Português (Brasil)</a>
                <a href="#" class="hover:underline">Italiano</a>
                <a href="#" class="hover:underline">한국어</a>
                <a href="#" class="hover:underline">Deutsch</a>
                <a href="#" class="hover:underline">हिन्दी</a>
                <a href="#" class="hover:underline">日本語</a>
                <button class="bg-[#f5f6f7] dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-sm px-2 text-[16px] leading-tight hover:bg-[#ebedf0] dark:hover:bg-[#4E4F50]">+</button>
            </div>
            <div class="flex flex-wrap gap-x-5 gap-y-2 pt-3 pb-5">
                <a href="#" class="hover:underline">Sign Up</a>
                <a href="#" class="hover:underline">Log In</a>
                <a href="#" class="hover:underline">Messenger</a>
                <a href="#" class="hover:underline">Facebook Lite</a>
                <a href="#" class="hover:underline">Video</a>
                <a href="#" class="hover:underline">Places</a>
                <a href="#" class="hover:underline">Games</a>
                <a href="#" class="hover:underline">Marketplace</a>
                <a href="#" class="hover:underline">Meta Pay</a>
                <a href="#" class="hover:underline">Meta Store</a>
                <a href="#" class="hover:underline">Meta Quest</a>
                <a href="#" class="hover:underline">Instagram</a>
                <a href="#" class="hover:underline">Threads</a>
                <a href="#" class="hover:underline">Fundraisers</a>
                <a href="#" class="hover:underline">Services</a>
                <a href="#" class="hover:underline">Voting Information Center</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Privacy Center</a>
                <a href="#" class="hover:underline">Groups</a>
                <a href="#" class="hover:underline">About</a>
                <a href="#" class="hover:underline">Create ad</a>
                <a href="#" class="hover:underline">Create Page</a>
                <a href="#" class="hover:underline">Developers</a>
                <a href="#" class="hover:underline">Careers</a>
                <a href="#" class="hover:underline">Cookies</a>
                <a href="#" class="hover:underline">Ad choices</a>
                <a href="#" class="hover:underline">Terms</a>
                <a href="#" class="hover:underline">Help</a>
                <a href="#" class="hover:underline">Contact Uploading & Non-Users</a>
            </div>
            <div class="pb-5">Meta © 2026</div>
        </div>
    </footer>
</body>
</html>
