<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anecos</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>scribbler-global.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>scribbler-landing.css">
</head>

<body>
	<nav>
		<div class="logo"></div>
		<ul class="menu">
			<div class="menu__item toggle"><span></span></div>
			<li class="menu__item"><a href="<?= base_url('documentations'); ?>" class="link link--dark"><i class="fa fa-book"></i> Documentation</a>
			</li>
			<li class="menu__item"><a href="https://github.com/mangedod/anecos" target="_blank" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
		</ul>
	</nav>
	<div class="hero">
		<h1 class="hero__title">Anecos</h1>
		<p class="hero__description">ANECOS adalah sebuah Rest API utama dari PT. Kantis Sehati Sukses.</p>
	</div>
	<div class="hero__terminal">
		<pre>
			<code class="shell-session demo">
				Contoh data yang dihasilkan:
			</code>
		</pre>
	</div>
	<div class="wrapper">
		<div class="installation">
			<h3 class="section__title">Installation</h3>
			<div class="tab__container">
				<ul class="tab__menu">
					<li class="tab active" data-tab="mac">clone</li>
					<li class="tab" data-tab="linux">package</li>
				</ul>
				<pre class="nohighlight code">
					<code class="tab__pane active mac">git clone https://github.com/mangedod/anecos.git</code>
					<code class="tab__pane linux">composer require chriskacerguis/codeigniter-restserver</code>
				</pre>
			</div>
		</div>
		<div class="feature">
			<div class="feature__item">
				<h3 class="section__title">Stok Barang</h3>
				<p>Pada stok barang ini akan menampilkan data stok barang yang tersedia di database secara realtime.</p>
			</div>
			<div class="feature__item">
				<h3 class="section__title">Warna Produk</h3>
				<p>Pada warna produk ini akan menampilkan data varian warna produk yang ada pada database.</p>
			</div>
			<div class="feature__item">
				<h3 class="section__title">Finishing</h3>
				<p>Pada finishing ini akan menampilkan data jenis finishing produk yang telah tercantum di database.</p>
			</div>
			<div class="feature__item">
				<h3 class="section__title">Item</h3>
				<p>Pada item ini akan menampilkan data item produk yang telah tercantum di database.</p>
			</div>
			<div class="feature__item">
				<h3 class="section__title">Kategori</h3>
				<p>Pada kategori ini akan menampilkan data kategori sebuah produk yang telah tercantum di database.</p>
			</div>
			<div class="feature__item">
				<h3 class="section__title">SKU</h3>
				<p>Pada SKU ini akan menampilkan seluruh data item produk lengkap beserta code SKU dan barcode. </p>
			</div>
		</div>
		<div class="callout">
			<p>Untuk mendapatkan semua data tersebut kamu bisa mempelajarinya pada dokumentasi yang telah disediakan.</p>
			<a href="<?= base_url('documentations'); ?>" class="button--primary">Documentation</a>
		</div>
	</div>
	<div class="changelog">
		<div class="wrapper">
			<h3 class="section__title">Changelog</h3>
			<div class="changelog__item">
				<div class="changelog__meta">
					<h4 class="changelog__title">v0.3</h4>
					<small class="changelog__date">10/04/2024</small>
				</div>
				<div class="changelog__detail">
					<ul>
						<li>Improving the writing workflow with better key bindings</li>
						<li>Design updates</li>
						<li>SSL Verification for web hooks</li>
						<li>Render Emoji</li>
					</ul>
				</div>
			</div>
			<div class="changelog__item">
				<div class="changelog__meta">
					<h4 class="changelog__title">v0.2</h4>
					<small class="changelog__date">7/11/2023</small>
				</div>
				<div class="changelog__detail">
					<ul>
						<li>Adding Unicode support</li>
						<li>Basic text highlighting</li>
						<li>Fresh Design</li>
					</ul>
				</div>
			</div>
			<div class="changelog__item">
				<div class="changelog__meta">
					<h4 class="changelog__title">v0.1</h4>
					<small class="changelog__date">5/09/2023</small>
				</div>
				<div class="changelog__detail">
					<ul>
						<li>Save default md file in new folders</li>
						<li>Ability to quick search on existing notes</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">@ Anecos 2023 - <?= date('Y'); ?>.</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
	<script>
		hljs.initHighlightingOnLoad();
	</script>
	<script src="<?= base_url('assets/front/'); ?>scribbler.js"></script>
</body>

</html>