<?php
    include ('vh.php');
    $request = \wsm\view\VH::getInitData();
?>
<!DOCTYPE html>

<html>
<head>
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">-->
    <link href ="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>    
<body>
    <div class ="block-up"><h1 class ="up"><?= $request['company_name']; ?> @BaseCamp Edition</h1></div>
        <div class = "block-up"><h2><a href=""><?= $request['project_name'] ?></a></h2></div>        
        <div class = "block-up"><div class="<?= $request['status'] ?>"><?= $request['status']?></div></div>
	<hr>
    <table class ="overview-head">
        <thead>
           <ul class="nav nav-pills">
               <li class="active"><a href="./">Main</a></li>
               <li width="20px"></li>
               <li><a href="./?message/create">Create Message</a></li>
               <li width="20px"></li>
               <li><a href="./?todolists/create">Create To-Do List</a></li>
               <li width="20px"></li>
               <li><a href="./?message/view">View Messages</a></li>
               <li width="20px"></li>
               <li><a href="./?todolists/view">View To-Do Lists</a></li>
               <!--<td width="20px"></td>
               <td><a href="./?">Change Project</a></td>
               <td width="20px"></td>
               <td><a href="./?">Create Project</a></td>-->
           </ul>
        </thead>
    </table>
    <table class ="overview-body">
        <tr>
           <td><h1 style = "color:greenyellow">AweSome 4Paws</h1></td>
         </tr>
    </table>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>