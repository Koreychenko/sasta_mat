<div class="panel-display panel-department clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="department-top-image clearfix">
    <?php print $content['top_image']; ?>
    <div class="department-main-content">
      <div class="department-title"><?php print $content['title']; ?></div>
      <div class="department-boss"><?php print $content['boss']; ?></div>
    </div>
  </div>
  <div class="department-main-content clearfix">
    <div class="department-left-column"><?php print $content['left']; ?></div>
    <div class="department-right-column"><?php print $content['right']; ?></div>
  </div>
  <div class="department-fullwidth">
    <?php print $content['middle_fullwidth']; ?>
  </div>
  <?php if ($content['schedule']): ?>
  <div class="department-fullwidth-border">
    <div class="department-main-content">
      <?php print $content['schedule']; ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($content['prices']): ?>
  <div class="department-fullwidth-border">
    <div class="department-main-content">
      <?php print $content['prices']; ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($content['peoples']): ?>
  <div class="department-fullwidth-border noborder">
    <div class="department-main-content">
      <?php print $content['peoples']; ?>
    </div>
  </div>
  <?php endif; ?>
</div>
