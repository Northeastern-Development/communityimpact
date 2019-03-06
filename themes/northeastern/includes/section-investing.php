<?php
  $section_title = 'investing in boston';//title/aria label
  $background_image = 'investing-in-boston';
  $section_title_line_1 = 'Investing in Boston';
  $section_title_line_2 = '';
  $section_sub_title = 'Northeastern plays an active, engaged role in the city.';
  $stat_block_line_1 = '$25M annually';
  $stat_block_line_2 = 'direct investments made by Northeastern in the neighborhoods surrounding its Boston campus';
 ?>
<div class="ci__wrapper">
    <div class="ci__wrapper-element">
      <div class="ci__wrapper-element-copy">
        <h2><span><?=$section_title_line_1;?></span></h2>
        <h3 style="margin-top:18px;"><?=$section_sub_title;?></h3>
        <div class="ci__stat-block-large">
          <div class="ci__stat-wrap">
            <div>
              <h3><?=$stat_block_line_1;?></h3>
              <small><?=$stat_block_line_2;?></small>
            </div>
          </div>
        </div>
        <p>As a recognized leader in experiential learning and use&ndash;inspired research, Northeastern is a university in tune with the world. Yet even as the university extends its global impact and reach, Northeastern remains committed to using its knowledge, talent, and resources to play an active, engaged role in Boston.</p>
        <p>Northeastern makes countless direct investments for Boston and its residents. These investments have helped improve the lives of the members of our community, strengthening the fabric of the neighborhoods in meaningful ways.</p>
        <p><span>Despite the university’s tax&ndash;exempt status, Northeastern makes over $25 million annually in direct investments in the neighborhoods surrounding its Boston campus.</span></p>
        <p>Here are just a few of the ways those investments have made a difference over the years.</p>
      </div>
    </div>
    <div class="ci__wrapper-element">
      <div class="bgimage" aria-label="image for <?=$section_title;?>" style="background-image: url('<?php echo home_url(); ?>/wp-content/themes/northeastern/img/<?=$background_image;?>.jpg');">
      </div>
    </div>
</div>
