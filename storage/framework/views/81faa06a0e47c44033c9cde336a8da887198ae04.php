
<?php $__env->startSection('title'); ?>
SHOWING STUDENT INFORMATION
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>






<div class="row">
	
	<div class="col-sm-2"></div>

	<div class="col-sm-8">

<div class="card p-5 m-5"> 
	<h2 class="card-title text-primary text-center">STUDENT DATA</h2>

	<div class="card-body">
		<table class="table">
<tr class="table-primary">
	 <th scope="col">ID</th>
	 <th scope="col">Firstname</th>
	 <th scope="col">Middlename</th>
	 <th scope="col">Surname</th>
	 <th scope="col">Age</th>
</tr>



<tr class="">

	<th scope="row"><?php echo e($fetchstudent->id); ?></td>
	<td><?php echo e($fetchstudent->student_firstname); ?></td>
	<td><?php echo e($fetchstudent->student_middlename); ?></td>
	<td><?php echo e($fetchstudent->student_surname); ?></td>
	<td><?php echo e($fetchstudent->age); ?></td>

</tr>








</table>
	<a href="/student"><button type="button" class="btn btn-danger  btn-lg float-end" style="margin-left: 10px;">Close</button></a></div>



<div class="col-sm-2"></div>

</div>

</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aldrin\Desktop\crud\resources\views/showingstudent.blade.php ENDPATH**/ ?>