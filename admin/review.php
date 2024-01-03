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

if(in_array('Payment',$permissions)){
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        WhiteHatify
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Review</a>
      </div>
    </li>
   
  </ol>
</nav>

<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">Review</h2>

</div>
    <div class="p-4 flex sm:ml-64">
        
        <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Rid
                    </th>
                    <th scope="col" class="px-6 py-3">
                Sno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Review
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    
                    <!-- <th scope="col" class="px-6 py-3">
                    Edit User
                    </th> -->
                </tr>
            </thead>
            <tbody>
          
<?php
                $result1 = mysqli_query($con, "Select * from review");
                $pid = 1;
               while($row = mysqli_fetch_assoc($result1)){         
               echo'<tr
               class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
               <td class="px-6 py-4">
               '.$pid.'
               </td>
               <td class="px-6 py-4">
               '.$row['sno'].'
               </td>
               <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                   
                   <div>
                       <div class="text-base font-semibold">'.$row['name'].'</div>
                       <div class="font-normal text-gray-500">'.$row['email'].'</div>
                   </div>
               </th>
               <td class="px-6 py-4">
               '.$row['review'].'
               </td>
               <td class="px-6 py-4">
               '.$row['date'].'
               </td>
               <td class="px-6 py-4">
               <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots'.$row['rid'].'" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
               <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
             </button>
             
             <!-- Dropdown menu -->
             <div id="dropdownDots'.$row['rid'].'" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                 <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                   <li>
                     <a href="partials/deletereview.php?uno='.$row['rid'].'" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                   </li>
                 </ul>
             </div>
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
elseif(in_array('Payment',$permissions)){
header('location:payment.php');
}
elseif(in_array('ManageUser',$permissions)){
header('location:user.php');
}
elseif(in_array('ManageAdmin',$permissions)){
header('location:addadmin.php');
}

ob_end_flush();

?>