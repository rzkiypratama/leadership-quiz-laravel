const slides = document.querySelectorAll(".mySlides");
const totalSlides = slides.length;
const buttons = document.querySelectorAll(".quiz-button");
let interestCode = [];

window.localStorage.clear();

$("#quiz-form").submit(function (event) {
    event.preventDefault();

    // Ambil data dari form
    const formData = $(this).serializeArray();

    // Buat URL parameter dari data form
    const params = formData
        .map(
            (item) =>
                `${encodeURIComponent(item.name)}=${encodeURIComponent(
                    item.value
                )}`
        )
        .join("&");

    // Arahkan ke halaman quiz dengan URL parameter
    window.location.href = `quiz?${params}`;
});

$(document).ready(function () {
    // Listen to the "change" event on the select element with ID "grade"
    $("#grades").on("change", function () {
        let selectedValue = $(this).val();

        // If the selected value is "10", "11", or "12", show the additional input text
        if (
            selectedValue === "10" ||
            selectedValue === "11" ||
            selectedValue === "12" ||
            selectedValue === "freshgraduate"
        ) {
            $("#school-name").show();

            // Otherwise, hide the additional input text
        } else {
            $("#school-name").hide();
        }
    });
});

document
    .getElementById("showResultButton")
    .addEventListener("click", showResult);

let currentSlide = 0;

// Initialize the quiz
function initQuiz() {
    slides.forEach((slide) => (slide.style.display = "none"));
    slides[currentSlide].style.display = "flex";

    // Inisialisasi nilai 0 untuk semua perilaku di localStorage
    const behaviors = [
        "behavingEthically",
        "conceptualizing",
        "creatingValueCommunity",
        "emotionalHealing",
        "empowering",
        "helpingFollowersGrow",
        "puttingFollowersFirst",
    ];

    behaviors.forEach((behavior) => {
        if (!localStorage.getItem(behavior)) {
            localStorage.setItem(behavior, 0);
        }
    });

    localStorage.setItem("behavingEthically", 0);
    localStorage.setItem("conceptualizing", 0);
    localStorage.setItem("creatingValueCommunity", 0);
    localStorage.setItem("emotionalHealing", 0);
    localStorage.setItem("empowering", 0);
    localStorage.setItem("helpingFollowersGrow", 0);
    localStorage.setItem("puttingFollowersFirst", 0);
}
// Initialize the quiz on page load
window.onload = initQuiz;

function recordAnswer(button, answer) {
    const behavior = button.getAttribute("data-behavior");
    const score = parseInt(answer, 10);

    const storedScore = localStorage.getItem(behavior);
    if (storedScore) {
        localStorage.setItem(behavior, parseInt(storedScore, 10) + score);
    } else {
        localStorage.setItem(behavior, score);
    }

    plusSlides(1);
}

function plusSlides(n) {
    let slides = document.querySelectorAll(".mySlides");
    let totalSlides = slides.length;

    slides[currentSlide].style.display = "none"; // Hide the current slide

    currentSlide += n;

    // Ensure currentSlide is within bounds
    if (currentSlide >= totalSlides) currentSlide = totalSlides - 1;
    if (currentSlide < 0) currentSlide = 0;

    slides[currentSlide].style.display = "flex"; // Show the new slide
}

