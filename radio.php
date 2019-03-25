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
					<div class="ui-radio_wrap">
						<span class="ui-radio">
							<input type="radio" id="ex_rd01" name="ex_rd"> 
							<label for="ex_rd01">Radio01</label>
						</span>
						<span class="ui-radio">
							<input type="radio" id="ex_rd02" name="ex_rd"> 
							<label for="ex_rd02">Radio02</label> 
						</span>
						<span class="ui-radio">
							<input type="radio" id="ex_rd03" name="ex_rd"> 
							<label for="ex_rd03">Radio03</label> 
						</span>
						<span class="ui-radio">
							<input type="radio" id="ex_rd04" name="ex_rd"> 
							<label for="ex_rd04">Radio04</label> 
						</span>
						<span class="ui-radio">
							<input type="radio" id="ex_rd05" name="ex_rd"> 
							<label for="ex_rd05">Radio05</label> 
						</span>
					</div>


					<div class="ui-radio_wrap">
						<span class="ui-radio ui-radio_small">
							<input type="radio" id="ex_srd01" name="ex_srd"> 
							<label for="ex_srd01">Radio01</label> 
						</span>
						<span class="ui-radio ui-radio_small">
							<input type="radio" id="ex_srd02" name="ex_srd"> 
							<label for="ex_srd02">Radio02</label> 
						</span>
						<span class="ui-radio ui-radio_small">
							<input type="radio" id="ex_srd03" name="ex_srd"> 
							<label for="ex_srd03">Radio03</label> 
						</span>
						<span class="ui-radio ui-radio_small">
							<input type="radio" id="ex_srd04" name="ex_srd"> 
							<label for="ex_srd04">Radio04</label> 
						</span>
						<span class="ui-radio ui-radio_small">
							<input type="radio" id="ex_srd05" name="ex_srd"> 
							<label for="ex_srd05">Radio05</label> 
						</span>
					</div>
					
					<div class="ui-radio_wrap">
						<span class="ui-radio ui-radio_small ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd01" name="ex_srd00"> 
							<label for="e_srd01">Radio01</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd02" name="ex_srd00"> 
							<label for="e_srd02">Radio02</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd03" name="ex_srd00"> 
							<label for="e_srd03">Radio03</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_disabled">
							<input type="radio" disabled="disabled" id="e_srd04" name="ex_srd00"> 
							<label for="e_srd04">Radio04</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_disabled">
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
<pre><code class="language-html"><p>&lt;div class="ui-radio_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;span class="ui-radio"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;input type="radio" id="ex_rd01" name="ex_rd"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;label type="button" for="ex_rd01"&gt;Radio01&lt;/label&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/span&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-radio_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;span class="ui-radio ui-radio_small"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;input type="radio" id="ex_srd01" name="ex_srd"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;label type="button" for="ex_srd01"&gt;Radio01&lt;/label&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/span&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-radio_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;span class="ui-radio ui-radio_small ui-radio_disabled"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;input type="radio"  disabled="disabled" id="e_srd01" name="ex_srd00"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;label type="button" for="e_srd01"&gt;Radio01&lt;/label&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/span&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>

</code></pre>						
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>


			<h3>Radio button type</h3>
			<p>Radio button type</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-radio_wrap">
						<span class="ui-radio ui-radio_button margin-5">
							<strong>
								<input type="radio" id="ex_ard01" name="ex02_rd"> 
								<label for="ex_ard01">Radio01</label>
							</strong>
						</span>
						<span class="ui-radio ui-radio_button margin-5">
							<strong>
								<input type="radio" id="ex_ard02" name="ex02_rd"> 
								<label for="ex_ard02">Radio02</label> 
							</strong>		
						</span>
						<span class="ui-radio ui-radio_button margin-5">
							<strong>
								<input type="radio" id="ex_ard03" name="ex02_rd"> 
								<label for="ex_ard03">Radio03</label> 
							</strong>
						</span>
						<span class="ui-radio ui-radio_button margin-5">
							<strong>
								<input type="radio" id="ex_ard04" name="ex02_rd"> 
								<label for="ex_ard04">Radio04</label> 
							</strong>
						</span>
						<span class="ui-radio ui-radio_button margin-5">
							<strong>
								<input type="radio" id="ex_ard05" name="ex02_rd"> 
								<label for="ex_ard05">Radio05</label> 
							</strong>	
						</span>
					</div>


					<div class="ui-radio_wrap">
						<span class="ui-radio ui-radio_small ui-radio_button margin-5">
							<input type="radio" id="ex_asrd01" name="ex02_srd"> 
							<label for="ex_asrd01">Radio01</label> 	
						</span>
						<span class="ui-radio ui-radio_small ui-radio_button margin-5">
							<input type="radio" id="ex_asrd02" name="ex02_srd"> 
							<label for="ex_asrd02">Radio02</label> 
						</span>	
						<span class="ui-radio ui-radio_small ui-radio_button margin-5">
							<input type="radio" id="ex_asrd03" name="ex02_srd"> 
							<label for="ex_asrd03">Radio03</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_button margin-5">
							<input type="radio" id="ex_asrd04" name="ex02_srd"> 
							<label for="ex_asrd04">Radio04</label> 
						</span>
						<span class="ui-radio ui-radio_small ui-radio_button margin-5">
							<input type="radio" id="ex_asrd05" name="ex02_srd"> 
							<label for="ex_asrd05">Radio05</label> 
						</span>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						radio button type
					</div>
							
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			

			<h3>Radio block type</h3>
			<p>Radio block type</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-radio_wrap">
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio">
								<input type="radio" id="ex_k01" name="ex_kw"> 
								<label for="ex_k01">ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label>
							</span>
						</div>						
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio">
								<input type="radio" id="ex_k02" name="ex_kw"> 
								<label for="ex_k02">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div>		
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio">
								<input type="radio" id="ex_k03" name="ex_kw"> 
								<label for="ex_k03">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div>
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio">
								<input type="radio" id="ex_k04" name="ex_kw"> 
								<label for="ex_k04">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LANDALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div>
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio">
								<input type="radio" id="ex_k05" name="ex_kw"> 
								<label for="ex_k05">ALL for LAND</label> 
							</span>
						</div>
					</div>

					<hr>

					<div class="ui-radio_wrap">
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio ui-radio_small">
								<input type="radio" id="ex_ks01" name="ex_ksw"> 
								<label for="ex_ks01">ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label>
							</span>
						</div>						
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio ui-radio_small">
								<input type="radio" id="ex_ks02" name="ex_ksw"> 
								<label for="ex_ks02">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div>		
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio ui-radio_small">
								<input type="radio" id="ex_ks03" name="ex_ksw"> 
								<label for="ex_ks03">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div> 
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio ui-radio_small">
								<input type="radio" id="ex_ks04" name="ex_ksw"> 
								<label for="ex_ks04">ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LANDALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND ALL for LAND</label> 
							</span>
						</div>
						<div class="margin-top-5 margin-bottom-5">
							<span class="ui-radio ui-radio_small">
								<input type="radio" id="ex_ks05" name="ex_ksw"> 
								<label for="ex_ks05">ALL for LAND</label> 
							</span>
						</div>
					</div>
				</div>

				<div class="meta">
					<div class="description">
						radio type
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