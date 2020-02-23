<!DOCTYPE html>
<html>
<head>
	<title>IQinvestindo - Help</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">
	<nav>test</nav>
	<h1 align="center"><b>PANDUAN OPERASIONALISASI APLIKASI ANALISIS INVESTASI</b></h1>
	<h2 align="center">"IQ-investindo: Learning to invest"</h3>
	<h3 align="center">by Ibnu Qizam</h3>

	<p class="text-paragraf">Pada saat aplikasi Analisis Investasi: "IQ-investindo: Learning to invest" ini dibuka, maka akan muncul layar beranda yang terdiri dari 'Menu', 'About', 'Help', dan 'References'; "Menu" berisi 11 topik dalam manajemen investasi dan pasar modal, yaitu margin, actual margin, composite index, book value, intrinsic value, risk & return: 1 asset, portfolio: 2 assets, portfolio many assets, portfolio selection, single index model, beta & CAPM. 'About' memuat kata pengantar dan deskripsi aplikasi dari penyusun program; 'Help' memuat panduan teknis operasionalisasi aplikasi ini; dan 'References' berisi daftar pustaka yang dijadikan rujukan dari penyusunan program (soal-jawab manajemen investasi) dari aplikasi ini. Layout masing-masing dapat dilihat di bawah ini:</p>

	<table class="center-table">
		<tr>
			<td>Beranda</td>
			<td>Menu</td>
		</tr>
		<tr>
			<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ss_main.png"></td>
			<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ss_menu.png"></td>
		</tr>
		<tr>
			<td>About</td>
			<td>References</td>
		</tr>
		<tr>
			<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ss_about.png"></td>
			<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ss_refrences.png"></td>
		</tr>
	</table>

	<p>Cara penggunaan dicontohkan dengan soal-soal sebagai berikut:</p>

	<ol type="number"> <!-- start list -->
		<li class="text-bold">Margin</li> <!-- nomor 1 -->
		<p class="text">Seorang investor membeli sekuritas dengan marjin awal 40%. Harga saham per lembar diketahui Rp.3.500,- dan investor tersebut membeli 750 lembar saham. Hitung besarnya:</p>
		<ol type="a">
			<li>Jumlah Marjin yang harus dibayar oleh investor.</li>
			<li>Besarnya hutang investor kepada broker.</li>
		</ol>
		<p class="text-bold">JAWAB:</p>
		<table>
			<tr>
				<td class="vertical text-bold"><div>Manual</div></td>
				<td>
					<ol type="a">
						<li>
							Jumlah marjin yang harus dibayar
							<ul type="none">
								<li>= 40 % x Rp.3.500,- x 750 lembar</li>
								<li>= Rp. 1.050.000,-</li>
							</ul>
						</li>
						<li>
							 Besarnya hutang investor kepada broker
							 <ul type="none">
								<li>= 60 % x Rp.3.500,- x 750 lembar</li>
								<li>= Rp. 1.575.000,-</li>
							</ul>
						</li>
						
					</ol>
				</td>
			</tr>
			<tr>
				<td class="vertical text-bold"><div>Aplikasi</div></td>
				<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ss_margin.jpg"></td>
			</tr>
		</table>

		<span class="space"></span>

		<li class="text-bold">Actual Margin</li> <!-- nomor 2 -->
		<p>Diketahui margin mula-mula yang disyaratkan oleh perusahaan broker adalah 50% ketika seorang investor membeli sekuritas 2.500 lembar dengan harga Rp 8.000,-. Sesuai dengan perubahan kondisi ekonomi secara makro yang semakin buruk, harga saham turun dari Rp 8.000,- menjadi hanya Rp 5.500,-dan perusahaan broker kemudian menetapkan  maintenance margin hanya 40%. Hitunglah berapa  besarnya margin sesungguhnya? Dan tentukan pula berapa  tambahan kas yang dibayarkan jika terjadi margin call?</p>
		<p class="text-bold">JAWAB:</p>
		<table>
			<tr>
				<td class="vertical text-bold"><div>Manual</div></td>
				<td>
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/actual_margin_manual.png">
				</td>
			</tr>
			<tr>
				<td class="vertical text-bold"><div>Aplikasi</div></td>
				<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/actual_margin.jpg"></td>
			</tr>
		</table>

		<li class="text-bold">Composite Index</li> <!-- nomor 3 -->
		<p>Bursa Efek Jogjakarta atau disingkat "BEJK" saat ini telah berdiri dengan nilai dasar hanya Rp. 2 Milyar yang terdiri dari 2 jenis saham yang terdaftar. Namun, Karena perkembangan yang pesat "BEJK" saat ini telah memiliki 5 jenis saham, yaitu A, B, C, D, E dengan nilai pasar masing-masing sebagai berikut:</p>
		<p>NILAI SAHAM pada "BEJK"</p>
		<table class="mid-table" align="center">
			<tr style="background-color: #4e63d6; color: #fff">
				<td>Nama Saham</td>
				<td>Jumlah Lembar</td>
				<td>Harga/lbr (Rp.)</td>
			</tr>
			<tr>
				<td>A</td>
				<td>1.000.000</td>
				<td>1.100</td>
			</tr>
			<tr>
				<td>B</td>	
				<td>2.000.000</td>	
				<td>1.500</td>
			</tr>
			<tr>
				<td>C</td>	
				<td>3.500.000</td>	
				<td>1.400</td>
			</tr>
			<tr>
				<td>D</td>	
				<td>1.500.000</td>	
				<td>850</td>
			</tr>
			<tr>
				<td>E</td>	
				<td>500.000</td>	
				<td>1.250</td>
			</tr>
		</table>

		<p>Jika perusahaan F baru-baru ini melakukan penawaran perdana sebanyak 3.500.000 lembar saham dengan harga per lembar Rp.1.500, maka hitunglah:</p>
		<ol type="a">
			<li>Nilai IHSG sebelum F listed di "BEJK".</li>
			<li>Nilai Dasar Baru setelah perusahaan F listed di "BEJK".</li>
			<li>Nilai perusahaan yang baru setelah perusahaan F listed di "BEJK".</li>
			<li>IHSG yang baru ketika harga saham perusahaan F naik menjadi Rp.2.500/lembar.</li>
		</ol>
		<p class="text-bold">JAWAB:</p>
		<table>
			<tr>
				<td class="vertical text-bold"><div>Manual</div></td>
				<td>
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ihsg_manual.png">
				</td>
			</tr>
			<tr>
				<td class="vertical text-bold"><div>Aplikasi</div></td>
				<td>
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ihsg_1.png">
					<img class="img-fluid img-ss" alt="Responsive image"src="assets/img/ihsg_2.png">
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ihsg_3.png">
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ihsg_4.png">
					<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/ihsg_5.png">
				</td>
			</tr>
		</table>


		<li class="text-bold">Book Value</li> <!-- nomor 4 -->
		<p>Berikut adalah struktur modal PT. SATRIA BAJA pada bulan Maret 2016:</p>
		<table class="center-table">
			<tr>
				<td>Modal Saham Biasa</td>
				<td>900.000 x Rp 6.000</td>
				<td>Rp 5.400.000.000</td>
			</tr>
			<tr>
				<td>Agio Saham Biasa</td>
				<td>900.000 x Rp 2.000</td>
				<td>Rp 1.800.000.000</td>
			</tr>
			<tr>
				<td>Total Modal Sendiri</td>
				<td>900.000 x Rp 8.000</td>
				<td>Rp 7.200.000.000</td>
			</tr>
		</table>
		<p>Dalam rangka mengurangi jumlah saham yang beredar untuk mencegah terjadinya hostile takeover, pada bulan Mei 2016 perusahaan membeli balik saham yang beredar sebagai Saham treasury sebanyak 250.000 lembar dengan harga pasar Rp.14.000 per lembar, sebulan kemudian 100.000 lembar Saham treasury dijual kembali dengan harga Rp.18.000 per lembar.  Hitunglah besarnya nilai buku per lembar saham PT.SATRIA BAJA tersebut dengan kondisi:</p>
		<ol type="a">
			<li>Jika diasumsikan perusahaan tidak memiliki saham preferen dan laba ditahan.</li>
			<li>Jika diasumsikan perusahaan juga mengeluarkan Saham Preferen 8% sebanyak 50.000 lembar dengan nilai nominal Rp.12.000 yang dijual dengan harga Rp.17.500 per lembar dan memiliki laba ditahan sebesar Rp.350.000.000 di akhir tahun.</li>
			<li>Jika diasumsikan perusahaan juga mengeluarkan Saham Preferen 8% sebanyak 50.000 lembar dengan nilai nominal Rp.12.000 yang dijual dengan harga Rp.17.500 per lembar dan tidak memiliki laba ditahan di akhir tahun 2015  karena perusahaan mengalami kerugian di tahun 2014 dan 2015; dan baru memperoleh laba di akhir tahun 2016 sebesar Rp.850.000.000</li>
		</ol>

		<p class="text-bold">JAWAB:</p>
		<ol type="a">
			<li>Jika diasumsikan perusahaan tidak memiliki saham preferen dan laba ditahan.</li>
			<table>
				<tr>
					<td class="vertical text-bold"><div>Manual</div></td>
					<td>
						<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_1.png">
					</td>
				</tr>
				<tr>
					<td class="vertical text-bold"><div>Aplikasi</div></td>
					<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_2.png"></td>
				</tr>
			</table>
			<li>Jika diasumsikan perusahaan juga mengeluarkan Saham Preferen 8% sebanyak 50.000 lembar dengan nilai nominal Rp.12.000 yang dijual dengan harga Rp.17.500 per lembar dan memiliki laba ditahan sebesar Rp.350.000.000 di akhir tahun.</li>
			<table>
				<tr>
					<td class="vertical text-bold"><div>Manual</div></td>
					<td>
						<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_3.png">
					</td>
				</tr>
				<tr>
					<td class="vertical text-bold"><div>Aplikasi</div></td>
					<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_4.png"></td>
				</tr>
			</table>
			<li>Jika diasumsikan perusahaan juga mengeluarkan Saham Preferen 8% sebanyak 50.000 lembar dengan nilai nominal Rp.12.000 yang dijual dengan harga Rp.17.500 per lembar dan tidak memiliki laba ditahan di akhir tahun 2015 karena perusahaan mengalami kerugian di tahun 2014 dan 2015; dan baru memperoleh laba di akhir tahun 2016 sebesar Rp.850.000.000</li>
			<table>
				<tr>
					<td class="vertical text-bold"><div>Manual</div></td>
					<td>
						<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_5.png">
					</td>
				</tr>
				<tr>
					<td class="vertical text-bold"><div>Aplikasi</div></td>
					<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/4_6.png"></td>
				</tr>
			</table>
		</ol>
		
		<li class="text-bold">Intrinsic Value</li> <!-- nomor 5 -->
		<p>Sebuah perusahaan Elektronik saat ini menawarkan akan membayar dividen sebesar Rp.4.500,- per lembar per tahun. Dengan adanya krisis ekonomi maka rate of return yang disyaratkan investor  hanya 7% per tahun. </p>
		<ol type="a">
			<li>Jika diasumsikan dividen dibayarkan secara teratur dan tidak mengalami pertumbuhan, hitunglah besarnya nilai intrinsik per lembar saham tersebut (dengan menggunakan present value approach).</li>
			<li>Jika diasumsikan dividen dibayarkan secara teratur dan akan mulai tumbuh secara konstan 4 tahun kemudian dengan tingkat pertumbuhan 4.5% per tahun, hitunglah besarnya nilai intrinsik per lembar saham tersebut (dengan menggunakan present value approach).</li>
			<li>Jika diasumsikan pertumbuhan dividen menurun setelah tahun ke 6 dan seorang investor akan menjual saham yang dimilikinya dengan harga Rp.15.000/lembar, hitung besarnya nilai intrinsik per lembar saham tersebut (dengan menggunakan present value approach).</li>
			<li>Dengan asumsi yang sama dengan poin b, hitunglah perkiraan P/E rasionya jika diasumsikan divident payout ratio 4 tahun kemudian adalah 45%.</li>
			<li>Jika tahun 2016 dan seterusnya (5 tahun) dividen yang akan dibayar adalah:</li>
			<table class="center-table">
				<tr>
					<td>2016</td>	
					<td>2017</td>	
					<td>2018</td>	
					<td>2019</td>	
					<td>2020</td>
				</tr>
				<tr>
					<td>1.000</td>	
					<td>1.250</td>	
					<td>0</td>	
					<td>850</td> 
					<td>2.500</td>
				</tr>
			</table>
			<p>Berapa nilai intrinsik saham/lembarnya ?</p>
		</ol>

		<p class="text-bold">JAWAB:</p>

		<ol type="a">
			<li>Jika diasumsikan dividen dibayarkan secara teratur dan tidak mengalami pertumbuhan, hitunglah besarnya nilai intrinsik per lembar saham tersebut (dengan menggunakan present value approach).</li>
			<table>
				<tr>
					<td class="vertical text-bold"><div>Manual</div></td>
					<td>
						<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/5_1.png">
					</td>
				</tr>
				<tr>
					<td class="vertical text-bold"><div>Aplikasi</div></td>
					<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/5_2.png"></td>
				</tr>
			</table>
			<li>b.	Jika diasumsikan dividen dibayarkan secara teratur dan akan mulai tumbuh secara konstan 4 tahun kemudian dengan tingkat pertumbuhan 4.5% per tahun, hitunglah besarnya nilai intrinsik per lembar saham tersebut (dengan menggunakan present value approach).</li>
			<table>
				<tr>
					<td class="vertical text-bold"><div>Manual</div></td>
					<td>
						<img class="img-fluid img-ss" alt="Responsive image" src="assets/img/5_3.png">
					</td>
				</tr>
				<tr>
					<td class="vertical text-bold"><div>Aplikasi</div></td>
					<td><img class="img-fluid img-ss" alt="Responsive image" src="assets/img/5_4.png"></td>
				</tr>
			</table>
		</ol>
	</ol> <!-- end list  -->

</body>
</html>


