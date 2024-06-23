<html lang="en">
<head>
    <meat charset="UTF-8">
    <meat name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="./dashboardstyle.css">
</head>
<body>

<div class="container">
    <form action="process.php" method="POST">

    <div class ="input-field">
    <span class="image">
        <img src="logo3.png" alt="icon">
    </span>
        <!--<lable for="title">FlexiReport</label>-->
        <input type="text" name="Article_title" id="title">
    </div>
    
    <textarea name="Article_content" id="Article_editor"></textarea>

    <input type="submit" class="publish-btn" name="submit_data" value="publish">
</form>
</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
   CKEDITOR.replace('Article_editor'); 
</script>


</body>
</html>
