<?php
	include '/php/head-start.php';
?>
<title>404 Page - Landscape Lifestyles - We're very sorry, you seem to have run into a brick wall.</title>
<?php
	include '/php/head-end.php';
?>

<?php
	include '/php/body-navigation.php';
?>

<!-- main content here -->
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you seem to have found an unwanted page/link.</p>
  <hr>
  <p class="mb-0">Please find your way back to our home page here: </p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<script>
	$('.alert').alert()
</script>

<?php
	include '/php/footer-end.php';
?>