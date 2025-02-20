<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anecos - Documentation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>scribbler-global.css">
  <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>scribbler-doc.css">
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo.ico'); ?>">
  <link rel="author" href="Agus">
</head>

<body>
  <div class="doc__bg"></div>
  <nav class="header">
    <h1 class="logo">Anecos <span class="logo__thin">Doc</span></h1>
    <ul class="menu">
      <div class="menu__item toggle"><span></span></div>
      <li class="menu__item"><a href="https://github.com/mangedod/anecos" target="_blank" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
      <li class="menu__item"><a href="<?= base_url(); ?>" class="link link--dark"><i class="fa fa-home"></i> Home</a></li>
    </ul>
  </nav>
  <div class="wrapper">
    <aside class="doc__nav">
      <ul>
        <li class="js-btn selected">Get Started</li>
        <li class="js-btn">Configuration</li>
        <li class="js-btn">Keybindings</li>
        <li class="js-btn">Register/Login</li>
      </ul>
    </aside>
    <article class="doc__content">
      <section class="js-section">
        <h3 class="section__title">Get Started</h3>
        <p>Untuk menjalankan REST API ANECOS (Ansania Eco System) ini kamu diwajibkan mendaftarkan token key dan juga autetikasi, untuk mendapatkan token key kamu lakukan login/register yang terdapat dipaling bawah dihalaman ini.</p>
        <p>Setelah kamu mempunyai token key lakukan pengecekan pada postman dengan menuliskan <?= base_url(); ?> dengan ditambahkan configurasinya misalnya /stock untuk mendapatkan data stock. Contohnya jadi seperti ini: <em><?= base_url(); ?>stock</em> .</p>
        <h3 class="section__title">Base_url</h3>
        <div class="code__block code__block--notabs">
          <pre class="code code--block">
              <code>
                <?= base_url() ?><br>
              </code>
            </pre>
        </div>
      </section>
      <section class="js-section">
        <h3 class="section__title">Configuration</h3>
        <p>Tambahkan options dibawah ini setelah <?= base_url(); ?>. Contoh <?= base_url(); ?><strong><em>stock</em></strong></p>
        <table id="customers">
          <tr>
            <th>Options</th>
            <th>Keterangan</th>
            <th>Default</th>
          </tr>
          <tr>
            <td>/stock</td>
            <td>Menampilkan data stock seluruh item kerudung.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>/warna</td>
            <td>Menampilkan warna beserta code warnanya.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>/finishing</td>
            <td>Menampilkan finishing beserta codenya.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>/item</td>
            <td>Menampilkan item beserta codenya.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>/kategori</td>
            <td>Menampilkan kategori beserta codenya.</td>
            <td>true</td>
          </tr>
          <tr>
            <td>/sku</td>
            <td>Menampilkan seluruh data item lengkap beserta code SKU dan barcode.</td>
            <td>true</td>
          </tr>
        </table>
        <p>Kemudian masukkan token_key yang sudah kamu dapatkan pada dashboard kamu dan lakukan pengetesan pada postman dengan autentikasi yang telah kamu daftarkan sebagai akun.</p>
        <hr />
      </section>
      <section class="js-section">
        <h3 class="section__title">Keybindings</h3>
        <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At
          eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat,
          ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne
          usu tation vituperata.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas
          concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius
          te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates
          suavitate vituperatoribus.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas
          concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius
          te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates
          suavitate vituperatoribus.</p>
        <hr />
      </section>
      <section class="js-section">
        <h3 class="section__title">Register/Login</h3>
        <p>Untuk menemukan data ANECOS kamu wajib mendaftarkan autentikasi dan mendapatkan token key dan autentikasi. Jika sudah memiliki akun silahkan login namun jika belum silahkan daftarkan akun terlebih dahulu.</p>
        <table id="customers">
          <tr>
            <th>
              <h3 class="section__title">Login</h3>
              <form action="" method="post">
                <input style="margin-bottom: 15px;" type="email" placeholder="Email"><br>
                <input style="margin-bottom: 15px;" type="password" placeholder="Password"><br>
                <button type="submit">SignIn</button>
              </form>
            </th>
            <th>
              <h3 class="section__title">Register</h3>
              <form action="" method="post">
                <input style="margin-bottom: 10px;" type="email" placeholder="Email"><br>
                <input style="margin-bottom: 10px;" type="password" placeholder="Password"><br>
                <input style="margin-bottom: 10px;" type="password" placeholder="Password Confirm"><br>
                <button type="submit">Register</button>
              </form>
            </th>
          </tr>
        </table>
      </section>
    </article>
  </div>

  <footer class="footer">@ Anecos 2023 - <?= date('Y'); ?>.</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <script src="<?= base_url('assets/front/'); ?>scribbler.js"></script>
</body>

</html>