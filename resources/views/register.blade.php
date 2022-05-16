<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Signup</title>
</head>
<body>
<div class="flex justify-center items-center min-h-screen">
    <div class="w-11/12 flex" style="min-height: 90vh">
        <div class="w-1/2 min-h-full flex justify-center items-center text-center text-5xl font-bold">
            <div class="">
                <div>BKC</div>
                <div>Antiques and Auctions</div>
            </div>
        </div>
        <div class="w-1/2 overflow-hidden min-h-full" style="background: #E5E5E5">
            <div class="min-h-full rounded-md flex justify-center item-center flex-col relative" id="login">
                <div class="text-4xl font-bold mb-20 text-center">Signup</div>
                <div class="w-full">
                    <form action="" class="w-full">
                        <div class="w-full flex justify-center">
                            <input type="text" name="fullame"
                                   class="mr-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl" placeholder="fullName">

                            <input type="text" name="numberPhone"
                                   class="ml-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl"
                                   placeholder="Number phone">

                        </div>
                        <div class="w-full flex justify-center">
                            <input type="text" name="Address"
                                   class="mr-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl" placeholder="Address">

                            <input type="password" name="pass"
                                   class="ml-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl" placeholder="Password">

                        </div>
                        <div class="w-full flex justify-center">
                            <input type="email" name="user" class="mr-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl"
                                   placeholder="Email">

                            <input type="text" name="rePass" class="ml-5 w-5/12 py-2 rounded mb-10 px-3 outline-none text-xl"
                                   placeholder="Repeat password">

                        </div>
                    </form>
                    <div
                        class="rounded w-32 flex justify-center font-bold text-xl cursor-pointer py-3 mx-auto bg-white mt-10">
                        Signup
                    </div>
                    <div class="flex justify-center mt-10">
                        <div>Do you have an account ?</div>
                        <a href="/login" class="text-blue-500 ml-2 cursor-pointer hover:underline">Login here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
