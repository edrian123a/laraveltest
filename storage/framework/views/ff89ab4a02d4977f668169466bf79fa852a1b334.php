
<?php $__env->startSection('title'); ?>
STUDENT INFORMATION
<?php $__env->stopSection(); ?> 



<?php $__env->startSection('content'); ?>




<div class="row">
	
	<div class="col-sm-1"></div>

	<div class="col-sm-10">

<div class="card p-5 m-5">
<a class="mb-3" href="/student/create"><button class="btn btn-success">Add Student</button></a>

		<table class="table">
<tr class="table-danger">
	 <th scope="col">ID</th>
	 <th scope="col">Firstname</th>
	 <th scope="col">Middlename</th>
	 <th scope="col">Surname</th>
	 <th scope="col">Age</th>
	 <th scope="col" class="text-center">Action</th>
</tr>



	<?php $__empty_1 = true; $__currentLoopData = $fetchstudent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<tr class="text-center">

	<th scope="row"><?php echo e($student->id); ?></td>
	<td><?php echo e($student->student_firstname); ?></td>
	<td><?php echo e($student->student_middlename); ?></td>
	<td><?php echo e($student->student_surname); ?></td>
	<td><?php echo e($student->age); ?></td>
	<td><a href="/student/<?php echo e($student->id); ?>"><button class="btn btn-secondary">View</button></a> | <a href="/student/<?php echo e($student->id); ?>/edit"><button class="btn btn-primary">Update</button></a> |  <a onclick="return confirmation()" class="btn btn-danger" data-confirm-delete="true">Delete</a> 
	</td>

</tr>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	<div class="text-gray-700">No data found</div>
	<?php endif; ?>






</table></div>


<div class="col-sm-1"></div>

</div>

</div>




<?php echo e($fetchstudent ->links()); ?>


<?php $__env->stopSection(); ?>



<script type="text/javascript">
function confirmation(){
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

 window.location.href = "<?php echo URL::to('destroy', $student->id);


 
 ?>";

    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )

  }
})


}




</script>






<!-- for additional footer lang ito
<?php $__env->startSection('footer'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('footer'); ?>
<p>This is the additional footer</p>
<?php $__env->stopSection(); ?> -->



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aldrin\Desktop\crud\resources\views/student.blade.php ENDPATH**/ ?>