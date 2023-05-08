
<?php $__env->startSection('title'); ?>
UPDATING FORM IN STUDENT INFORMATION
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>



<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">

<div class="card p-4 mt-5">

	<h1 class="card-title text-primary text-center">ADDING STUDENT</h1>
	<div class="card-body">
<form action="/student/<?php echo e($fetchstudent->id); ?>" method="POST">
<!-- 	cross site request forgery csrf -->
	<?php echo method_field('PUT'); ?>
	<?php echo csrf_field(); ?>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Firstname" value="<?php echo e($fetchstudent->student_firstname); ?>">
  <label for="Firstname">Firstname</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Middlename" name="middlename" placeholder="Middlename" value="<?php echo e($fetchstudent->student_middlename); ?>">
  <label for="Middlename">Middlename</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Surname" name="surname"  placeholder="Surname" value="<?php echo e($fetchstudent->student_surname); ?>">
  <label for="Surname">Surname</label>
</div>

<div class="form-floating mb-3">
  <input type="int" class="form-control" id="Age"  name="age" placeholder="Age" value="<?php echo e($fetchstudent->age); ?>">
  <label for="Age">Age</label>
</div>

<div class="form mt-4">
	<a href="/student"><button type="button" class="btn btn-danger  btn-lg float-end" style="margin-left: 10px;">Close</button></a>
  <input type="submit" name="submit" class="btn btn-primary btn-lg float-end">
  
</div>




</form>

</div>
	</div>
	


	</div>
	<div class="col-sm-2"></div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aldrin\Desktop\crud\resources\views/updatingstudent.blade.php ENDPATH**/ ?>