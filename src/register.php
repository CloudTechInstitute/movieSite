<?php include 'header.php'; ?>

<body class="relative flex flex-col justify-center px-64 py-6 bg-gray-900 bg-cover bg-center bg-fixed"
    style="background-image: url('images/poster.jpg');">
    <!-- Blurred Background -->
    <div class="absolute inset-0 bg-gray-900 bg-opacity-90"></div>
    <!-- Content Layer -->
    <div class="relative z-10 flex h-screen items-center justify-center overflow-hidden w-full">
        <div class="">
            <form method="post" action="login.php">
                <input type="text" placeholder="full name" name=""
                    class="p-2 outline outline-1 outline-white w-full bg-transparent text-white flex-col mb-2 rounded" />
                <input type="email" placeholder="email address" name=""
                    class="p-2 outline outline-1 outline-white w-full bg-transparent text-white flex-col mb-2 rounded" />
                <input type="password" placeholder="password" name=""
                    class="p-2 outline outline-1 outline-white w-full bg-transparent text-white flex-col mb-2 rounded" />
                <input type="password" placeholder="confirm password" name=""
                    class="p-2 outline outline-1 outline-white w-full bg-transparent text-white flex-col mb-2 rounded" />
                <button type="submit" class="p-2 w-full bg-blue-400 hover:bg-blue-500 text-white rounded">Login</button>
            </form>
        </div>
    </div>
</body>

</html>