<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    </style>
</head>

<body>
    <div class="container  max-w-full bg-yellow-400 flex  justify-between">
        <img src="img/Logo.jpg" class="invisible">
        <img src="img/Logo.jpg">
    </div>
    <div class="container max-w-full bg-gray-600 flex justify-end py-3 text-white">
        <div>


            <div class="dropdown inline-block relative">
                <button class="text-white  pr-4  inline-flex items-center">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                    <span class="">کامپیوتر</span>
                </button>

                <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 w-32">
                    <li
                        class="hover:cursor-pointer bg-gray-200 rounded-t bg-gray-600 hover:bg-gray-400  py-2 px-4  w-32">
                        برنامه نویسی
                    </li>
                    <li class="hover:cursor-pointer bg-gray-200 bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">فتوشاپ
                    </li>
                    <li
                        class="hover:cursor-pointer bg-gray-200 rounded-b bg-gray-600 hover:bg-gray-400 py-2 px-4  w-32">
                        طراحی وب
                    </li>
                </ul>
            </div>

        </div>


        <span class="pr-4">تاریخی</span>
        <span class="pr-4">فرهنگی</span>
        <span class="pr-10">خانه</span>
    </div>
</body>

</html>