<?php
include ("common/header.php");
?>


<form action="submit/newbook.php" class="dashboard-form flex" enctype="multipart/form-data" method="POST">
  <input type="text" name="name" placeholder="Enter Book Name" />
  <input type="text" name="publisher" placeholder="Enter Publisher Name" />
  <input type="text" name="isbn" placeholder="Enter ISBN Code" />
  <input type="text" name="quantity" placeholder="Number Of Books Available" />
  <button type="submit" value="Submit" name="submit" class="button-secondary">Submit</button>
</form>

<?php
include ("common/footer.php");
?>