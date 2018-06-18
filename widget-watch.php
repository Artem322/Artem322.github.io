<div class="moved wow fadeInUp">
			<a href="javascript://0" class="mover" onclick="slowScroll('#more')">Watch</a>
</div>
<script src="web/js/jquery.min.js"></script>
<script>
	function slowScroll (id) {
 var offset = 90;
 $('html, body').animate ({
  scrollTop: $(id).offset ().top - offset
 }, 2000);
 return false;
}﻿
</script>