<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">Radio</h1>
			<p class="info-text">
				Ridio button.
			</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>Radio default</h3>
			<p>Radio default</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-radio">
						<input type="radio" id="ex_rd01" name="ex_rd"> 
						<label for="ex_rd01">Radio01</label>

						<input type="radio" id="ex_rd02" name="ex_rd"> 
						<label for="ex_rd02">Radio02</label> 

						<input type="radio" id="ex_rd03" name="ex_rd"> 
						<label for="ex_rd03">Radio03</label> 

						<input type="radio" id="ex_rd04" name="ex_rd"> 
						<label for="ex_rd04">Radio04</label> 

						<input type="radio" id="ex_rd05" name="ex_rd"> 
						<label for="ex_rd05">Radio05</label> 
					</div>


					<div class="ui-radio ui-radio_small">
						<input type="radio" id="ex_srd01" name="ex_srd"> 
						<label for="ex_srd01">Radio01</label> 

						<input type="radio" id="ex_srd02" name="ex_srd"> 
						<label for="ex_srd02">Radio02</label> 

						<input type="radio" id="ex_srd03" name="ex_srd"> 
						<label for="ex_srd03">Radio03</label> 

						<input type="radio" id="ex_srd04" name="ex_srd"> 
						<label for="ex_srd04">Radio04</label> 

						<input type="radio" id="ex_srd05" name="ex_srd"> 
						<label for="ex_srd05">Radio05</label> 
					</div>
					
					<div class="ui-radio ui-radio_small">
						<span class="ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd01" name="ex_srd00"> 
							<label for="e_srd01">Radio01</label> 
						</span>
						<span class="ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd02" name="ex_srd00"> 
							<label for="e_srd02">Radio02</label> 
						</span>
						<span class="ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd03" name="ex_srd00"> 
							<label for="e_srd03">Radio03</label> 
						</span>
						<span class="ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd04" name="ex_srd00"> 
							<label for="e_srd04">Radio04</label> 
						</span>
						<span class="ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd05" name="ex_srd00"> 
							<label for="e_srd05">Radio05</label> 
						</span>
					</div>

				</div>
				<div class="meta">
					<div class="description">
						기본형 Radio
					</div>
							
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>


			<h3>Radio button type</h3>
			<p>Radio button type</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-radio">
						<span class="ui-radio_button">
							<strong>
								<input type="radio" id="ex_ard01" name="ex02_rd"> 
								<label for="ex_ard01">Radio01</label>
							</strong>
						</span>
						<span class="ui-radio_button">
							<strong>
								<input type="radio" id="ex_ard02" name="ex02_rd"> 
								<label for="ex_ard02">Radio02</label> 
							</strong>		
						</span>
						<span class="ui-radio_button">
							<strong>
								<input type="radio" id="ex_ard03" name="ex02_rd"> 
								<label for="ex_ard03">Radio03</label> 
							</strong>
						</span>
						<span class="ui-radio_button">
							<strong>
								<input type="radio" id="ex_ard04" name="ex02_rd"> 
								<label for="ex_ard04">Radio04</label> 
							</strong>
						</span>
						<span class="ui-radio_button">
							<strong>
								<input type="radio" id="ex_ard05" name="ex02_rd"> 
								<label for="ex_ard05">Radio05</label> 
							</strong>	
						</span>
					</div>


					<div class="ui-radio ui-radio_small">
						<input type="radio" id="ex_asrd01" name="ex02_srd"> 
						<label for="ex_asrd01">Radio01</label> 

						<input type="radio" id="ex_asrd02" name="ex02_srd"> 
						<label for="ex_asrd02">Radio02</label> 

						<input type="radio" id="ex_asrd03" name="ex02_srd"> 
						<label for="ex_asrd03">Radio03</label> 

						<input type="radio" id="ex_asrd04" name="ex02_srd"> 
						<label for="ex_asrd04">Radio04</label> 

						<input type="radio" id="ex_asrd05" name="ex02_srd"> 
						<label for="ex_asrd05">Radio05</label> 
					</div>
				</div>
				<script>
					$(document).ready(function(){
						var radiodBtn = $(".ui-radio_button");

						radiodBtn.on("click" , function(){
							if(radiodBtn.find("strong")){
								$(this).parent().removeClass("active");
							} else {
								$(this).parent().addClass("active");
							}
						});
					})
				</script>
				<script>
				 $(function(){
				  var sBtn = $("ul > li");    //  ul > li 이를 sBtn으로 칭한다. (클릭이벤트는 li에 적용 된다.)
				  sBtn.find("a").click(function(){    // sBtn에 속해 있는  a 찾아 클릭 하면.
				   sBtn.removeClass("active");    // sBtn 속에 (active) 클래스를 삭제 한다.
				   $(this).parent().addClass("active"); // 클릭한 a에 (active)클래스를 넣는다.
				  })
				 })
				</script>
				<ul>

			     <li><a>1</a></li>

			     <li><a>2</a></li>

			     <li><a>3</a></li>

			     <li><a>4</a></li>

			     <li><a>5</a></li>

			     <li><a>6</a></li>

			   </ul>
				

				<div class="meta">
					<div class="description">
						기본형 Radio
					</div>
							
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			
			
		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
<?php
	include("foot.php");
?>