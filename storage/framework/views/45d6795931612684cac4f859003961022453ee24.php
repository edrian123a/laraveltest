
<?php $__env->startSection('title'); ?>
ADDING FORM IN STUDENT INFORMATION
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">

<div class="card p-4 mt-5">

	<h1 class="card-title text-primary text-center">ADDING STUDENT</h1>
	<div class="card-body">
<form action="/student" method="POST">
<!-- 	cross site request forgery csrf -->
	<?php echo csrf_field(); ?>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Firstname">
  <label for="Firstname">Firstname</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Middlename" name="middlename" placeholder="Middlename">
  <label for="Middlename">Middlename</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Surname" name="surname"  placeholder="Surname">
  <label for="Surname">Surname</label>
</div>

<div class="form-floating mb-3">
  <input type="int" class="form-control" id="Age"  name="age" placeholder="Age">
  <label for="Age">Age</label>
</div>

<div class="form">
  <input type="submit" name="submit" class="form-control btn btn-primary btn-lg">
</div>




</form>

</div>
	</div>
	


	</div>
	<div class="col-sm-2"></div>

</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aldrin\Desktop\crud\resources\views/addingstudent.blade.php ENDPATH**/ ?>