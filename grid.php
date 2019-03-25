<?php
	include('head.php');
?>

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">그리드</h1>
			<p class="info-text">그리드를 설명합니다.</p>
		</header>

		<!-- .content -->
		<div data-content="content">
			<h3>기본형</h3>
			<p>열을 사용하여 기본 모든 레이아웃을 만듭니다.</p>
			<div class="demo-block demo-layout">
				<div class="source">

					<div class="ui-row">
						<div class="ui-col-12">
							<div>ui-col-12</div>
						</div>						
					</div>

					<div class="ui-row">
						<div class="ui-col-2">
							<div>ui-col-2</div>
						</div>
						<div class="ui-col-4">
							<div>ui-col-4</div>
						</div>
						<div class="ui-col-6">
							<div>ui-col-6</div>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code>class=ui-col-</code> 1~12 사용
					</div>
					
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-row"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-12"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-12&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;<span style="white-space:pre">						</span></p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-row"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-2&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-4&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-6&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
</code></pre>
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>간격</h3>
			<p>클래스를 통한 그리드 간격</p>
			<div class="demo-block demo-layout">
				<div class="source">
					<div class="ui-row gutter-10">
						<div class="ui-col-2">
							<div>ui-col-2</div>
						</div>
						<div class="ui-col-4">
							<div>ui-col-4</div>
						</div>
						<div class="ui-col-6">
							<div>ui-col-2</div>
						</div>
					</div>

					<div class="ui-row gutter-20">
						<div class="ui-col-2">
							<div>ui-col-2</div>
						</div>
						<div class="ui-col-4">
							<div>ui-col-4</div>
						</div>
						<div class="ui-col-6">
							<div>ui-col-2</div>
						</div>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code>class=ui-row gutter-</code> 10 단위로 30까지 사용
					</div>
					
					<div class="highlight">
<pre><code class="language-html"><p>&lt;div class="ui-row gutter-10"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-2&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-4&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-2&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
<p><br /></p>
<p>&lt;div class="ui-row gutter-20"&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-2"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-2&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-4"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-4&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;div class="ui-col-6"&gt;</p>
<p><span style="white-space:pre">		</span>&lt;div&gt;ui-col-2&lt;/div&gt;</p>
<p><span style="white-space:pre">	</span>&lt;/div&gt;</p>
<p>&lt;/div&gt;</p>
	
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