<?php
	include('head.php');
?>
	

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">문서</h1>
			<p class="info-text">실행 방법 및 간략한 설명</p>
		</header>

		<!-- .content -->
		<div data-content="content">
			<h3>실행</h3>
			<p>기본 실행파일 세팅</p>
			<div class="highlight">
<pre><code class="language-html"><p>&lt;!DOCTYPE html&gt;</p>
<p>&lt;html&gt;</p>
<p>&lt;head&gt;</p>
<p>&nbsp; &lt;meta charset="utf-8"&gt;</p>
<p>&nbsp; &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;</p>
<p>&nbsp; &lt;title&gt;프로젝트 | 관리자&lt;/title&gt;</p>
<p>&nbsp; &lt;link rel="stylesheet" href="assets/components/font-awesome-4.7.0/css/font-awesome.min.css"&gt;</p>
<p>&nbsp; &lt;!-- 스타일 : 초기화 페이지 공통 --&gt;</p>
<p>&nbsp; &lt;link rel="stylesheet" href="assets/css/base.css"&gt;</p>
<p>&nbsp; &lt;link rel="stylesheet" href="assets/css/css/ui.css"&gt;</p>
<p>&nbsp; &lt;!-- 기본 스크립트 --&gt;</p>
<p>&nbsp; &lt;script src="assets/js/jquery-1.12.4.min.js"&gt;&lt;/script&gt;</p>
<p>&nbsp; &lt;!-- 코드 highlight --&gt;</p>
<p>&nbsp; &lt;link rel="stylesheet" href="assets/components/prism/prism.css"&gt;</p>
<p>&nbsp; &lt;script src="assets/components/prism/prism.js"&gt;&lt;/script&gt;</p>
<p>&nbsp; &lt;!-- 컴포넌트 : common.js --&gt;</p>
<p>&nbsp; &lt;script src="assets/js/common.js"&gt;&lt;/script&gt;</p>
<p>&nbsp; &lt;!--[if lt IE 9]&gt;</p>
<p>&nbsp; <span style="white-space:pre">	</span>&lt;script src="assets/html5shiv.min.js"&gt;&lt;/script&gt;</p>
<p>&nbsp; &lt;![endif]--&gt;</p>
<p>&lt;/head&gt;</p>
<p>&lt;body&gt;</p>
</code></pre>
			</div>

			<h3>폰트</h3>
			<p>각 폰트 설정방법</p>
<pre><code class="language-html">&lt;link rel="stylesheet" href="./assets/css/fonts/NanumGothic.css"&gt;
&lt;link rel="stylesheet" href="./assets/css/fonts/NotoSansKR.css"&gt;
</code></pre>
<pre><code class="language-css">base.css
	body{font-family:"NunumGothic";}
	body{font-family: 'Noto Sans KR';}
</code></pre>

<style>
	p code{
		background-color: #f9fafc;
	    padding: 0 4px;
	    border: 1px solid #eaeefb;
	    border-radius: 4px;
	}
</style>
		<h3>폰트-아이콘</h3>
		<p><code>font-awesome 4.7</code> 많이 쓰이는 아이콘 정렬</p>

		<div class="demo-font-awesome">
			<ul>
				<li>
					<i class="fa fa-angle-down"></i>
					<span class="ico-name">fa fa-angle-down</span>
				</li>
				<li><i class="fa fa-angle-up"></i>
					<span class="ico-name">fa fa-angle-up</span>
				</li>
				<li><i class="fa fa-angle-right"></i>
					<span class="ico-name">fa-angle-right</span>
				</li>
				<li><i class="fa fa-angle-double-right"></i>
					<span class="ico-name">fa-angle-double-right</span>
				</li>
				<li><i class="fa fa-angle-double-left"></i>
					<span class="ico-name">fa-angle-double-left</span>
				</li>
				<li><i class="fa fa-file-image-o"></i>
					<span class="ico-name">fa-file-image-o</span>
				</li>
				<li><i class="fa fa-file-photo-o"></i>
					<span class="ico-name">fa-file-photo-o</span>
				</li>
				<li><i class="fa fa-file-picture-o"></i>
					<span class="ico-name">fa-file-picture-o</span>
				</li>
				<li><i class="fa fa-file-powerpoint-o"></i>
					<span class="ico-name">fa-file-powerpoint-o</span>
				</li>
				<li><i class="fa fa-file-excel-o"></i>
					<span class="ico-name">fa-file-excel-o</span>
				</li>
				<li><i class="fa fa-file-word-o"></i>
					<span class="ico-name">fa-file-word-o</span>
				</li>
				<li><i class="fa fa-file-pdf-o"></i>
					<span class="ico-name">fa-file-pdf-o</span>
				</li>
			</ul>
		</div>

		</div>
		<!-- .content -->
	</section>
	<!-- #brandContent -->
	
<?php
	include("foot.php");
?>