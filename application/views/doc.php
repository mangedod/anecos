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
      <li class="menu__item"><a href="https://github.com/mangedod/anecos" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
      <li class="menu__item"><a href="<?= base_url(); ?>" class="link link--dark"><i class="fa fa-home"></i> Home</a></li>
    </ul>
  </nav>
  <div class="wrapper">
    <aside class="doc__nav">
      <ul>
        <li class="js-btn selected">Get Started</li>
        <li class="js-btn">Configuration</li>
        <li class="js-btn">Keybindings</li>
        <li class="js-btn">Issues</li>
      </ul>
    </aside>
    <article class="doc__content">
      <section class="js-section">
        <h3 class="section__title">Get Started</h3>
        <p>ANECOS adalah sebuah Rest API utama dari PT. Kantis Sehati Sukses untuk kebutuhan data baik internal maupun eksternal. ANECOS sendiri merupakan sebuah akronim dari Ansania Eco System.</p>
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
        <p>Akses untuk mendapatkan sebuah value dari anecos dibatasi dengan API TOKEN yang harus Anda daftarkan.</p>
        <table id="customers">
          <tr>
            <th>Options</th>
            <th>Value</th>
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
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas
          concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius
          te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates
          suavitate vituperatoribus.</p>
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
        <h3 class="section__title">Issues</h3>
        <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At
          eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat,
          ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne
          usu tation vituperata.</p>
        <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas
          concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius
          te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates
          suavitate vituperatoribus.</p>
      </section>
    </article>
  </div>

  <footer class="footer">Ansania Eco System <?= date('Y'); ?>.</footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
  <script>
    hljs.initHighlightingOnLoad();
  </script>
  <script src="<?= base_url('assets/front/'); ?>scribbler.js"></script>
</body>

</html>