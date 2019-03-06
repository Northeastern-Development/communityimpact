<?php
  $section_title = 'full-tuition scholarships';//title/aria label
  $background_image = 'scholarship-background';
  $section_title_line_1 = 'Full-Tuition';
  $section_title_line_2 = 'Scholarships';
  $stat_block_line_1 = 'investments';
  $stat_block_line_2 = '$13.5M';
 ?>

<div class="bgimage" aria-label="image for <?=$section_title;?>" style=" background:  url('<?php echo home_url(); ?>/wp-content/themes/northeastern/img/<?=$background_image;?>.jpg');">
</div>
<div class="ci__wrapper">

    <div class="ci__wrapper-element">
      <div class="ci__wrapper-element-copy">
          <p>Northeastern invests $13.5 million in full&ndash;tuition scholarships for Boston Public Schools students and other Boston&ndash;area residents. Northeastern currently provides:</p>

          <ul role="list">
            <li>150 full&ndash;tuition need&ndash;based scholarships to Boston Public Schools graduates, including 30 new scholarships since 2014 for students who live in neighborhoods surrounding our Boston campus</li>
            <li>Additional scholarships awarded to BPS valedictorians and graduates in the top 10 percent of their class </li>
            <li>Multiple college&ndash;readiness events on campus for BPS students</li>
            <li>10 scholarships per year to residents of Boston Housing Authority units</li>
            <li> Tuition scholarships to city employees through the Moakley program </li>
          </ul>



          <div class="ci__stat-block-large">
            <div class="ci__stat-wrap">
              <div>
                <small>
                Northeastern graduates a higher percentage of BPS students than any other college or university. </small>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="ci__wrapper-element">
      <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
      <div class="ci__title-box">
        <div class="ci__stat-block">
          <div>
            <small><?=$stat_block_line_1;?></small>
            <h3><?=$stat_block_line_2;?></h3>
          </div>
        </div>
        <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
      </div>
    </div>
</div>
