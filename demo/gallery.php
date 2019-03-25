<?php
	include('../head.php');
?>
	

	<!-- #brandContent -->
	<section id="brand_content" data-layout="content">
		<header data-content="header">
			<h1 class="title">갤러리</h1>
			<p class="info-text">갤러리 게시판 형태의 유형</p>
		</header>

		<!-- .content -->
		<div data-content="content">

			<h3>기본 박스형</h3>
			<p>
				기본 GALLERY 게시판 유형
			</p>
			<div class="demo-block">
				<div class="source">
					<article id="bo_list">

						<header class="ui-row gutter-20 search-header">
							<div class="ui-col-6 total-view">
								총<strong>10</strong>건이 검색되었습니다.
							</div>
							<div class="ui-col-6 ta-r">
								<div class="ui-serach-box">
									<span class="ui-select fa">
										<select name="" id="">
								            <option value="">제목</option>
								            <option value="">내용</option>
								            <option value="">제목+내용</option>
								            <option value="">회원아이디</option>
								            <option value="">글쓴이</option>
								        </select>
							        </span>
							        <input type="text" class="ui-input" placeholder="검색어를 입력해주세요.">
							        <button type="" class="ui-btn">검색</button>
						        </div>
							</div>
						</header>
						<div class="photo_list">
							<ul class="ui-row gutter-20">
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명</p>
										</a>
									</div>
								</li>
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명</p>
										</a>
									</div>
								</li>
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명</p>
										</a>
									</div>
								</li>
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명 테스트 이미지명 테스트 이미지명 테스트 이미지명</p>
										</a>
									</div>
								</li>
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명</p>
										</a>
									</div>
								</li>
								<li class="ui-col-4">
									<div class="wrap_list">
										<input type="checkbox">
										<a href="#">
											<span class="thumb">
												<img src="https://via.placeholder.com/250" alt="">
											</span>
											<p class="item_subject">테스트 이미지명</p>
										</a>
									</div>
								</li>
								
							</ul>

						</div>

						<div class="ui-row">
							<div class="ui-btn_wrap ui-col-12 margin-top-0">
								<div class="ui-btn_right">
									<div class="ui-btn_group">
										<button type="submit" class="ui-btn">확인</button>
										<button type="button" class="ui-btn">취소</button>
										<button type="button" class="ui-btn">수정</button>
									</div>
								</div>
							</div>
						</div>
						

					</article>
					<!-- #bo_list -->
					<div class="ui-paging">
						<a href="" class="pg_start"></a>
						<a href="" class="pg_prev"></a>
						<a href="#" class="pg_page">1</a>
						<a href="#" class="pg_page">2</a>
						<a href="#" class="pg_page">3</a>
						<a href="#" class="pg_page">4</a>
						<a href="#" class="pg_page">5</a>
						<a href="" class="pg_next"></a>
						<a href="" class="pg_end"></a>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="active"</code> 활성화 클래스
					</div>
					
					<div class="highlight">
					</div>
				</div>
				<div class="demo-control fa"></div>
			</div>

			<h3>기본 박스형</h3>
			<p>
				기본 GALLERY 게시판 유형
			</p>
			<div class="demo-block">
				<div class="source">
					<article id="bo_list">

						<header class="ui-row search-header">
							<div class="ui-col-12 total-view">
								총<strong>10</strong>건이 검색되었습니다.
							</div>
						</header>

						<div class="ui-table">
							<table>
								<caption>테이블에 대한 설명</caption>
								<colgroup>
									<col style="width:50px">
									<col style="width:*">
									<col style="width:75px">
									<col style="width:75px">
									<col style="width:75px">
									<col style="width:75px">
								</colgroup>
								<thead>
									<tr>
										<th><input type="checkbox"></th>
										<th>제목</th>
										<th>글쓴이</th>
										<th>날짜</th>
										<th>조회수</th>
										<th>첨부파일</th>
									</tr>
								</thead>
								<tbody>
									<tr class="center">
										<td><input type="checkbox"></td>
										<td class="ta-l">
											<a href="#" class="ellipsis">제목입니다제목입니다제목입니다제목입니다제목입니다제목입니다제목입니다.</a>
										</td>
										<td>
											오승준
										</td>
										<td>2019.03.25</td>
										<td>100</td>
										<td><i class="fa fa-file-powerpoint-o"></i></td>
									</tr>
									<tr class="center">
										<td><input type="checkbox"></td>
										<td class="ta-l">
											<a href="#">제목입니다.</a>
										</td>
										<td>
											오승준
										</td>
										<td>2019.03.25</td>
										<td>100</td>
										<td><i class="fa fa-file-powerpoint-o"></i></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="ui-row margin-top-30">
							<div class="ui-col-8">
								<div class="ui-row search-foot">
									<div class="ui-col-12 ta-r">
										<div class="ui-serach-box">
											<span class="ui-select fa">
												<select name="" id="">
										            <option value="">제목</option>
										            <option value="">내용</option>
										            <option value="">제목+내용</option>
										            <option value="">회원아이디</option>
										            <option value="">글쓴이</option>
										        </select>
									        </span>
									        <input type="text" class="ui-input" placeholder="검색어를 입력해주세요.">
									        <button type="" class="ui-btn">검색</button>
								        </div>
									</div>
								</div>
							</div>
							<div class="ui-btn_wrap ui-col-4 margin-top-0">
								<div class="ui-btn_right">
									<div class="ui-btn_group">
										<button type="submit" class="ui-btn">확인</button>
										<button type="button" class="ui-btn">취소</button>
										<button type="button" class="ui-btn">수정</button>
									</div>
								</div>
							</div>
						</div>
						

					</article>
					<!-- #bo_list -->
					<div class="ui-paging margin-top-40">
						<a href="" class="pg_start"></a>
						<a href="" class="pg_prev"></a>
						<a href="#" class="pg_page">1</a>
						<a href="#" class="pg_page">2</a>
						<a href="#" class="pg_page">3</a>
						<a href="#" class="pg_page">4</a>
						<a href="#" class="pg_page">5</a>
						<a href="" class="pg_next"></a>
						<a href="" class="pg_end"></a>
					</div>
				</div>
				<div class="meta">
					<div class="description">
						<code>class="active"</code> 활성화 클래스
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
	include("../foot.php");
?>