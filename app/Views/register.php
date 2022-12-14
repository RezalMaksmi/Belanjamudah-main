<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
    </script>
    <style type="text/tailwindcss">
        #toggle ~ label div.toggle-circle {
        transition: .2s;
    }
        #toggle:checked ~ label div.toggle-circle {
        @apply translate-x-4;
        transition: .2s;
    }
    </style>
    <title>Document</title>
</head>

<body class="dark:bg-slate-800 dark:text-slate-200">
    <div class="w-full h-screen mx-auto bg-slate-400 dark:bg-slate-800">
        <div class="container max-w-7xl mx-auto h-full pt-16 px-3">
            <form action="/register" method="post">
                <div
                    class="relative flex flex-col justify-center items-center max-w-3xl mx-auto  border gap-2 text-black bg-white p-4 border-slate-200 dark:bg-slate-700 rounded-xl shadow-md ">

                    <section class="w-full  flex flex-col mx-auto dark:text-slate-50">
                        <h1 class="mx-auto text-center text-3xl font-thin">Register</h1>
                        <div class="flex justify-center">
                            <input type="checkbox" id="toggle" class="hidden">
                            <label for="toggle" class="absolute top-2 right-2">
                                <div class="w-10 h-6 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer">
                                    <div class="w-4 h-4 bg-white rounded-full toggle-circle"></div>
                                </div>
                            </label>
                        </div>
                    </section>
                    <section class="w-full  flex flex-col mx-auto">
                        <label for="nama"
                            class="after:content-['*'] after:text-pink-800 after:ml-1 after:dark:text-red-600 dark:text-slate-50">Nama</label>
                        <input type="text" name="name" id="nama"
                            class="w-full p-2 border placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-700 focus:border-sky-500 rounded"
                            placeholder="Masukkan Nama...">
                    </section>
                    <section class="w-full  flex flex-col mx-auto">
                        <label for="email"
                            class="after:content-['*'] after:text-pink-800 after:ml-1 after:dark:text-red-600 dark:text-slate-50">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full p-2 border placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-700 focus:border-sky-500 rounded invalid:text-pink-700 peer"
                            placeholder="Masukkan Email...">
                        <p class="text-sm m-1 text-pink-700 hidden peer-invalid:contents dark:text-red-600">
                            Email
                            yang anda masukkan
                            tidak valid!</p>
                    </section>
                    <section class="w-full  flex flex-col mx-auto">
                        <label for="pass"
                            class="after:content-['*'] after:text-pink-800 after:ml-1 after:dark:text-red-600 dark:text-slate-50">Password</label>
                        <input type="password" name="password" id="pass"
                            class="w-full p-2 border placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-700 focus:border-sky-500 rounded invalid:text-pink-700"
                            placeholder="Password...">
                    </section>
                    <section class="w-full  flex flex-col mx-auto">
                        <label for="con-pass"
                            class="after:content-['*'] after:text-pink-800 after:ml-1 after:dark:text-red-600 dark:text-slate-50">Confirm
                            Password</label>
                        <input type="password" name="confirm_password" id="con-pass"
                            class="w-full p-2 border placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-700 focus:border-sky-500 rounded invalid:text-pink-700"
                            placeholder="Confirm Password...">
                    </section>
                    <section class="mx-auto mt-1">
                        <button type="submit"
                            class="px-4 py-2 bg-slate-600 text-white hover:bg-slate-700 rounded dark:text-slate-900 dark:hover:text-slate-100 dark:bg-slate-400 dark:hover:bg-slate-500">Register</button>
                    </section>
                </div>
            </form>

        </div>
    </div>
    <script>
    const checkbox = document.querySelector('#toggle');
    const html = document.querySelector('html');

    window.addEventListener("DOMContentLoaded", () => {
        const isDark = JSON.parse(localStorage.getItem("isDark") ?? false);
        if (isDark === true) {
            html.classList.add("dark");
            checkbox.setAttribute("checked", true);
        }

    });

    checkbox.addEventListener('change', function() {
        // html.classList.toggle('dark');

        checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark');
        localStorage.setItem("isDark", JSON.stringify(checkbox.checked));

        // html.preventDefault();
        // html.stopPropagation();
    });
    </script>
</body>

</html>