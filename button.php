<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">버튼</h1>
			<p class="info-text">버튼은 기본, 그룹, 플렉스, 그리드 형식으로 나눴으며 좌측, 중앙, 우측의 형태로 구분하였습니다.</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>기본형 버튼</h3>
			<p>기본형 버튼입니다.</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-btn_wrap">
						<div class="ui-btn_center">
							<button type="submit" class="ui-btn">확인</button>
							<button type="button" class="ui-btn">취소</button>
							<button type="button" class="ui-btn">수정</button>
						</div>
					</div>
					
					<div class="ui-btn_wrap">
						<div class="ui-btn_right">
							<button type="submit" class="ui-btn">확인</button>
							<button type="button" class="ui-btn">취소</button>
							<button type="button" class="ui-btn">수정</button>
						</div>
					</div>

					<div class="ui-btn_wrap">
						<div class="ui-btn_left">
							<button type="submit" class="ui-btn">확인</button>
							<button type="button" class="ui-btn">취소</button>
							<button type="button" class="ui-btn">수정</button>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						기본형 버튼
					</div>
							
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre">						</span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_right"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre">						</span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_left"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre">						</span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>

</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
			
			<h3>그룹형 버튼</h3>
			<p>그룹형 버튼입니다.</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-btn_wrap">
						<div class="ui-btn_center">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
								<button type="button" class="ui-btn">수정</button>
							</div>
						</div>
					</div>


					<div class="ui-btn_wrap">
						<div class="ui-btn_right">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
								<button type="button" class="ui-btn">수정</button>
							</div>
						</div>
					</div>

					<div class="ui-btn_wrap">
						<div class="ui-btn_left">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
								<button type="button" class="ui-btn">수정</button>
							</div>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						그룹형 버튼
					</div>
							
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-btn_group"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre">		
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_right"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-btn_group"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre">		
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-btn_left"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-btn_group"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;수정&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre">		
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>

</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>
		

			<h3>플렉스형 버튼</h3>
			<p>플렉스형 버튼입니다.</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-btn_wrap">
						<div class="ui-col-4 ui-btn_left">
							<button type="submit" class="ui-btn">prev</button>
						</div>
						<div class="ui-col-4 ui-btn_center">
							<button type="button" class="ui-btn">middle</button>
						</div>
						<div class="ui-col-4 ui-btn_right">
							<button type="button" class="ui-btn">next</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-6 ui-btn_left">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
							</div>
						</div>
						<div class="ui-col-6 ui-btn_right">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-6 ui-btn_left">
							<button type="button" class="ui-btn">prev</button>
							<button type="button" class="ui-btn">prev</button>
						</div>
						<div class="ui-col-6 ui-btn_right">
							<button type="button" class="ui-btn">next</button>
							<button type="button" class="ui-btn">next</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-6 ui-btn_left">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
								<button type="button" class="ui-btn">수정</button>
							</div>
						</div>
						<div class="ui-col-6 ui-btn_right">
							<div class="ui-btn_group">
								<button type="submit" class="ui-btn">확인</button>
								<button type="button" class="ui-btn">취소</button>
								<button type="button" class="ui-btn">수정</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-6 ui-btn_left">
							<button type="button" class="ui-btn">prev</button>
							<button type="button" class="ui-btn">prev</button>
							<button type="button" class="ui-btn">prev</button>
						</div>
						<div class="ui-col-6 ui-btn_right">
							<button type="button" class="ui-btn">next</button>
							<button type="button" class="ui-btn">next</button>
							<button type="button" class="ui-btn">next</button>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						플렉스형 버튼
					</div>
							
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4 ui-btn_left"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="submit" class="ui-btn"&gt;prev&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;middle&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4 ui-btn_right"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;next&lt;/button&gt;</p>	
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6 ui-btn_left"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-col-6 ui-btn_group"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6 ui-btn_right"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-col-6 ui-btn_group"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;확인&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;취소&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6 ui-btn_left"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-col-6"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;prev&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;next&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6 ui-btn_right"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div class="ui-col-6"&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="submit" class="ui-btn"&gt;prev&lt;/button&gt;</p>
<p><span style="white-space:pre">			</span>&lt;button type="button" class="ui-btn"&gt;next&lt;/button&gt;</p>
<p><span style="white-space:pre">		</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>


</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>


			<h3>그리드형 버튼</h3>
			<p>그리드형 버튼입니다.</p>
			<div class="demo-block">
				<div class="source">
					<div class="ui-btn_wrap">
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-2 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-3 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-3 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-3 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-3 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-4 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-4 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-4 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-col-6 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
						<div class="ui-col-6 ui-btn_center">
							<button type="button" class="ui-btn">Button</button>
						</div>
					</div>
					<hr>
					<div class="ui-btn_wrap">
						<div class="ui-btn_center ui-col-12">
							<button type="button" class="ui-btn">Button</button>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						그리드형 버튼 
					</div>
							
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-btn_wrap"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="submit" class="ui-btn"&gt;button&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;button&lt;/button&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;button&lt;/button&gt;</p>	
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;button&lt;/button&gt;</p>	
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;button&lt;/button&gt;</p>	
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2 ui-btn_center"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;button type="button" class="ui-btn"&gt;button&lt;/button&gt;</p>	
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre"></span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>


			<h3>속성</h3>
			<table>
				<thead>
					<tr>
						<th>속성</th>
						<th>설명</th>
						<th>타입</th>
						<th>Accepted Values</th>
						<th>기본</th>
					</tr>
				</thead>
				<tr>
					<td>size</td>
					<td>버튼크기</td>
					<td>string</td>
					<td>width-1~500 , height-1~500</td>
					<td>height:40px , width : 60px</td>
				</tr>
			</table>
			
		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
<?php
	include("foot.php");
?>