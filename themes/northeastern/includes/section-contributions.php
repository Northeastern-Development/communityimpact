<?php
  $section_title = 'in kind contributions';//title/aria label
  $background_image = 'in-kind-contributions';
  $section_title_line_1 = 'In-Kind';
  $section_title_line_2 = 'Contributions';
  $stat_block_line_1 = 'investments';
  $stat_block_line_2 = '$1M annually';
 ?>
<div class="ci__wrapper">
  <div class="ci__wrapper-element">
    <div class="ci__wrapper-element-copy">
      <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
      <div class="ci__stat-block-large">
        <div class="ci__stat-wrap">
          <div>
            <small><?=$stat_block_line_1;?></small>
            <h3><?=$stat_block_line_2;?></h3>
          </div>
        </div>
      </div>
        <p>The School of Law spends more than $1 million annually on legal aid clinics to assist local community members on issues of social justice, domestic violence, and public health, among other issues. The university also houses the Edward M. Kennedy Academy for Health Careers, a college preparatory high school for Boston students exploring careers in health and health&ndash;related professions. In addition, Northeastern frequently opens its doors to the community by making university space available by hosting: </p>
        <ul role="list">
          <li>health fairs</li>
          <li>park cleanups</li>
          <li>Lorem ipsum dolor sit amet</li>
          <li>food and coat drives BPS athletics events </li>
        </ul>
    </div>
  </div>
  <div class="ci__wrapper-element">
    <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
      <div>
        <div class="bgimage" aria-label="image for <?=$section_title;?>" style="background-image: url('<?php echo home_url(); ?>/wp-content/themes/northeastern/img/<?=$background_image;?>.jpg');">
        </div>
      </div>
  </div>
</div>
