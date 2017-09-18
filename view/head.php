<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DDAC Airways" />
<link rel="shortcut icon" type="image/png" href="img/favicon.png">

<title><?php echo Config::get('site_name') . " | " . ucwords ($page) ?></title>
<base href="<?php echo Config::get('base_url'); ?>/">

<link rel="stylesheet" type="text/css" href="/css/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="/js/semantic.min.js"></script>
<style>
  .ui.message .list:not(.ui) li:before {
    content: '•';
  }
  .footer.segment {
    padding: 5em 0em;
  }
  .site{
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  .site-content {
    flex: 1;
  }
  .hidden{
    display:none !important;
  }
</style>