function enableShowResultButton() {
    const showResultButton = document.getElementById("showResultButton");
    const resultBtnShowDiv = document.getElementById("letResultBtnShow");

    showResultButton.style.display = "none";

    resultBtnShowDiv.addEventListener("click", function (event) {
        if (event.target.tagName === "DIV") {
            const behaviorsCount = {
                behavingEthically:
                    parseInt(localStorage.getItem("behavingEthically")) || 0,
                conceptualizing:
                    parseInt(localStorage.getItem("conceptualizing")) || 0,
                creatingValueCommunity:
                    parseInt(localStorage.getItem("creatingValueCommunity")) ||
                    0,
                emotionalHealing:
                    parseInt(localStorage.getItem("emotionalHealing")) || 0,
                empowering: parseInt(localStorage.getItem("empowering")) || 0,
                helpingFollowersGrow:
                    parseInt(localStorage.getItem("helpingFollowersGrow")) || 0,
                puttingFollowersFirst:
                    parseInt(localStorage.getItem("puttingFollowersFirst")) ||
                    0,
            };

            const hasZeroValue = Object.values(behaviorsCount).some(
                (value) => value === 0
            );

            if (!hasZeroValue) {
                showResultButton.style.display = "flex";
                const isLastStatement = currentSlide === totalSlides - 1;
                if (isLastStatement) {
                    disableQuizOptions(event.target); // Pass the selected target
                }
            } else {
                showResultButton.style.display = "none";
                alert("Harus pilih seluruh pernyataan");
                localStorage.setItem("behavingEthically", 0);
                localStorage.setItem("conceptualizing", 0);
                localStorage.setItem("creatingValueCommunity", 0);
                localStorage.setItem("emotionalHealing", 0);
                localStorage.setItem("empowering", 0);
                localStorage.setItem("helpingFollowersGrow", 0);
                localStorage.setItem("puttingFollowersFirst", 0);
                location.reload();
            }
        }
    });
}

function disableQuizOptions(selectedOption) {
    const optionButtons = document.querySelectorAll(".btn-yes");

    optionButtons.forEach((button) => {
        if (button === selectedOption) {
            // Apply bold text and thick border to the selected button
            button.style.fontWeight = "bold";
            button.style.borderWidth = "2px";
            button.style.borderColor = "#000";
            button.style.opacity = "1"; // Make sure the selected option is fully visible
        } else {
            // Lower opacity of non-selected buttons but keep them clickable
            button.style.opacity = "0.5";
            button.style.fontWeight = "normal";
            button.style.borderWidth = "1px";
            button.style.borderColor = "#ccc";

            // Allow user to click the non-selected options to switch their choice
            button.addEventListener("click", function () {
                optionButtons.forEach((btn) => {
                    // Reset all buttons to default state
                    btn.style.opacity = "0.5";
                    btn.style.fontWeight = "normal";
                    btn.style.borderWidth = "1px";
                    btn.style.borderColor = "#ccc";
                });

                // Apply bold to the newly selected option
                button.style.fontWeight = "bold";
                button.style.borderWidth = "2px";
                button.style.borderColor = "#000";
                button.style.opacity = "1"; // Fully visible

                // Update the selected option in localStorage or relevant state
                const behavior = button.getAttribute("data-behavior");
                localStorage.setItem(behavior, button.textContent); // Save the new value
            });
        }
    });
}

enableShowResultButton();

// Mapping question numbers to behaviors (adjust accordingly)
const questionBehaviorMap = {
    1: "emotionalHealing",
    8: "emotionalHealing",
    15: "emotionalHealing",
    22: "emotionalHealing",
    2: "creatingValueCommunity",
    9: "creatingValueCommunity",
    16: "creatingValueCommunity",
    23: "creatingValueCommunity",
    3: "conceptualizing",
    10: "conceptualizing",
    17: "conceptualizing",
    24: "conceptualizing",
    4: "empowering",
    11: "empowering",
    18: "empowering",
    25: "empowering",
    5: "helpingFollowersGrow",
    12: "helpingFollowersGrow",
    19: "helpingFollowersGrow",
    26: "helpingFollowersGrow",
    6: "puttingFollowersFirst",
    13: "puttingFollowersFirst",
    20: "puttingFollowersFirst",
    27: "puttingFollowersFirst",
    7: "behavingEthically",
    14: "behavingEthically",
    21: "behavingEthically",
    28: "behavingEthically",
};

document.addEventListener("DOMContentLoaded", function () {
    initQuiz();
    enableShowResultButton();
    populateFormFromURL();
});

