<!DOCTYPE html>
<html lang="en">

	<x-head title="Form" />

	<body class="body-quiz">
		<main id="main" class="main-form">
			<nav class="navbar px-md-5 bg-transparent px-3">
				<div class="">
					<a class="navbar-brand" href="/"><img src="/image/bg-new/LogoUPH.png" alt="uph logo" /></a>
				</div>
				<a class="nav-link" id="nav-link" href="about">tentang</a>
			</nav>
			<div class="quiz-wrapper form-wrapper container">
				<!-- Form -->
				<div class="form-background">
					<div class="form_box fade">
						<div class="mx-auto">
							<h2>Sebelum memulai tesnya,<br class="d-none d-md-block" />kami ingin lebih mengenalmu.</h2>
							<form id="quiz-form" method="POST">
								<div class="mb-3">
									<input type="text" name="username" class="form-control" id="username" placeholder="Nama Lengkap" required />
								</div>
								<div class="mb-3">
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
								<div class="mb-3">
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

								<div class="mb-3">
									<select id="interest_major" name="interest_major" class="form-control">
										<option class="invalid" value="" disabled selected hidden>Jurusan yang diminati</option>
										<option class="opt" value="Accounting">Accounting</option>
										<option class="opt" value="Accounting (International Class)">Accounting (International Class)</option>
										<option class="opt" value="Applied Mathematics">Applied Mathematics</option>
										<option class="opt" value="Architecture">Architecture</option>
										<option class="opt" value="Biotechnology">Biotechnology</option>
										<option class="opt" value="Civil Engineering">Civil Engineering</option>
										<option class="opt" value="Communications">Communications</option>
										<option class="opt" value="Dentistry">Dentistry</option>
										<option class="opt" value="DIV Laboratorium Teknologi Medis">DIV Laboratorium Teknologi Medis</option>
										<option class="opt" value="Electrical Engineering">Electrical Engineering</option>
										<option class="opt" value="Food Technology">Food Technology</option>
										<option class="opt" value="Hospitality Management">Hospitality Management</option>
										<option class="opt" value="Industrial Engineering">Industrial Engineering</option>
										<option class="opt" value="Informatics">Informatics</option>
										<option class="opt" value="Information Systems">Information Systems</option>
										<option class="opt" value="Interior Design">Interior Design</option>
										<option class="opt" value="International Relations">International Relations</option>
										<option class="opt" value="International Teachers College">International Teachers College</option>
										<option class="opt" value="Law">Law</option>
										<option class="opt" value="Law (International Class)">Law (International Class)</option>
										<option class="opt" value="Management">Management</option>
										<option class="opt" value="Management (International Class)">Management (International Class)</option>
										<option class="opt" value="Medicine">Medicine</option>
										<option class="opt" value="Music">Music</option>
										<option class="opt" value="Nursing (International Class)">Nursing (International Class)</option>
										<option class="opt" value="Pharmacy">Pharmacy</option>
										<option class="opt" value="Pharmacy (D3)">Pharmacy (D3)</option>
										<option class="opt" value="Product Design">Product Design</option>
										<option class="opt" value="Psychology">Psychology</option>
										<option class="opt" value="Tourism">Tourism</option>
										<option class="opt" value="Visual Communication Design">Visual Communication Design</option>
									</select>
								</div>

								<div class="input-dropdown-box mb-3">
									<select name="grade" id="grades" class="custom-dropdown" required>
										<option class="invalid" value="" disabled selected hidden>Pilih Grade Sekolah</option>
										<option value="10" class="opt">Grade 10</option>
										<option value="11" class="opt">Grade 11</option>
										<option value="12" class="opt">Grade 12</option>
										<option value="other" class="opt">Lainnya</option>
									</select>
								</div>
								<div class="mb-3" style="display: none" id="school-name">
									<input type="text" name="school" class="form-control" id="school_name" placeholder="Your School Name" />
								</div>
								<button class="btn btn-primary rounded-0 uppercase" type="submit" tabindex="0">Mulai test</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</main>

		<x-footer />

	</body>

</html>
