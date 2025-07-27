<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<meta http-equiv="imagetoolbar" content="no"/>
	<meta name="MSSmartTagsPreventParsing" content="false"/>
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	<?=wCMS::css()?>
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
</head>
<body>
<?=wCMS::settings()?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?=wCMS::url()?>"><?=wCMS::get('config', 'siteTitle')?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMobile" aria-controls="navMobile" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMobile">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?=wCMS::menu()?>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5">


  <?=wCMS::alerts()?>

  <div class="row gx-5">
    <!-- Sidebar -->
    <aside class="col-lg-4 order-lg-1 mb-4">
      <!-- Search -->
      <form class="mb-4" role="search" method="GET" action="<?=wCMS::url('search')?>">
        <div class="input-group">
          <input type="search" name="q" class="form-control" placeholder="Search articles..." aria-label="Search articles" value="<?=htmlspecialchars($_GET['q'] ?? '')?>">
          <button class="btn btn-primary" type="submit" aria-label="Submit search">Search</button>
        </div>
      </form>

      <!-- Categories -->
      <section class="mb-4">
        <h5 class="fw-semibold border-bottom pb-2 mb-3">Categories</h5>
        <ul class="list-group list-group-flush">
          <!-- Replace with dynamic categories block -->
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Getting Started</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Account Setup</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Billing & Payments</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Troubleshooting</a></li>
        </ul>
      </section>

      <!-- Popular Articles -->
      <section>
        <h5 class="fw-semibold border-bottom pb-2 mb-3">Popular Articles</h5>
        <ul class="list-group list-group-flush">
          <!-- Replace with dynamic popular articles -->
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">How to create an account</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Reset your password</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Subscription plans overview</a></li>
          <li class="list-group-item px-0"><a href="#" class="text-decoration-none">Contact support</a></li>
        </ul>
      </section>
    </aside>

    <!-- Main Content -->
    <main class="col-lg-8 order-lg-2">
      <article class="mb-5">
        <h1 class="mb-4 fw-bold"><?=wCMS::page('title')?></h1>
        <div class="fs-5 lh-lg">
          <?=wCMS::page('content')?>
        </div>
      </article>

      <!-- Related Articles -->
      <section class="mb-5">
        <h4 class="fw-semibold mb-3">Related Articles</h4>
        <ul class="list-unstyled ps-3">
          <!-- Replace with dynamic related articles -->
          <li><a href="#" class="text-decoration-none">Understanding Your Dashboard</a></li>
          <li><a href="#" class="text-decoration-none">Managing Notifications</a></li>
          <li><a href="#" class="text-decoration-none">Setting Privacy Preferences</a></li>
        </ul>
      </section>

      <!-- FAQ Accordion -->
      <section>
        <h4 class="fw-semibold mb-4">Frequently Asked Questions</h4>
        <div class="accordion" id="faqAccordion" role="tablist">
          <!-- Example FAQ -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingExample">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseExample" aria-expanded="false" aria-controls="faqCollapseExample">
                What is this knowledgebase?
              </button>
            </h2>
            <div id="faqCollapseExample" class="accordion-collapse collapse" aria-labelledby="faqHeadingExample" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                This knowledgebase helps you find answers and articles quickly.
              </div>
            </div>
          </div>

          <!-- Dynamic FAQ block -->
          <?=wCMS::block('faq')?>
        </div>
      </section>
    </main>
  </div>
</div>

<footer class="bg-light py-4 mt-5 border-top">
  <div class="container text-center small text-muted">
    <?=wCMS::footer()?>
  </div>
</footer>




	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-3gJwYpmeJw94w0Bzai2YXcoYfScEe5NBzNp4h8F3Bdg=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-6b47JXPTQJWfg4nUXGpAFsW5JpM7VYxDE13uZXY4Yos=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/autosize@5.0.1/dist/autosize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>	<?=wCMS::js()?>
</body>
</html>