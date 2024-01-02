<?php

require_once "../controller/StudentController.php";
$controller = new StudentController();
$student = $controller->index();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-between mr-3 my-4">
        <h1 class="text-teal-900 ml-4 text-2xl">Students table</h1>
        <a href="create.php">
        <button class="bg-green-400 mx-2 px-3 rounded-md text-white">Add+</button>
        </a>
    </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    User Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    DOB
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                <th scope="col" class="px-6 py-3">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3">
                    Updated At
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($student as $s) :?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?php echo $s->id;?>
                </th>
                <td class="px-6 py-4">
                <?php echo $s->first_name;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->last_name;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->user_name;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->email;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->dob;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->phone;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->address;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->created_at;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $s->updated_at;?>
                </td>

                <td class="px-6 py-4">
                    <a href="edit.php?id=<?php  echo $s->id;?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

                <td class="px-6 py-4">
                    <a href="delete.php?id=<?php echo $s->id;?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>



                <?php endforeach ?>

            </tr>
        </tbody>
    </table>
</div>



    
</body>
</html>