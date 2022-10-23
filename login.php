<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/tailwind.js"></script>
</head>

<body class="pt-44">
    <form action="checklogin.php" method="POST">
        <div class=" w-96 bg-gray-50 shadow-md rounded-xl mx-auto mb-8  p-8">
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="username">
                    نام کاربری
                </label>
                <input
                    class="focus:outline-blue-500 shadow appearance-none border rounded w-full py-2 text-right px-3 text-grey-darker"
                    name="username" type="text" placeholder="نام کاربری">
            </div>
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2 text-right" for="password">
                    رمز عبور
                </label>
                <input
                    class="shadow  focus:outline-blue-500 appearance-none border border-red text-right rounded w-full py-2 px-3 text-grey-darker mb-3"
                    name="password" type="رمز عبور" placeholder="******************">
            </div>
            <button class="bg-blue-500	hover:bg-blue-400 text-white font-bold py-2 px-7 rounded" type="submit">
                ورود
            </button>

        </div>
    </form>
</body>

</html>