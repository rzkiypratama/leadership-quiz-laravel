<!DOCTYPE html>
<html lang="en">
	<x-head-csrf title="Leadership Quiz" />

	<body class="body-quiz">
		<main id="main" class="main-quiz">
			@if (session('success'))
				<div>{{ session('success') }}</div>
			@endif

			<nav class="navbar px-md-5 bg-transparent px-3">
				<div class="">
					<a class="navbar-brand" href="/"><img src="/image/bg-new/LogoUPH.png" alt="uph logo" /></a>
				</div>
				<a class="nav-link" id="nav-link" href="/about">tentang</a>
			</nav>
			<form action="{{ route('submit.quiz') }}" method="POST">
				@csrf
				<div class="d-none mb-3">
					<input type="text" name="username" class="form-control" id="username" placeholder="Nama Lengkap" required />
				</div>
				<div class="d-none mb-3">
					<input
						type="number"
						min="9999999"
						oninvalid="this.setCustomValidity('Please input a valid phone number')"
						oninput="setCustomValidity('')"
						name="phone_number"
						class="form-control"
						id="phone_number"
						placeholder="No. Handphone"
						required />
				</div>
				<div class="d-none mb-3">
					<input
						type="email"
						pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
						oninvalid="this.setCustomValidity('Please input a valid email address')"
						oninput="setCustomValidity('')"
						name="email_address"
						class="form-control"
						id="email_address"
						placeholder="alamatemail@example.com"
						required />
				</div>
				<div class="d-none mb-3">
					<input name="grade" id="grade" class="opt" placeholder="grades" />
				</div>
				<div class="d-none mb-3">
					<input name="interest_major" id="interest_major" class="opt" placeholder="interest major" />
				</div>
				<div class="d-none mb-3">
					<input type="text" name="school" class="form-control" id="school_name" placeholder="Your School Name" />
				</div>
				<div class="d-none mb-3">
					<input type="text" name="result" class="form-control" id="result" placeholder="Result" />
				</div>
				<div class="quiz-wrapper container">
					<div>
						<img src="/image/wording.png" alt="notes" style="width: 100%" />
					</div>
					<!-- Quiz 1 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="d-flex">
								<div class="control justify-content-center pt-10">
									<span class="icon-wrapper prev prev-one">
										<div class="arrow-up prev-one-up"></div>
									</span>
									<span class="counter">1/28</span>
									<span class="icon-wrapper next" onclick="plusSlides(1)">
										<div class="arrow-down"></div>
									</span>
								</div>
								<div class="divider"></div>
								<div class="content">
									<div>
										<p>Pernyataan 01</p>
										<h2>Aku siap bantu kamu (anggota tim) kapanpun!</h2>
									</div>
									<div class="cta">
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 1)">1</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 2)">2</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 3)">3</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 4)">4</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 5)">5</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 6)">6</div>
										<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 7)">7</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 2 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">2/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 02</p>
									<h2>Penting loh untuk kita melayani masyarakat.</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 3 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">3/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 03</p>
									<h2>Aku bisa merasakan kalau ada yang gak beres sama kerjaan</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 4 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">4/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 04</p>
									<h2>Aku kasih kesempatan kepada tim untuk membuat keputusan penting dalam pekerjaan mereka</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 5 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">5/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 05</p>
									<h2>Pengembangan diri untuk tim itu penting</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 6 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">6/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 06</p>
									<h2>Kesuksesan orang lain lebih penting dari kesuksesanku sendiri</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 7 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">7/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 07</p>
									<h2>Standarku dalam pekerjaan cukup tinggi</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 8 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">8/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 08</p>
									<h2>Aku selalu peduli terhadap orang lain</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 9 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">9/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 09</p>
									<h2>Aku selalu ingin membantu orang lain</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 10 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">10/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 10</p>
									<h2>Akan kuhadapi segala masalah dan tantangan yang ada</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 11 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">11/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content" style="width: 100%">
								<div>
									<p>Pernyataan 11</p>
									<h2>Aku mendorong tim supaya bisa mandiri dalam pekerjaan</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 12 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">12/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 12</p>
									<h2>Aku senang ketika orang lain mencapai tujuannya</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 13 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">13/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 13</p>
									<h2>Kebutuhan orang lain lebih penting dari kebutuhanku sendiri</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 14 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">14/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 14</p>
									<h2>Buatku kejujuran itu yang utama</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 15 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">15/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 15</p>
									<h2>Aku si paling ada buat dengerin curhatan tim</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 16 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">16/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 16</p>
									<h2>Aku aktif dalam organisasi/komunitas</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 17 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">17/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 17</p>
									<h2>Aku punya pemahaman tentang tim/organisasi yang aku pimpin dan tujuannya</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 18 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">18/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 18</p>
									<h2>Aku membebaskan tim dalam menyelesaikan masalah sulit dengan cara yang menurut mereka paling baik</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 19 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">19/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 19</p>
									<h2>Aku selalu kasih kesempatan orang lain/tim untuk berkembang</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 20 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">20/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 20</p>
									<h2>Aku si people pleaser</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 21 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">21/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 21</p>
									<h2>Tidak ada kompromi dalam prinsip etika untuk mencapai kesuksesan</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 22 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">22/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 22</p>
									<h2>Aku si paling feeling, bisa rasain kalau ada yang beda</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="emotionalHealing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 23 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">23/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 23</p>
									<h2>Sering terpikir olehku “Yuk, kita kumpulin donasi untuk panti asuhan!”</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="creatingValueCommunity" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 24 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">24/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 24</p>
									<h2>Aku suka mencari ide baru untuk memecahkan sebuah masalah</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="conceptualizing" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 25 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">25/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 25</p>
									<h2>Aku biasanya sih ngikut aja keputusannya apa</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="empowering" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 26 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">26/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 26</p>
									<h2>Aku suka penasaran sm goal karir timku</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="helpingFollowersGrow" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 27 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">27/28</span>
								<span class="icon-wrapper next" onclick="plusSlides(1)">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 27</p>
									<h2>Sebisa mungkin aku akan membantu untuk meringankan pekerjaan orang lain/tim</h2>
								</div>
								<div class="cta">
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="puttingFollowersFirst" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Quiz 28 -->
					<div class="quiz_box mySlides fade">
						<div class="quiz_background">
							<div class="control">
								<span class="icon-wrapper prev" onclick="plusSlides(-1)">
									<div class="arrow-up"></div>
								</span>
								<span class="counter">28/28</span>
								<span class="icon-wrapper next" onclick="">
									<div class="arrow-down"></div>
								</span>
							</div>
							<div class="divider"></div>
							<div class="content">
								<div>
									<p>Pernyataan 28</p>
									<h2>Kejujuran lebih utama daripada keuntungan</h2>
								</div>
								<div class="cta" id="letResultBtnShow">
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 1)">1</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 2)">2</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 3)">3</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 4)">4</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 5)">5</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 6)">6</div>
									<div class="btn btn-outline-primary btn-yes" data-behavior="behavingEthically" onclick="recordAnswer(this, 7)">7</div>
								</div>
							</div>
						</div>
						<div class="submit-btn" id="submit-btn">
							<button type="submit" class="quiz-button" id="showResultButton">Lihat Hasil</button>
						</div>
					</div>

					<div id="note-image">
						<img src="/image/bg-new/note.png" alt="notes" style="width: 100%;" />
					</div>
				</div>
			</form>
		</main>

		<x-footer />

	</body>

</html>
