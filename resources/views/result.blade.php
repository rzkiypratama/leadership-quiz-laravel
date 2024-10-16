<!DOCTYPE html>
<html lang="en">
	<x-head title="Leadership Quiz Result" />

	<body class="body-quiz">
		<!-- Result Slide -->
		<nav class="navbar px-md-5 bg-transparent px-3">
			<div class="">
				<a class="navbar-brand" href="/"><img src="image/bg-new/LogoUPH.png" alt="uph logo" /></a>
			</div>
			<a class="nav-link" id="nav-link" href="/form">Tes Ulang</a>
		</nav>
		<div id="result-slide" class="h-100">
			<div class="result-box d-flex justify-content-center align-items-center container">
				<div class="left-side">
					<div class="d-flex flex-column pb-2">
						<img id="resTitleBadge" src="" alt="Result Badge Image" class="result-with-bg" />
						<img id="resRateImg" src="" alt="Result Rate Image" />
					</div>
					<p id="resCompJobs" class="resCompJobs"></p>
					<p id="resDescText"></p>
				</div>

				<img id="resVisualImg" src="" alt="Result Visual Image" />
			</div>
		</div>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const result = JSON.parse(localStorage.getItem("result"));

				if (result) {
					document.getElementById("resTitleBadge").src = result.titleResultImg;
					document.getElementById("resRateImg").src = result.rateResultImg;
					document.getElementById("resVisualImg").src = result.visualResultImg;
					document.getElementById("resCompJobs").textContent = result.compatibleJobs;
					document.getElementById("resDescText").textContent = result.descResultText;
				} else {
					document.getElementById("resultContainer").innerHTML = "<p>No result found.</p>";
				}
			});
		</script>
	</body>

</html>
