<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up for Facebook | Facebook</title>
    
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

    <!-- Header -->
    <div class="bg-white dark:bg-[#242526] h-[82px] shadow-sm flex items-center justify-center shrink-0">
        <svg viewBox="0 0 36 36" class="fill-[#0866FF] h-[40px] cursor-pointer">
            <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
            <path class="fill-white" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
        </svg>
    </div>

    <div class="flex-grow flex items-center justify-center py-[40px]">
        
        <!-- Register Box -->
        <div class="w-full sm:w-[432px] shrink-0">
            <div class="bg-white dark:bg-[#242526] rounded-lg shadow-[0_2px_4px_rgba(0,0,0,0.1),0_8px_16px_rgba(0,0,0,0.1)] dark:shadow-[0_2px_4px_rgba(0,0,0,0.2),0_8px_16px_rgba(0,0,0,0.2)]">
                
                <div class="px-4 py-3 border-b border-[#dadde1] dark:border-[#3E4042] text-center">
                    <h2 class="text-[24px] font-bold leading-[32px] text-[#1c1e21] dark:text-[#E4E6EB]">Create a new account</h2>
                    <p class="text-[15px] text-[#606770] dark:text-[#B0B3B8] mt-1">It's quick and easy.</p>
                </div>

                <div class="p-4">
                    <form action="#" method="POST" class="flex flex-col gap-3">
                        @csrf
                        
                        <div class="flex gap-3">
                            <input type="text" placeholder="First name" class="w-full text-[15px] px-3 py-2 bg-[#f5f6f7] dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                            
                            <input type="text" placeholder="Last name" class="w-full text-[15px] px-3 py-2 bg-[#f5f6f7] dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                        </div>
                        
                        <input type="text" placeholder="Mobile number or email" class="w-full text-[15px] px-3 py-2 bg-[#f5f6f7] dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                        
                        <input type="password" placeholder="New password" class="w-full text-[15px] px-3 py-2 bg-[#f5f6f7] dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors" required>
                        
                        <!-- DOB -->
                        <div class="mt-2">
                            <div class="text-[12px] text-[#606770] dark:text-[#B0B3B8] font-medium mb-1">Date of birth <a href="#" class="bg-gray-500 text-white rounded-full inline-flex w-3 h-3 text-[10px] justify-center items-center ml-1">?</a></div>
                            <div class="flex gap-3">
                                <select class="flex-1 text-[15px] p-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors">
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option selected>Mar</option>
                                    <option>Apr</option>
                                </select>
                                <select class="flex-1 text-[15px] p-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option selected>15</option>
                                    <option>16</option>
                                </select>
                                <select class="flex-1 text-[15px] p-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md text-gray-900 dark:text-[#E4E6EB] focus:outline-none focus:border-[#1877f2] focus:ring-1 focus:ring-[#1877f2] transition-colors">
                                    <option selected>2026</option>
                                    <option>2025</option>
                                    <option>2024</option>
                                    <option>2000</option>
                                    <option>1990</option>
                                </select>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="mt-2">
                            <div class="text-[12px] text-[#606770] dark:text-[#B0B3B8] font-medium mb-1">Gender <a href="#" class="bg-gray-500 text-white rounded-full inline-flex w-3 h-3 text-[10px] justify-center items-center ml-1">?</a></div>
                            <div class="flex gap-3">
                                <label class="flex-1 flex justify-between items-center text-[15px] px-3 py-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md cursor-pointer hover:bg-gray-50 dark:hover:bg-[#4E4F50]">
                                    Female
                                    <input type="radio" name="gender" class="accent-[#0866FF]">
                                </label>
                                <label class="flex-1 flex justify-between items-center text-[15px] px-3 py-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md cursor-pointer hover:bg-gray-50 dark:hover:bg-[#4E4F50]">
                                    Male
                                    <input type="radio" name="gender" class="accent-[#0866FF]">
                                </label>
                                <label class="flex-1 flex justify-between items-center text-[15px] px-3 py-2 bg-white dark:bg-[#3A3B3C] border border-[#ccd0d5] dark:border-[#4E4F50] rounded-md cursor-pointer hover:bg-gray-50 dark:hover:bg-[#4E4F50]">
                                    Custom
                                    <input type="radio" name="gender" class="accent-[#0866FF]">
                                </label>
                            </div>
                        </div>
                        
                        <p class="text-[11px] text-[#777] dark:text-[#B0B3B8] mt-2 leading-[15px]">
                            People who use our service may have uploaded your contact information to Facebook. <a href="#" class="text-[#385898] dark:text-[#4599FF] hover:underline">Learn more</a>.
                        </p>
                        <p class="text-[11px] text-[#777] dark:text-[#B0B3B8] mb-3 leading-[15px]">
                            By clicking Sign Up, you agree to our <a href="#" class="text-[#385898] dark:text-[#4599FF] hover:underline">Terms</a>, <a href="#" class="text-[#385898] dark:text-[#4599FF] hover:underline">Privacy Policy</a> and <a href="#" class="text-[#385898] dark:text-[#4599FF] hover:underline">Cookies Policy</a>. You may receive SMS notifications from us and can opt out at any time.
                        </p>

                        <div class="text-center">
                            <button type="submit" class="w-[194px] bg-[#00a400] hover:bg-[#36a420] text-white text-[18px] font-bold py-2 rounded-md transition-colors shadow-sm">
                                Sign Up
                            </button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <a href="/login" class="text-[#1877f2] dark:text-[#4599FF] text-[15px] hover:underline">Already have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>
