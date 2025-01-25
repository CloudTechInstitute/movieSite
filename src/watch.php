<?php include 'header.php'; ?>

<body class="relative flex flex-col justify-center px-64 py-6 bg-gray-900 bg-cover bg-center bg-fixed"
    style="background-image: url('images/13124.jpg');">
    <!-- Blurred Background -->
    <div class="absolute inset-0 bg-gray-900 bg-opacity-50 filter blur-sm"></div>

    <!-- Content Layer -->
    <div class="relative z-10">
        <div class="w-full flex items-center justify-between mb-10 text-white">
            <div class="flex justify-between items-center gap-6 w-[55%]">
                <div class="rounded-full p-5 bg-gray-600 outline outline-1 outline-white"></div>
                <input type="text" class="outline outline-1 outline-gray-400 bg-transparent p-2 rounded-md w-full"
                    placeholder="search" />
            </div>
            <div class="flex items-center justify-between gap-4">
                <div class="rounded-full p-5 bg-gray-600 outline outline-1 outline-white"></div>
                <div>Thomas</div>
                <div class=" mr-5"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                <div class=""><i class="fa fa-bell" aria-hidden="true"></i></div>

            </div>
        </div>
        <div class="flex items-start justify-center gap-4 mb-5">
            <div class="[w-50%]">
                <video controls class="rounded-xl w-full">
                    <source src="videos/video.mp4" type="video/mp4">
                    Your browser does not support this video.
                </video>
            </div>
            <div class="[w-50%]">
                <div class="bg-gray-900 p-4 h-[394px] w-72 rounded-2xl opacity-65 outline outline-1 outline-gray-200">
                    <div class="flex justify-between w-full p-2 items-center">
                        <div class="text-white font-semibold">
                            Comments
                        </div>
                        <div class="flex items-center gap-2 text-white">
                            <i class="fa fa-users"></i>
                            <p class="text-xs">30 people</p>
                        </div>
                    </div>
                    <div class="w-full h-[1px] bg-white"></div>
                    <div class="flex justify-between w-full py-2 gap-2 items-start">
                        <div class="rounded-full p-5 bg-gray-400"></div>
                        <div class="text-white">
                            <p class="font-bold text-sm">Master Xdee</p>
                            <p class="text-sm">OMG. the movie is worth the watch. I will 100% recommend everyone to
                                watch</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-between w-full text-white  mb-2">
            <p class="uppercase font-bold">Related content</p>
            <a href="#" class="text-sm">See all</a>
        </div>
        <hr class="mb-5">
        <div class="w-full">
            <div class="grid grid-cols-5 gap-6 w-full text-white">
                <div class=" w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/black.jpg" alt="black panther poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/star.jpg" alt="star wars poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/bat.jpg" alt="bat man poster" class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class=" w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/black.jpg" alt="black panther poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/star.jpg" alt="star wars poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between w-full text-white mt-5 mb-2">
            <p class="uppercase font-bold">From the same producer</p>
            <a href="#" class="text-sm">See all</a>
        </div>
        <hr class="mb-5">
        <div class="w-full">
            <div class="grid grid-cols-5 gap-6 w-full text-white">
                <div class=" w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/black.jpg" alt="black panther poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/star.jpg" alt="star wars poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/bat.jpg" alt="bat man poster" class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class=" w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/black.jpg" alt="black panther poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full outline outline-1 outline-gray-500 h-64 rounded-md overflow-hidden">
                        <img src="images/star.jpg" alt="star wars poster"
                            class="w-full h-full object-cover rounded-md" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>