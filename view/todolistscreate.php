<?php
    include ('vh.php');
    $request = \wsm\view\VH::getInitData();
    $feedback = \wsm\view\VH::getFeedBack();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>To-Do List</title>
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">-->
    <link href ="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>

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
               <li class="active"><a href="./?todolists/create">Create To-Do List</a></li>
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
    <form class="contact_form" method="post" name="contact_form">
        <input type="hidden" size="24" name = "type" value ="todolist" />
        <input type="hidden" size="24" name = "project_id" value ="<?= $request['project_id']?>" />
        <ul>
            <tr>
                <h2>Create to-do list</h2>
            </tr><br />
            <li>
                <label for="name">Title:</label>
                <input type="text" name ="Title" required />
            </li><br />
            <li>
                <label for="message">Description:</label>
                <textarea name="description" cols="40" rows="6" required ></textarea>
            </li><br />
            <tr>
        	<a><button class="btn btn-success" type="submit">POST</button></a>
            </tr>
        </ul>
    </form>
    <h4><p align="center"><?php echo $feedback;?></p></h4>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>