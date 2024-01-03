<?php
ob_start();
include 'partials/sidebar.php';
include 'partials/dbconnect.php';

$ano = $_SESSION['ano'];
$existsql = "Select * from admin where `ano` = '$ano'";
$result = mysqli_query($con,$existsql);

while($row = mysqli_fetch_array($result)){
    $permission = $row['permission'];
}
$permissions = explode(",",$permission);

if(in_array('ManageUser',$permissions)){
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="website icon" type="png" href="images/python.png">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/56705d3fd7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <style>
    #myTable_length select {
        width: 60px;
    }
    </style>
</head>

<body>
    
<div class="p-4 mt-8 pb-0 sm:ml-64">

<nav class="flex mb-4" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        Dashboard
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Manage User</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Users</span>
      </div>
    </li>
  </ol>
</nav>
<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">User management</h2>

</div>
    <div class="p-4 flex sm:ml-64">
        
        <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        sno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        City
                    </th>
                    <th scope="col" class="px-6 py-3">
                        State
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pincode
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Token
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <!-- <th scope="col" class="px-6 py-3">
                    Edit User
                    </th> -->
                </tr>
            </thead>
            <tbody>
          
<?php
                $result1 = mysqli_query($con, "Select * from user");
               
                $pid = 1;        
               while($row = mysqli_fetch_assoc($result1)){ 
                $pass = $row['password'];
                $password = substr($pass,0,10);
               echo '<tr
               class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               <td class="px-6 py-4">
               '.$pid.'
               </td>
               <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                   
                   <div>
                       <div class="text-base font-semibold">'.$row['fname'].'&nbsp;'.$row['lname'].'</div>
                       <div class="font-normal text-gray-500">'.$row['email'].'</div>
                   </div>
               </th>
               <td class="px-6 py-4"> '.$password.'... </td>
               <td class="px-6 py-4">
               '.$row['address'].'
               </td>
               <td class="px-6 py-4">
               '.$row['city'].'
               </td>
               <td class="px-6 py-4">
               '.$row['state'].'
               </td>
               <td class="px-6 py-4">
               '.$row['pincode'].'
               </td>
               <td class="px-6 py-4">
               '.$row['token'].'
               </td>
               <td class="px-6 py-4">
               '.$row['date'].'
               </td>
           </tr>';
           $pid+=1;
               }

       ?>
                
            </tbody>



        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });
    </script>
</body>

</html>
<?php
}
elseif(in_array('Project',$permissions)){
header('location:addproject.php');
}
elseif(in_array('Consultation',$permissions)){
  header('location:consultation.php');
}
elseif(in_array('Dashboard',$permissions)){
header('location:home.php');
}
elseif(in_array('Review',$permissions)){
header('location:review.php');
}
elseif(in_array('ManageAdmin',$permissions)){
header('location:addadmin.php');
}
elseif(in_array('Dashboard',$permissions)){
header('location:home.php');
}

ob_end_flush();

?>