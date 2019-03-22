	<script>
		$(".demo-control").on("click" , function(event){
			event.stopPropagation();
		
			if($(this).is(".active")){
				$(this).prev(".meta").height(0);
				$(this).removeClass('active');
			} else {
				var height = $(this).siblings(".meta").find(".highlight").outerHeight() + $(this).siblings(".meta").find(".description").outerHeight() + 20;
				$(this).prev(".meta").height(height);
				$(this).addClass('active');
			}
		});
	</script>

	<!-- #brand_foot
	<footer id="brand_foot" data-layout="foot">
		<div class="inner_foot">
			<div class="foot_addr">
				서울특별시 금천구 가산디지털1로 145 TEL : 02 - 855 - 5724 FAX : 02 - 857 - 5746
			</div>
			<p class="foot_copyright">
				© ALLFORLAND, All rights reserved.
			</p>
		</div>
	</footer>
	#brand_foot -->
</div>
<!-- #brand_Wrap -->
</body>
</html>