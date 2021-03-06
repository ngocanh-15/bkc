<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        @if(\Illuminate\Support\Facades\Session::has('message'))
            toastr.options =
            {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        toastr.success("{{ session('message') }}");
        @endif

            @if(\Illuminate\Support\Facades\Session::has('error'))
            toastr.options =
            {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
        toastr.error("{{ session('error') }}");
        @endif
    </script>
    <title>Login</title>
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
                <div class="min-h-full rounded-md flex justify-center item-center flex-col relative rounded-xl shadow-lg" id="login">
                    <div class="text-4xl font-bold mb-20 text-center">LOGIN</div>
                    <div class="w-full">
                        <form method="post" class="w-full">
                            @csrf
                            <div class="mx-auto flex justify-center">
                                <input type="text" name="email" class="w-5/6 py-2 rounded mb-10 px-3 outline-none text-xl" placeholder="Email">
                            </div>
                            <div class="mx-auto flex justify-center">
                                <input type="password" name="pass" class="w-5/6 py-2 rounded mb-10 px-3 outline-none text-xl" placeholder="Password">
                            </div>
                            <button type="submit" class="rounded w-32 flex justify-center font-bold text-xl cursor-pointer py-3 mx-auto bg-white">
                                Login
                            </button>
                        </form>
                        <div class="flex justify-center mt-10">
                            <div>Do you have not an account ?</div>
                            <a href="/signup" class="text-blue-500 ml-2 cursor-pointer hover:underline">Signup here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
