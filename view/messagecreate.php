<?php
    include ('vh.php');
    $request = \wsm\view\VH::getInitData();
    $feedback = \wsm\view\VH::getFeedBack();
    
?>
<!DOCTYPE html>

<html>
<head>
    <title>Message</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">-->
    <link href ="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<style>
.contact_form input:required:valid, .contact_form textarea:required:valid {
	background: #fff url(images/valid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #5cd053;
	border-color: #28921f;
}

.contact_form input:focus:invalid, .contact_form textarea:focus:invalid {
	background: #fff url(images/invalid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #d45252;
	border-color: #b03535
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
               <li class="active"><a href="./?message/create">Create Message</a></li>
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
    <form class="contact_form" method="post" name="contact_form">
        <input type="hidden" size="24" name = "type" value ="createmessage" />
        <input type="hidden" size="24" name = "project_id" value ="<?= $request['project_id']?>" />
        <ul>
            <tr>
                <h2>Post Your message please:</h2>
            </tr><br />
            <li>
                <label for="name">Title:</label>
                <input type="text" name ="Title" required />
            </li><br />
            <li>
                <label for="message">Message:</label>
                <textarea name="message" cols="40" rows="6" required ></textarea>
            </li>
            </ul>
        <hr>
        <ul>
            <p>
        	<button class="btn btn-success" type="submit">POST</button>
            </p>
        </ul>
    </form>
    <h4><p align="center"><?php echo $feedback;?></p></h4>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>