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
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.min.css">
   <style>
    #myTable_length select {
        width: 60px;
    }
    </style>
</head>

<body>
    
<div class="p-4 mt-8 pb-0 sm:ml-64">


<nav class="flex mb-6" aria-label="Breadcrumb">
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
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Payment</a>
      </div>
    </li>
   
  </ol>
</nav>

<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">Payment</h2> 
</div>
    <div class="p-4 flex sm:ml-64">
        
        <table id="myTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Pid
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Client / Invoice
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      email
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Transaction ID
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Plan
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Amount
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Issued
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Status
                    </th>
                  
                  </tr>
            </thead>
            <tbody>
          
<?php
                $result1 = mysqli_query($con, "Select * from payments");
               $pid = 1;
               $num = rand(1,4);
               while($row = mysqli_fetch_assoc($result1)){         
                $invoice = $row['invoice'];
                $firstname = $row['firstname'];
                $url = $row['url'];
                $plan = $row['plan'];
                $amount = $row['amount'];
                $txnid = $row['txnid'];
                $email = $row['payer_email'];
                $date = $row['payment_date'];
                $status = $row['status'];
            


               echo'   <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$pid.'</p>
                      
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            '.$firstname.'
                          </p>
                          <p class="text-gray-600 whitespace-no-wrap">'.$invoice.'</p>
                        </div>
                      
                    </td>
                  
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$email.'</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$txnid.'</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$plan.'</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$amount.'₹</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">'.$date.'</p>
                     
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                      <span
                        class="relative inline-block px-3 pt-1 pb-2 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative ">'.$status.'</span>
                      </span>
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



    let status =  document.querySelectorAll('.status');
        for (let element of status) {
            if(element.textContent === "Accept")
            {
                 element.classList.add("text-lime-700");
            }
            else{
                element.classList.add("text-red-700");
            }
        }
        

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
elseif(in_array('ManageUser',$permissions)){
header('location:user.php');
}
elseif(in_array('ManageAdmin',$permissions)){
header('location:addadmin.php');
}

ob_end_flush();

?>