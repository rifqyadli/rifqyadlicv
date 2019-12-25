<?php  




$conn = mysqli_connect("localhost","id12048828_rifqy","rifqyadli123","id12048828_rifqyadli");


$hobi=[["Hobi" => "Berenang"],["Hobi" => "Basket"],["Hobi" => "Bulu Tangkis"]];

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="Puisi.css">
	<title>CV</title>
	<script src="Puisi.js"></script>
	<link rel="stylesheet" href="CV_Bar.css" />
	<script src="CSS.js"></script>
	<style>
		body,
		html {
			background-image: url(twitter.gif);
			background-repeat: no-repeat;
			background-size: cover;
			color:cyan;
		}
	</style>
	<script>
		window.onload = aduhai();
		function aduhai() {
			var nama = prompt("Masukan Nama Anda                       (Hints : Lulu)");
			if (nama === 'Lulu') {
				alert('Halo Bu ' + nama + ' Selamat Datang di CV saya');
				alert('Jangan Lupa beri saya nilai bagus ya bu ' + nama);
			}
			else {
				window.location = "BukanDosen.html"
			}
		}
	</script>
</head>
<body onload="Bruh()">

	<header id="Header"> <!--Untuk header--> 

		<h1 style="text-align: center;" id="Ps">Selamat Datang di CV Saya </h1>
		<p style="text-align: center;">Semoga Ibu Berkenan</p>

	</header>

	<nav id="nav">
		<ul>
			<a href="#C1" class="vis"> <li>Data Pribadi</li></a>
			<a href="#C2" class="vis"> <li>Riwayat Pendidikan</li></a>
			<a href="#C3" class="vis"><li>Riwayat Organisasi</li></a>
		</ul>
	</nav>

<!-- <section>
<div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem aspernatur, atque nisi fuga unde eos eveniet iure quam id sapiente, nesciunt pariatur placeat aperiam cumque nam repellendus sint molestiae sunt.</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta obcaecati pariatur suscipit, incidunt, placeat sit beatae maxime, quo commodi quibusdam aliquid esse in! Neque labore ratione excepturi. Autem, quasi voluptas!</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas soluta obcaecati laborum explicabo at. Iusto quo vel accusantium quam aliquam, praesentium error asperiores sint! Minus quisquam laboriosam placeat accusamus sunt.</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, laudantium odit. Aliquam minus corrupti nihil sint. Molestias, praesentium! Mollitia omnis dignissimos voluptates qui non odit cumque repudiandae fugit ad cum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, unde inventore nisi et perferendis distinctio iste perspiciatis doloremque natus assumenda laboriosam praesentium, consectetur harum alias officia at velit nobis quae?
</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic cupiditate sed atque quaerat dicta suscipit repudiandae minus! Rem laudantium placeat quidem fugiat veniam. Libero at ab numquam delectus. Modi, quaerat.</p>
<img src="JohnConstantine.jpg" alt="scasc">
</section> -->



