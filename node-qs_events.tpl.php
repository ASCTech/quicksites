<h1 id="title"><?php print check_plain($node->title) ?></h1>
<div class="field field-type-datetime field-field-ascevents-date">
  <div class="field-items">
      <div class="field-item">
        <?php
          print $node->field_ascevents_date[0]['view'];
        ?>
      </div>
  </div>
</div>
<div class="field field-type-text field-field-ascevents-location">
  <div class="field-items">
      <div class="field-item"><?php ($node->field_ascevents_location[0]['view'] == "") ? print "Location: tba" : print $node->field_ascevents_location[0]['view'] ?></div>
  </div></div>
<div class="field field-type-filefield field-field-ascevents-image">
  <div class="field-items">
      <div class="field-item"><?php print $node->field_ascevents_image[0]['view'] ?></div>
  </div>
</div>

<div class="field field-title">
  <div class="field-items">
      <div class="field-item"><?php //print check_plain($node->title) ?></div>
  </div>
</div>


<?php print $node->content['body']['#value'] ?>

<?php print $node->content['files']['#value']; ?>
