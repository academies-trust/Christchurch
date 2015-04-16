<script>
	
	$("#btn_events").click(function(){
		$(".news").addClass("hidden");
		$("#btn_events").addClass("active");
		$("#btn_new").removeClass("active");
		$(".events").removeClass("hidden")
	});
	$("#btn_new").click(function(){
		$(".events").addClass("hidden");
		$("#btn_new").addClass("active");
		$("#btn_events").removeClass("active");
		$(".news").removeClass("hidden")
	});
	

</script>