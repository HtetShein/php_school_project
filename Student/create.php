<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="w-[40%] mx-auto shadow-lg my-12 py-5 bg-gray-900">
        <h1 class="text-green-400 text-3xl text-center ">Create Student</h1>
        <form class="w-[90%] mx-auto" action="store.php" method="POST">

            <div class="my-2 ">
                <label class="text-green-400" for="first_name">First_Name</label>
                <input required  class="placeholder:italic text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your first_name" type="text" name="first_name" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="last_name">Last_Name</label>
                <input required class="placeholder:italic  text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your last_name" type="text" name="last_name" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="user_name">User_Name</label>
                <input required class="placeholder:italic  text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your user_name" type="text" name="user_name" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="email">Email</label>
                <input required class="placeholder:italic text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your email" type="email" name="email" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="dob">Date of birth</label>
                <input required class="placeholder:italic  text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your dob" type="date" name="dob" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="phone">Phone</label>
                <input required class="placeholder:italic text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your phone number" type="text" name="phone" />
            </div>

            <div class="my-2 ">
                <label class="text-green-400" for="address">Address</label>
                <textarea required class="placeholder:italic text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your address" name="address"></textarea>
            </div>

            <div class="my-2 ">

                <input class="placeholder:italic  text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your created at" type="hidden" name="created_at" />
            </div>

            <div class="my-2 ">
                <input class="placeholder:italic  text-white placeholder:text-green-400 block bg-gray-900 w-full border border-slate-300 rounded-md mt-3 py-2 pl-9 pr-2 shadow-sm focus:outline-none focus:ring-1 sm:text-sm" placeholder="Enter your phone updated at" type="hidden" name="updated_at" />
            </div>

            <div class="flex justify-between mt-4">
                <a href="index.php">
                    <button class="bg-teal-400  px-3 py-1 rounded-md">back</button>
                </a>
                <button class="bg-green-400 text-white rounded-sm px-2 py-1">Register</button>



            </div>















        </form>

    </div>



</body>

</html>