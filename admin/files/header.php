<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/tailwind.js"></script>

    <title>Document</title>

    <style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    </style>
</head>

<body>

    <div class="container max-w-full bg-gray-600 flex justify-end py-3 text-white">
        <div>


            <div class="dropdown inline-block relative">
                <button class="text-white  pr-4  inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                    <span class="">تنظیمات</span>
                </button>

                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-32">

                    <li class="hover:cursor-pointer bg-gray-200 bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">تغییر رمز
                    </li>
                    <li
                        class="hover:cursor-pointer bg-gray-200 rounded-b bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        <a href="logout.php">خروج</a>
                    </li>
                </ul>
            </div>

        </div>


        <div>


            <div class="dropdown inline-block relative">
                <button class="text-white  pr-4  inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                    <span class="">دسته ها</span>
                </button>

                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-32">

                    <li class="hover:cursor-pointer bg-gray-200 bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        <a href="categoryAdd.php">افزودن دسته</a>
                    </li>
                    <li
                        class="hover:cursor-pointer bg-gray-200 rounded-b bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        <a href="categoryShow.php">مشاهده دسته</a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="dropdown inline-block relative">
                <button class="text-white  pr-4  inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                    <span class="">کتاب ها</span>
                </button>

                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-32">

                    <li class="hover:cursor-pointer bg-gray-200 bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        <a href="bookAdd.php">افزودن کتاب</a>
                    </li>
                    <li
                        class="hover:cursor-pointer bg-gray-200 rounded-b bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        <a href="index.php">مشاهده کتاب</a>
                    </li>
                </ul>
            </div>
        <span class="pr-10">نظرات</span>
    </div>
</body>

</html>