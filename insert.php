<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-8">

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
          <hr>
          <a class="btn btn-secondary btn-block" href="index.php">Cancel</a>
        </form>
      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