<div id="Tab_Pertama" style="margin:200px auto 200px auto ;" style="height: 100vh;">
	<h1 style="size: 18px;">
		<p style="margin-left: 3%;">Curriculum Vitae</p>
	</h1><br><br>
	<p style="text-align: center;"><img src="RifqyGanteng.jpg" alt="Gambar saya ceritanya" width="500px"
		height="300px" id="Rifqy"></p>
	</div>

	<br><br>
	<section id="DP">
		<h2 class="Table" id="C1">
			<font size="5">Data Pribadi</font>
		</h2>
		<table class="Tabs"> 
			<tr>
				<td id="TOP">Nama</td>
				<td>: Rifqy Adli Damhuri</td>
			</tr>
			<tr>

				<td>Tempat Tanggal Lahir</td>
				<td> : Bandung,18-07-1999</td>

			</tr>
			<tr>
				<td>Agama</td>
				<td>: Islam</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>: Mahasiswa</td>
			</tr>
			<tr>
				<td>Jenjang Karir </td>
				<td>
					<div id="Pendi">
						<a href="#SD">: 1.SD</a>
						<a href="#SMP">2.SMP</a>
						<a href="#SMA">3.SMA</a>
					</div>
				</td>
			</tr>
			<tr>
				<td>Negara</td>
				<td>: Indonesia</td>
			</tr>
			<tr>
				<td>Email</td>
				<td id="mail"><a href="mailto:rifqy.adli@gmail.com">: rifqy.adli@gmail.com</a>
				</td>

			</tr>
			<tr>
				<td>No.Telp</td>
				<td>: 081282094556</td>
			</tr>
			<tr>
				<td> Alamat </td>
				<td>: Perum Taman Kenari Jagorawi Block 6B no 11</td>

			</tr> <hr>

		</section>


	</table class="Tabs">
	<br><br><br>
	<h3 class="Table" id="C2">
		<font size="5">Riwayat Pendidikan</font>
	</h3>
	<table>
		<div>
			<td>SD</td>
			<td>
				<p id="SD">: SDN 1 Gunung Putri </p>
			</td>

			<td><button type="button" id="Bt3" style="margin-left: 20%;">Klick ini
			untuk Lihat Gambar</button></td>
			<tr>
				<td><img src="SDN01.jpg" alt="Ini gambar SD saya" id="Gbr3" style="display: none;" width="500px"
					height="300px"></td>
					<td><button type="button" style="display: none;" id="Btn3">
						Klick Ini untuk Menghilangkan Gambar
					</button></td>

				</tr>
			</div>

			<div>
				<tr>
					<td>
						<p id="SMP">SMP</p>
					</td>
					<td>: SMPN 1 Solok </td>

					<td><button type="button" id="Bt2" style="margin-left: 20%;">Klick ini untuk Lihat Gambar</button>
					</td>
					<tr>
						<td><img src="SMP1.jpg" alt="Ini gambar SMP saya" id="Gbr2" style="display: none;" width="500px"
							height="300px"></td>
							<td><button type="button" style="display: none;" id="Btn2">Klick ini untuk Menghilangkan
							Gambar</button></td>
						</tr>
					</tr>
				</div>

				<div>
					<tr>
						<td>SMA</td>
						<td>
							<p id="SMA"> : SMA Indocement </p>

						</td>

						<td><button type="button" id="Bt1" style="margin-left: 20%;">Klick ini untuk Lihat Gambar</button>
						</td>
						<tr>
							<td>
								<img src="SMA1.jpg" alt="Ceritanya gambar sma saya" id="Gbr1" style="display: none;"
								width="500px" height="300px">
							</td>
							<td><button type="button" style="display: none;" id="Btn1">Klick Ini untuk Menghilangkan Gambar
							</button></td>
						</tr>
					</tr><hr>
				</table>

				<br><br><br><br><br>

				<table class="Tabs">
					<tr>
						<td>
							<h4 class="Table" id="C3">
								<font size="5">Riwayat Organisasi</font> <hr>
							</h4>

							<ul>
								<li>Seksi Olahraga Osis SMA Indocement 2016-2017</li>
								<li>Wakil Ketua English Day Sma Indocement</li>
								<li>Kapten Basket Sma Indocement</li>
								<li>Asisten Lab Pengembangan Komputerisasi</li>
								<li>Pemain Popda 2017</li>
								<li>Pemain Porda 2018</li>


							</ul> <br> <br>
						</td>
					</tr>

				</table>

				<table>
					<tr>
						<td>
							<h4 class="Table" id="C4">
								<font size="5">Hobi</font> <hr>
							</h4>

							<ul>
								<?php 
								foreach ($hobi as $h) :
									?>
									<li><?php
									echo $h["Hobi"]; 
									?> <a href="Hobi.php?Hobi=<?php
										echo $h["Hobi"]

									?>"> <button type="button">Klick Untuk Lihat Prestasi</button></li>
									</a>

									<?php 
								endforeach;
								?>


							</ul>
						</td>
					</tr>
				</table>

			</div>

		</div>


		<script src="CSS.js"></script>

	</body>


	</html>
	<script src="Puisi.js"></script>

</body>
</html>