// Fungsi untuk mengisi form dari parameter URL
function populateFormFromURL() {
    const urlParams = new URLSearchParams(window.location.search);

    const username = urlParams.get("username");
    const email = urlParams.get("email_address");
    const phone = urlParams.get("phone_number");
    const school = urlParams.get("school");
    const grade = urlParams.get("grade");
    const interest = urlParams.get("interest_major");
    const result = localStorage.getItem("result");

    if (email) {
        document.querySelector("input[name='email_address']").value = email;
        localStorage.setItem("email_address", email);
    }
    if (username) {
        document.querySelector("input[name='username']").value = username;
        localStorage.setItem("username", username);
    }
    if (phone) {
        document.querySelector("input[name='phone_number']").value = phone;
        localStorage.setItem("phone_number", phone);
    }
    if (school) {
        document.querySelector("input[name='school']").value = school;
        localStorage.setItem("school", school);
    }
    if (grade) {
        document.querySelector("input[name='grade']").value = grade;
        localStorage.setItem("grade", grade);
    }
    if (interest) {
        document.querySelector("input[name='interest_major']").value = interest;
        localStorage.setItem("interest_major", interest);
    }
    if (result) document.querySelector("input[name='result']").value = result;
    localStorage.setItem("result", result);
}

function showResult() {
    const behaviorsCount = {
        behavingEthically: parseInt(localStorage.getItem("behavingEthically")),
        conceptualizing: parseInt(localStorage.getItem("conceptualizing")),
        creatingValueCommunity: parseInt(
            localStorage.getItem("creatingValueCommunity")
        ),
        emotionalHealing: parseInt(localStorage.getItem("emotionalHealing")),
        empowering: parseInt(localStorage.getItem("empowering")),
        helpingFollowersGrow: parseInt(
            localStorage.getItem("helpingFollowersGrow")
        ),
        puttingFollowersFirst: parseInt(
            localStorage.getItem("puttingFollowersFirst")
        ),
    };

    const resObj = [
        {
            val: behaviorsCount.behavingEthically,
            name: "Behaving Ethically",
            titleResultImg: "image/BehavingEthically.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Behaving-Ethically.png",
            titleResultText: "behavingEthically",
            compatibleJobs:
                "Insinyur Mesin, Insinyur Pembangunan, Insinyur Kelistrikan, Kedokteran Gigi, Arsitektur, Kedokteran, Progamer Perangkat Lunak, Teknisi Komputer, Desainer Produk, Juru Masak",
            descResultText:
                "Kamu adalah pemimpin yang punya prinsip moral dan integritas yang kuat. Kamu selalu ngajarin timmu untuk ngelakuin hal yang bener dengan cara yang bener juga, untuk jadi orang yang terbuka, jujur, dan adil. Sekuat itu prinsipmu, sehingga kamu ga bakal jadi orang yang mengambil jalan pintas (kecurangan) untuk mendapatkan kesuksesan. Saat kamu memimpin, kamu menyadari bahwa tugasmu bukan saja untuk mencapai tujuan organisasi tetapi juga untuk menanamkan dan membangun nilai-nilai positif di dalam tim. Kamu juga adalah pemimpin yang siap bertanggung jawab jika melakukan kesalahan dan tidak mencari “kambing hitam” atau menyalahkan orang lain. Bagimu, memegang teguh prinsip moral dan berintegritas adalah kunci menuju kesuksesan.",
        },
        {
            val: behaviorsCount.conceptualizing,
            name: "The Conceptualizing",
            titleResultImg: "image/Conceptualizing1.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/conceptualizing.png",
            titleResultText: "conceptualizing",
            compatibleJobs:
                "Kedokteran, Bioteknologi, Teknologi Pangan, Ahli Gizi, Programmer Perangkat Lunak, Teknisi Komputer, Farmasi, Kedokteran Gigi, Matematikawan, Psikologi",
            descResultText:
                "Yeay! Kamu adalah pemimpin yang bener-bener menguasai visi misi dan tujuan organisasimu. Kamu peka dengan situasi dan jago mengatasi tantangan dalam organisasimu. Gak heran kamu tahu apa yang terbaik buat tim mu. Kamu terkenal karena kebijaksanaanmu, dan terampil memberikan solusi terbaik ketika tim menghadapi masalah. Kamu juga langsung tahu kalau ada sesuatu yang ga beres dalam tim, dan segera mencari solusi kreatif. Skill, kompetensi, dan nilai-nilai yang kamu terapkan didalam memimpin, membuatmu menjadi seorang pemimpin yang dapat diandalkan!",
        },
        {
            val: behaviorsCount.creatingValueCommunity,
            name: "The Creating Value Community",
            titleResultImg: "image/Creating.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Creating-Value-for-The-Community.png",
            titleResultText: "creatingValueCommunity",
            compatibleJobs:
                "Musisi, pengrajin, Desainer (Desain Grafis, Desain Interior, Desain Produk), Arsitek, Penulis, Sastrawan (Literature/Poetry), Fotografer, Jurnalis, Juru Masak, Bisnis (Creative Business)",
            descResultText:
                "Kamu tuh pemimpin yang fokus banget membangun hal-hal positif berguna buat komunitas di dalam dan sekitar circlemu. Kamu nggak cuma lihat keberhasilan dan urusan internal organisasi aja, tapi juga mikirin kepentingan dari komunitas tempat kamu dan timmu ngejalanin aktivitas. Hal ini membuat timmu belajar pentingnya punya tanggung jawab sosial dan ngasih dampak positif buat masyarakat. Jadi nggak cuma mikirin kesuksesan dari segi finansial atau urusan internal organisasi aja. Kamu beneran pemimpin berhati besar yang bertekad untuk membawa hal-hal positif yang bermanfaat untuk membangun dan menjaga kesejahteraan masyarakat, khususnya di tempat dimana organisasi mu berkarya.",
        },
        {
            val: behaviorsCount.emotionalHealing,
            name: "The Emotional Healing",
            titleResultImg: "image/Healing.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Emotional-Healing.png",
            titleResultText: "emotionalHealing",
            compatibleJobs:
                "Pekerjaan yang berkaitan dengan Kesehatan, Konseling, Guru, Pekerja Sosial, Pelayanan Masyarakat",
            descResultText:
                "Kamu adalah pemimpin yang punya kepekaan emosi dan empati terhadap orang di sekitarmu. Gak cuma itu, kamu juga selalu ada buat mereka untuk memberikan dukungan, kamu rela duduk lama hanya buat menemani dan mendengarkan keluhan mereka, bahkan kamu mau meluangkan waktu untuk membantu saat mereka menghadapi masalah. Perhatian dan pelayanan yang kamu berikan kepada tim, menciptakan lingkungan kerja yang mendukung, membangun kepercayaan, dan semangat positif pada anggota tim!",
        },
        {
            val: behaviorsCount.empowering,
            name: "The Empowering",
            titleResultImg: "image/Empowering1.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Empowering.png",
            titleResultText: "empowering",
            compatibleJobs:
                "Peneliti, Dosen, Guru, Analis Keuangan, Analis Data, Ekonom, Insinyur, Konsultan, Penulis, Pengacara",
            descResultText:
                "Kamu paling demen kasih kesempatan berkembang kepada anggota timmu, mulai dari menentukan keputusan, kebebassan buat nanganin situasi sulit dengan cara mereka, sampai akhirnya mereka menjadi mandiri. Hal ini meningkatkan kepercayaan diri timmu dan membuat mereka jadi lebih yakin sama kemampuan mereka. Kamu percaya bahwa ketika kamu memberikan kepercayaan dan memberdayakan timmu, itu akan meningkatkan motivasi, kreativitas, dan kinerja mereka. Sebagai pemimpin yang “empowering”, kamu menciptakan lingkungan di mana timmu merasa dihargai, didengar, dan bertumbuh dengan signifikan dalam mencapai tujuan bersama. Kamu memastikan timmu bertumbuh dan meraih sukses bersama. Keren kan? ",
        },
        {
            val: behaviorsCount.helpingFollowersGrow,
            name: "The Helping Followers Grow",
            titleResultImg: "image/Succeed.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Helping-Followers-Grow.png",
            titleResultText: "helpingFollowersGrow",
            compatibleJobs:
                "Guru, Pelatih, Konselor, Mentor, Penasehat, Konsultan, Pengembang Sumber Daya Manusia, Pekerja Sosial, Pembina",
            descResultText:
                "Kamu sangat peduli dengan pertumbuhan dan perkembangan orang lain. Kamu suka berbagi pengetahuan dan pengalaman, serta memberikan dukungan agar orang lain dapat mencapai potensinya. Pekerjaan yang memberikan kesempatan untuk membimbing dan membantu orang lain akan sangat memuaskan buatmu.",
        },
        {
            val: behaviorsCount.puttingFollowersFirst,
            name: "The Putting Followers First",
            titleResultImg: "image/First.png",
            rateResultImg: "image/4.png",
            visualResultImg: "image/Putting-Followers-First.png",
            titleResultText: "puttingFollowersFirst",
            compatibleJobs:
                "Hukum, Bisnis, Administrasi, Akuntansi, Manajemen, Tenaga Penjual, Konsultan",
            descResultText:
                "Kamu bener-bener pemimpin yang berhati besar, buktinya kamu selalu menjadikan kepentingan timmu menjadi yang terutama. Kamu rela loh membuat mereka menjadi prioritas dibandingkan kepentinganmu sendiri. Sekalipun saat kamu meraih penghargaan dalam suatu proyek yang kamu pimpin, kamu nggak sungkan untuk menulis nama anggota timmu terlebih dahulu untuk dipublikasi. Itu semua karena kamu tahu ketika kamu memberikan mereka kesempatan, maka hal tersebut akan menjadi suatu yang berharga dalam perjalanan karir mereka di masa depan nanti. Kamu selalu ingin meraih kesuksesan bersama-sama dengan timmu. Keren! ",
        },
    ];

    const highestScoreBehavior = getMaxBehavior(behaviorsCount);

    // Set the result value in the input field before submitting
    document.querySelector("input[name='result']").value = highestScoreBehavior;

    // Display the results in the HTML
    let result = resObj.find(
        (obj) => obj.titleResultText === getMaxBehavior(behaviorsCount)
    );

    // Save the result in localStorage for retrieval in result
    localStorage.setItem("result", JSON.stringify(result));

    $("#quiz-form-final").submit(function (event) {
        event.preventDefault();

        // Mengubah tombol submit menjadi loading state
        const submitButton = $("#showResultButton");
        submitButton.prop("disabled", true); // Menonaktifkan tombol submit
        submitButton.text("Loading..."); // Mengubah teks menjadi 'Loading...'

        const formData = $(this).serializeArray();

        $.ajax({
            url: "{{ route('submit.quiz') }}",
            type: "post",
            data: $.param(formData),
            dataType: "json",
            success: function (result) {
                if (result.status) {
                    window.location.href = "result";
                }
            },
            error: function (xhr, Status, err) {
                console.log("There is an error: " + Status);
                // window.location.href = "result";
            },
            // complete: function () {
            //     // Kembali ke keadaan semula setelah selesai
            //     submitButton.prop("disabled", false);
            //     submitButton.text("Lihat Hasil");
            // },
        });
    });
}

function insertHTML(result) {
    const resRateImg = document.getElementById("resRateImg");
    const resVisualImg = document.getElementById("resVisualImg");
    const resCompJobs = document.getElementById("resCompJobs");
    const resTitleText = document.getElementById("resTitleText");
    const resTitleBadge = document.getElementById("resTitleBadge");
    const resDescText = document.getElementById("resDescText");

    resCompJobs.textContent = result.compatibleJobs;
    resDescText.textContent = result.descResultText;
    resRateImg.src = result.rateResultImg;
    resVisualImg.src = result.visualResultImg;
    resTitleText.textContent = result.name;
    resTitleBadge.src = result.titleResultImg;

    console.log(result.name);
}

// Fungsi untuk mendapatkan perilaku dengan skor tertinggi
function getMaxBehavior(behaviorsCount) {
    let max = 0;
    let maxBehavior = "";
    for (const behavior in behaviorsCount) {
        if (behaviorsCount[behavior] > max) {
            max = behaviorsCount[behavior];
            maxBehavior = behavior;
        }
    }
    return maxBehavior;
}
