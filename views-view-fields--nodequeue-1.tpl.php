<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>
  <?php if ($field->class=="title"):?>
    <div class="slider_short_desc">
  <?php endif; ?>
  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
  <?php if ($field->class=="field-space"):?>
    </div>
  <?php endif; ?>
<?php endforeach; ?>