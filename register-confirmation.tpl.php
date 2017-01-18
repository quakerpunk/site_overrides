<?php
//Home Page Tagline
$block = block_load('block', 17);
$home_page_tagline = _block_get_renderable_array(_block_render_blocks(array($block)));

//Home Page Tiles
$tilesBlock = views_embed_view('home_page_tiles', 'block_1');
?>

<div class="register-confirmation">
  <pre style="display: none;"><?php print_r($data); ?></pre>
  <?php print drupal_render($home_page_tagline); ?>
  <div class="clearfix" style="margin-bottom: 58px;">
    <?php print $tilesBlock; ?>
  </div>
  <p><strong><?php print t('Thank you for your interest in our Packet &amp; Optical solutions. Here is the download you requested.'); ?></strong></p>
  <p><strong><?php print $data['download_link']; ?></strong></p>
</div>

<!-- Conversion Tracking Code -->
<script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 986287605;
  var google_conversion_language = "en";
  var google_conversion_format = "2";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "L11bCPu-0gQQ9Zum1gM"; var google_conversion_value = 0;
  /* ]]> */
</script>
<script type="text/javascript"
src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
  <img height="1" width="1" style="border-style:none;" alt=""
  src="http://www.googleadservices.com/pagead/conversion/986287605/?value=0&amp;label=L11bCPu-0gQQ9Zum1gM&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>
