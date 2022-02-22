<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['address']) && isset($_POST['title']) && isset($_POST['poem'])) {
  $name = $_POST['name'];
  $address = $_POST['address'];
  $title = $_POST['title'];
  $poem = $_POST['poem'];
  $sql = 'INSERT INTO phtable (Name, Address, Title, Content) VALUES(:Name, :Address, :Title, :Content)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':Name' => $name, ':Address' => $address, ':Title' => $title, ':Content' => $poem])) {
    $message = 'Submitted Successfully';
  }
} else {
    $message = 'Please fill the form';
}
 


 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Submit an Entry</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-warning">
          <?= $message; ?>
        </div>
      <?php endif; ?> 
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input required type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input required type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="title">Title</label>
          <input required type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group"> 
          <textarea required placeholder="Type your entry here" id="content" name="poem" rows="5" cols="50"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
