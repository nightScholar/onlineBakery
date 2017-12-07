<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Departments</title>
  </head>
  <body>
    
	<!-- we will need to edit this for us to use properly-->
	
	<p><a href="?addDepartment">Add a department</a></p>
    <p>Here are all the departments in the database:</p>
    <?php foreach ($dnames as $dname): ?>
      <blockquote>
        <p><?php echo htmlspecialchars($dname, ENT_QUOTES, 'UTF-8'); ?></p>
      </blockquote>
    <?php endforeach; ?>
  </body>
</html>
