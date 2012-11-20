<?php
  $sign_img = '<img src="' . file_create_url('public://sign-links/sessions-960.png') . '" />';
  $options = array(
    'html' => TRUE,
    'attributes' => array(),
  );
  $sign_link = l($sign_img, 'program', $options);
?>

<div<?php print $attributes; ?>> 
  <div<?php print $content_attributes; ?>> 
    <?php print $sign_link; ?>
  </div>
</div>
