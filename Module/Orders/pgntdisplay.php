
<div class="pagination">
	<ul class="pagination pagination-sm justify-content-center list-inline">
<?php 
if($current_page>= 1 && $pages>=1){
	echo '<li class="page-item">
	<a class="page-link" href="index.php?module='.$module.'&action='.$action.'&keyword='.$keyword.'&page='.($current_page-1).'">Trước</a>
	</li>';
}
for($i=1;$i<=$pages;$i++)
	if($i==$current_page){
		echo '<li class="page-item">
		<a class="page-link" style="font-weight:bold; font-size:15px;">'.$i.'</a>
		</li>';

	}
else{
	echo '<li class="page-item">
	<a class="page-link" href="index.php?module='.$module.'&action='.$action.'&keyword='.$keyword.'&page='.$i.'">'.$i.'</a>
	</li>';
}
if($current_page<$pages && $pages>1){
	echo '<li class="page-item">
	<a class="page-link" href="index.php?module='.$module.'&action='.$action.'&keyword='.$keyword.'&page='.($current_page+1).'">Tiếp</a>
	</li>';
}
?>
</ul><br><br>
</div><br><br>