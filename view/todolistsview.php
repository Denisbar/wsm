<?php
    include ('vh.php');
    $request = \wsm\view\VH::getInitData();
    $request_message = \wsm\view\VH::getPageViewData();
?>
<!DOCTYPE html>

<html>
<head>
    <title>To-do</title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/listView.css">-->
    <link href ="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<style>
    .messageList{
        color: red;
    }
    .rectangle-list{
        color: blue;
    }
    </style>
<body>
    <div class ="block-up"><h1 class ="up"><?= $request['company_name']; ?> @BaseCamp Edition</h1></div>
        <div class = "block-up"><h2><a href="?"><?= $request['project_name'] ?></a></h2></div>        
        <div class = "block-up"><div class="<?= $request['status'] ?>"><?= $request['status']?></div></div>
	<hr>
    <table class ="overview-head">
        <thead>
           <ul class="nav nav-pills">
               <li><a href="./">Main</a></li>
               <li width="20px"></li>
               <li><a href="./?message/create">Create Message</a></li>
               <li width="20px"></li>
               <li><a href="./?todolists/create">Create To-Do List</a></li>
               <li width="20px"></li>
               <li><a href="./?message/view">View Messages</a></li>
               <li width="20px"></li>
               <li class="active"><a href="./?todolists/view">View To-Do Lists</a></li>
               <!--<td width="20px"></td>
               <td><a href="./?">Change Project</a></td>
               <td width="20px"></td>
               <td><a href="./?">Create Project</a></td>-->
           </ul>
        </thead>
    </table>
   
    <div class ="info-block">
        <div class="rightHead">
            <h2>Last To-Dos (to get the To-Dos - click the button "Sync with Basecamp")</h2>
        </div>
        <div class = "messageList">
            <ol class="rectangle-list">
                <?php foreach ($request_message as $index => $value): ?>
                    <li><a href="?todo/items/<?= $index;?>"><b><?=$request_message[$index]['to_do_list_name']?></b><br><i><?=$request_message[$index]['to_do_list_description']?></i></a></li>
                <?php endforeach; ?>
            </ol>
        </div>
        <div class = "updateButton">
            <a class="menu" href="?todolists/update"><button class="btn btn-success">Sync with Basecamp</button></a>
        </div>
    </div>
        
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>