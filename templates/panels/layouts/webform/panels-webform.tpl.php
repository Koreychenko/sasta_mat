<div class="panel-display panel-illness clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="illness-top">
    <div class="illness-wrapper">
      <?php print $content['top']; ?>
    </div>
  </div>
  <?php if ($content['middle']): ?>
    <div class="illness-fullwidth onlytop">
      <div class="illness-wrapper">
        <?php print $content['middle']; ?>
      </div>
    </div>
  <?php endif; ?>
</div>
