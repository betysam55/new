<div class="text-center ">
<br>
<nav aria-label="Page navigation" class="text-center">
	<ul class="pagination text-center" >
		&nbsp&nbsp&nbsp&nbsp&nbsp
		<li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
		<li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Previous</a></li>
		<li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a></li>
		<li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
	</ul>
</nav>
	<br>
</div>