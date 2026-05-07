<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-[#F0F2F5] dark:bg-[#18191A] text-[#050505] dark:text-[#E4E6EB] antialiased overflow-y-scroll">

    <!-- Top Navigation -->
    <nav class="fixed top-0 left-0 right-0 h-[56px] bg-white dark:bg-[#242526] shadow-[0_1px_2px_rgba(0,0,0,0.1)] dark:shadow-[0_1px_2px_rgba(255,255,255,0.05)] z-50 flex items-center justify-between px-4">
        
        <!-- Left Nav -->
        <div class="flex items-center gap-2 w-1/4">
            <!-- Facebook Logo -->
            <svg viewBox="0 0 36 36" class="fill-[#0866FF] h-10 w-10 shrink-0 cursor-pointer">
                <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
                <path class="fill-white" d="M25 23l.8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
            </svg>
            <!-- Search -->
            <div class="hidden md:flex items-center bg-[#F0F2F5] dark:bg-[#3A3B3C] rounded-full h-10 px-3 flex-1 max-w-[240px]">
                <svg class="h-4 w-4 text-gray-500 dark:text-[#B0B3B8] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search Facebook" class="bg-transparent border-none focus:ring-0 text-[15px] ml-2 w-full placeholder-gray-500 dark:placeholder-[#B0B3B8] text-gray-900 dark:text-[#E4E6EB] outline-none">
            </div>
        </div>

        <!-- Center Nav -->
        <div class="hidden md:flex flex-1 justify-center max-w-[680px]">
            <div class="flex items-center justify-between w-full h-full space-x-2">
                <!-- Home -->
                <div class="flex-1 flex justify-center items-center cursor-pointer border-b-[3px] border-[#0866FF] h-[56px]">
                    <svg class="h-7 w-7 text-[#0866FF]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3l-10 9h3v8h5v-6h4v6h5v-8h3l-10-9z" />
                    </svg>
                </div>
                <!-- Friends -->
                <div class="flex-1 flex justify-center items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-xl h-12 transition-colors">
                    <svg class="h-7 w-7 text-gray-500 dark:text-[#B0B3B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <!-- Video -->
                <div class="flex-1 flex justify-center items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-xl h-12 transition-colors">
                    <svg class="h-7 w-7 text-gray-500 dark:text-[#B0B3B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <!-- Groups -->
                <div class="flex-1 flex justify-center items-center cursor-pointer hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-xl h-12 transition-colors">
                    <svg class="h-7 w-7 text-gray-500 dark:text-[#B0B3B8]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Right Nav -->
        <div class="flex items-center justify-end gap-2 w-1/4">
            <div class="hidden sm:flex h-10 w-10 bg-gray-200 dark:bg-[#3A3B3C] rounded-full items-center justify-center cursor-pointer hover:bg-gray-300 dark:hover:bg-[#4E4F50] transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 11h9v2h-9v9h-2v-9H1v-2h9V2h2v9z"/></svg>
            </div>
            <div class="h-10 w-10 bg-gray-200 dark:bg-[#3A3B3C] rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-300 dark:hover:bg-[#4E4F50] transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.145 2 11.26c0 2.915 1.517 5.503 3.86 7.182v3.746l3.414-1.873c.87.24 1.785.367 2.726.367 5.523 0 10-4.145 10-9.26C22 6.145 17.523 2 12 2zm1.045 12.35l-2.61-2.77-5.22 2.77 5.738-6.103 2.61 2.77 5.22-2.77-5.738 6.103z"/></svg>
            </div>
            <div class="relative h-10 w-10 bg-gray-200 dark:bg-[#3A3B3C] rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-300 dark:hover:bg-[#4E4F50] transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 22a2 2 0 002-2h-4a2 2 0 002 2zm6-6v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2z"/></svg>
                <div class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-bold">3</div>
            </div>
            <img src="https://i.pravatar.cc/150?img=68" alt="Profile" class="h-10 w-10 rounded-full cursor-pointer ml-1 object-cover">
        </div>
    </nav>

    <!-- Main Content -->
    <div class="mt-[56px] w-full flex justify-between mx-auto max-w-[1920px]">
        
        <!-- Left Sidebar -->
        <div class="hidden xl:flex flex-col w-[360px] sticky top-[56px] h-[calc(100vh-56px)] overflow-y-auto px-2 pt-4 pb-20 hover:scrollbar-thin">
            <!-- Profile Link -->
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-semibold text-[15px]">
                <img src="https://i.pravatar.cc/150?img=68" class="h-9 w-9 rounded-full object-cover">
                John Doe
            </a>
            
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/S0U5ECzYUSu.png" class="h-9 w-9" alt="Friends">
                Friends
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/D2y-jJ2C_hO.png" class="h-9 w-9" alt="Groups">
                Groups
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/kyCAf2jq1H0.png" class="h-9 w-9" alt="Memories">
                Memories
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BZX6Cqj7ZON.png" class="h-9 w-9" alt="Saved">
                Saved
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y5/r/PrjKdZXmUBl.png" class="h-9 w-9" alt="Video">
                Video
            </a>
            
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px] cursor-pointer mt-1">
                <div class="h-9 w-9 bg-gray-300 dark:bg-[#3A3B3C] rounded-full flex items-center justify-center">
                    <svg class="h-5 w-5 text-gray-700 dark:text-[#E4E6EB]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
                See more
            </div>

            <hr class="border-gray-300 dark:border-[#3E4042] my-3 ml-2 mr-4">
            
            <h3 class="text-[17px] font-semibold text-gray-500 dark:text-[#B0B3B8] px-2 mb-2 flex justify-between items-center group cursor-pointer">
                Your shortcuts
                <span class="hidden group-hover:block text-blue-500 text-sm font-normal">Edit</span>
            </h3>
            
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60" class="h-9 w-9 rounded-lg object-cover">
                Web Developers Group
            </a>
            <a href="#" class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors font-medium text-[15px]">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60" class="h-9 w-9 rounded-lg object-cover">
                UI/UX Design Inspiration
            </a>
            
            <!-- Footer Links -->
            <div class="text-[13px] text-gray-500 dark:text-[#B0B3B8] px-2 mt-4 pb-4">
                Privacy · Terms · Advertising · Ad Choices · Cookies · Meta © 2026
            </div>
        </div>

        <!-- Center Feed -->
        <div class="w-full sm:w-[590px] md:w-[680px] lg:max-w-[680px] flex-shrink-0 mx-auto px-4 md:px-8 pt-6 pb-20">
            
            <!-- Stories -->
            <div class="flex gap-2 mb-6 h-[250px] overflow-x-auto no-scrollbar snap-x pb-2">
                <!-- Create Story -->
                <div class="w-[140px] h-[250px] shrink-0 rounded-xl overflow-hidden relative shadow-sm cursor-pointer group snap-start bg-white dark:bg-[#242526] border border-gray-200 dark:border-[#3E4042]">
                    <img src="https://i.pravatar.cc/150?img=68" class="h-[170px] w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute bottom-0 w-full h-[80px] bg-white dark:bg-[#242526] flex flex-col items-center justify-end pb-3">
                        <div class="absolute -top-5 bg-[#0866FF] border-4 border-white dark:border-[#242526] h-10 w-10 rounded-full flex items-center justify-center text-white">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        </div>
                        <span class="text-[13px] font-semibold text-center mt-6">Create story</span>
                    </div>
                </div>

                <!-- Story 1 -->
                <div class="w-[140px] h-[250px] shrink-0 rounded-xl overflow-hidden relative shadow-sm cursor-pointer group snap-start bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute top-3 left-3 border-4 border-[#0866FF] rounded-full z-10">
                        <img src="https://i.pravatar.cc/150?img=32" class="h-8 w-8 rounded-full border-2 border-transparent object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60 z-0"></div>
                    <span class="absolute bottom-3 left-3 right-3 text-white text-[13px] font-semibold z-10 leading-tight">Sarah Jenkins</span>
                </div>

                <!-- Story 2 -->
                <div class="w-[140px] h-[250px] shrink-0 rounded-xl overflow-hidden relative shadow-sm cursor-pointer group snap-start bg-gray-200 hidden sm:block">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute top-3 left-3 border-4 border-[#0866FF] rounded-full z-10">
                        <img src="https://i.pravatar.cc/150?img=12" class="h-8 w-8 rounded-full border-2 border-transparent object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60 z-0"></div>
                    <span class="absolute bottom-3 left-3 right-3 text-white text-[13px] font-semibold z-10 leading-tight">Mike Chen</span>
                </div>
                
                <!-- Story 3 -->
                <div class="w-[140px] h-[250px] shrink-0 rounded-xl overflow-hidden relative shadow-sm cursor-pointer group snap-start bg-gray-200 hidden md:block">
                    <img src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute top-3 left-3 border-4 border-[#0866FF] rounded-full z-10">
                        <img src="https://i.pravatar.cc/150?img=45" class="h-8 w-8 rounded-full border-2 border-transparent object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60 z-0"></div>
                    <span class="absolute bottom-3 left-3 right-3 text-white text-[13px] font-semibold z-10 leading-tight">Emily Davis</span>
                </div>
                
                <!-- Story 4 -->
                <div class="w-[140px] h-[250px] shrink-0 rounded-xl overflow-hidden relative shadow-sm cursor-pointer group snap-start bg-gray-200 hidden xl:block">
                    <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute top-3 left-3 border-4 border-[#0866FF] rounded-full z-10">
                        <img src="https://i.pravatar.cc/150?img=60" class="h-8 w-8 rounded-full border-2 border-transparent object-cover">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/60 z-0"></div>
                    <span class="absolute bottom-3 left-3 right-3 text-white text-[13px] font-semibold z-10 leading-tight">Alex Wilson</span>
                </div>
            </div>

            <!-- Create Post -->
            <div class="bg-white dark:bg-[#242526] rounded-xl shadow-sm mb-4 px-4 pt-3 pb-2">
                <div class="flex gap-2 items-center mb-3">
                    <img src="https://i.pravatar.cc/150?img=68" class="h-10 w-10 rounded-full cursor-pointer object-cover">
                    <div class="flex-1 bg-gray-100 dark:bg-[#3A3B3C] rounded-full h-10 flex items-center px-4 cursor-pointer hover:bg-gray-200 dark:hover:bg-[#4E4F50] transition-colors">
                        <span class="text-[17px] text-gray-500 dark:text-[#B0B3B8]">What's on your mind, John?</span>
                    </div>
                </div>
                <hr class="border-gray-200 dark:border-[#3E4042] my-2">
                <div class="flex justify-between items-center">
                    <div class="flex-1 flex justify-center items-center gap-2 h-10 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-600 dark:text-[#B0B3B8]">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png" alt="Live Video" class="h-6 w-6">
                        <span class="hidden sm:block">Live video</span>
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-10 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-600 dark:text-[#B0B3B8]">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png" alt="Photo/video" class="h-6 w-6">
                        <span class="hidden sm:block">Photo/video</span>
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-10 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-600 dark:text-[#B0B3B8]">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png" alt="Feeling/activity" class="h-6 w-6">
                        <span class="hidden sm:block">Feeling/activity</span>
                    </div>
                </div>
            </div>

            <!-- Feed Posts -->
            <!-- Post 1 -->
            <div class="bg-white dark:bg-[#242526] rounded-xl shadow-sm mb-4 pt-3">
                <!-- Post Header -->
                <div class="flex justify-between items-center px-4 mb-2">
                    <div class="flex gap-2 items-center cursor-pointer">
                        <img src="https://i.pravatar.cc/150?img=33" class="h-10 w-10 rounded-full object-cover">
                        <div>
                            <div class="font-semibold text-[15px] leading-tight hover:underline">Jane Smith</div>
                            <div class="flex items-center gap-1 text-[13px] text-gray-500 dark:text-[#B0B3B8]">
                                <span class="hover:underline cursor-pointer">2 hrs</span>
                                <span>·</span>
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="h-9 w-9 rounded-full hover:bg-gray-100 dark:hover:bg-[#3A3B3C] flex items-center justify-center cursor-pointer transition-colors text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M6 12c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm12 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm-6 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2z"/></svg>
                    </div>
                </div>

                <!-- Post Text -->
                <div class="px-4 text-[15px] mb-3">
                    Just finished designing a new component library! It's so fulfilling to see all the pieces come together nicely. 🎨✨ What do you guys think?
                </div>

                <!-- Post Image -->
                <div class="w-full bg-gray-100 dark:bg-black cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80" class="w-full h-auto max-h-[600px] object-cover border-y border-gray-200 dark:border-[#3E4042]">
                </div>

                <!-- Post Stats -->
                <div class="flex justify-between items-center px-4 py-2 border-b border-gray-200 dark:border-[#3E4042]">
                    <div class="flex items-center gap-1 cursor-pointer group">
                        <div class="flex -space-x-1">
                            <div class="bg-[#0866FF] rounded-full p-1 border-2 border-white dark:border-[#242526] z-20">
                                <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M14.6 8H21a2 2 0 0 1 2 2v2.104a2 2 0 0 1-.15.762l-3.095 7.515a1 1 0 0 1-.925.619H2a1 1 0 0 1-1-1V10a1 1 0 0 1 1-1h3.482a1 1 0 0 0 .817-.423l3.6-5.19a.966.966 0 0 1 .65-.418l1.362-.286a1.001 1.001 0 0 1 1.082.723l1.605 4.6z"/></svg>
                            </div>
                            <div class="bg-red-500 rounded-full p-1 border-2 border-white dark:border-[#242526] z-10">
                                <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                            </div>
                        </div>
                        <span class="text-[15px] text-gray-500 dark:text-[#B0B3B8] hover:underline">124</span>
                    </div>
                    <div class="flex gap-3 text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <span class="hover:underline cursor-pointer">18 comments</span>
                        <span class="hover:underline cursor-pointer">4 shares</span>
                    </div>
                </div>

                <!-- Post Actions -->
                <div class="px-4 py-1 flex justify-between">
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                        Like
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Comment
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                        Share
                    </div>
                </div>
            </div>

            <!-- Post 2 (Text Only) -->
            <div class="bg-white dark:bg-[#242526] rounded-xl shadow-sm mb-4 pt-3 pb-1">
                <div class="flex justify-between items-center px-4 mb-2">
                    <div class="flex gap-2 items-center cursor-pointer">
                        <img src="https://i.pravatar.cc/150?img=11" class="h-10 w-10 rounded-full object-cover">
                        <div>
                            <div class="font-semibold text-[15px] leading-tight hover:underline">Robert Johnson</div>
                            <div class="flex items-center gap-1 text-[13px] text-gray-500 dark:text-[#B0B3B8]">
                                <span class="hover:underline cursor-pointer">5 hrs</span>
                                <span>·</span>
                                <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="h-9 w-9 rounded-full hover:bg-gray-100 dark:hover:bg-[#3A3B3C] flex items-center justify-center cursor-pointer transition-colors text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M6 12c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm12 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm-6 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2z"/></svg>
                    </div>
                </div>
                <div class="px-4 text-[24px] font-medium mb-3 pb-2 border-b border-gray-200 dark:border-[#3E4042]">
                    Excited to announce that I'll be speaking at the upcoming Tech Conference 2026! 🎉 Let me know if anyone is going to be there!
                </div>
                <div class="flex justify-between items-center px-4 py-2 border-b border-gray-200 dark:border-[#3E4042]">
                    <div class="flex items-center gap-1 cursor-pointer group">
                        <div class="bg-[#0866FF] rounded-full p-1 border-2 border-white dark:border-[#242526] z-20">
                            <svg class="h-3 w-3 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M14.6 8H21a2 2 0 0 1 2 2v2.104a2 2 0 0 1-.15.762l-3.095 7.515a1 1 0 0 1-.925.619H2a1 1 0 0 1-1-1V10a1 1 0 0 1 1-1h3.482a1 1 0 0 0 .817-.423l3.6-5.19a.966.966 0 0 1 .65-.418l1.362-.286a1.001 1.001 0 0 1 1.082.723l1.605 4.6z"/></svg>
                        </div>
                        <span class="text-[15px] text-gray-500 dark:text-[#B0B3B8] hover:underline ml-1">45</span>
                    </div>
                    <div class="flex gap-3 text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <span class="hover:underline cursor-pointer">8 comments</span>
                    </div>
                </div>
                <div class="px-4 py-1 flex justify-between">
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                        Like
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Comment
                    </div>
                    <div class="flex-1 flex justify-center items-center gap-2 h-8 hover:bg-gray-100 dark:hover:bg-[#3A3B3C] rounded-lg cursor-pointer transition-colors font-semibold text-[15px] text-gray-500 dark:text-[#B0B3B8]">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                        Share
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center mt-4 mb-8">
                <div class="w-8 h-8 border-4 border-[#0866FF] border-t-transparent rounded-full animate-spin"></div>
            </div>

        </div>

        <!-- Right Sidebar -->
        <div class="hidden lg:flex flex-col w-[360px] sticky top-[56px] h-[calc(100vh-56px)] overflow-y-auto pr-2 pt-4 pb-20 hover:scrollbar-thin">
            
            <!-- Sponsored -->
            <h3 class="text-[17px] font-semibold text-gray-500 dark:text-[#B0B3B8] px-2 mb-2">Sponsored</h3>
            
            <a href="#" class="flex items-center gap-4 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors group">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" class="w-[110px] h-[110px] object-cover rounded-xl group-hover:opacity-90">
                <div>
                    <div class="font-semibold text-[15px] leading-tight text-gray-800 dark:text-[#E4E6EB] mb-1">Boost Your Business</div>
                    <div class="text-[13px] text-gray-500 dark:text-[#B0B3B8]">ads.example.com</div>
                </div>
            </a>
            
            <a href="#" class="flex items-center gap-4 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors group mt-2">
                <img src="https://images.unsplash.com/photo-1523206489230-c012c64b2b48?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80" class="w-[110px] h-[110px] object-cover rounded-xl group-hover:opacity-90">
                <div>
                    <div class="font-semibold text-[15px] leading-tight text-gray-800 dark:text-[#E4E6EB] mb-1">Latest Tech Gadgets</div>
                    <div class="text-[13px] text-gray-500 dark:text-[#B0B3B8]">techstore.example.com</div>
                </div>
            </a>

            <hr class="border-gray-300 dark:border-[#3E4042] my-4 mx-2">

            <!-- Birthdays -->
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors cursor-pointer mb-2">
                <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/b25GEo_E01O.png" class="h-9 w-9" alt="Gift">
                <div class="text-[15px]">
                    <span class="font-semibold">Michael Brown</span> and <span class="font-semibold">2 others</span> have birthdays today.
                </div>
            </div>

            <hr class="border-gray-300 dark:border-[#3E4042] my-2 mx-2">

            <!-- Contacts -->
            <div class="flex justify-between items-center px-2 mb-2">
                <h3 class="text-[17px] font-semibold text-gray-500 dark:text-[#B0B3B8]">Contacts</h3>
                <div class="flex gap-2 text-gray-500 dark:text-[#B0B3B8]">
                    <div class="h-8 w-8 rounded-full hover:bg-gray-200 dark:hover:bg-[#3A3B3C] flex items-center justify-center cursor-pointer transition-colors">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <div class="h-8 w-8 rounded-full hover:bg-gray-200 dark:hover:bg-[#3A3B3C] flex items-center justify-center cursor-pointer transition-colors">
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 12c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm12 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2zm-6 0c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2z"/></svg>
                    </div>
                </div>
            </div>

            <!-- Friend list -->
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors cursor-pointer relative">
                <div class="relative">
                    <img src="https://i.pravatar.cc/150?img=15" class="h-9 w-9 rounded-full object-cover">
                    <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-[#F0F2F5] dark:border-[#18191A]"></div>
                </div>
                <span class="font-medium text-[15px]">Amanda Lee</span>
            </div>
            
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors cursor-pointer relative">
                <div class="relative">
                    <img src="https://i.pravatar.cc/150?img=52" class="h-9 w-9 rounded-full object-cover">
                    <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-[#F0F2F5] dark:border-[#18191A]"></div>
                </div>
                <span class="font-medium text-[15px]">David Wilson</span>
            </div>
            
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors cursor-pointer relative">
                <div class="relative">
                    <img src="https://i.pravatar.cc/150?img=20" class="h-9 w-9 rounded-full object-cover">
                    <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-[#F0F2F5] dark:border-[#18191A]"></div>
                </div>
                <span class="font-medium text-[15px]">Chris Evans</span>
            </div>
            
            <div class="flex items-center gap-3 p-2 hover:bg-gray-200 dark:hover:bg-[#3A3B3C] rounded-lg transition-colors cursor-pointer relative">
                <div class="relative">
                    <img src="https://i.pravatar.cc/150?img=35" class="h-9 w-9 rounded-full object-cover">
                    <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-[#F0F2F5] dark:border-[#18191A]"></div>
                </div>
                <span class="font-medium text-[15px]">Jessica Alba</span>
            </div>

        </div>
    </div>
</body>
</html>
