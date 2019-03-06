<?php
  $section_title = 'small business development';//title/aria label
  $background_image = 'skyline';
  $section_title_line_1 = 'Small-Business';
  $section_title_line_2 = 'Development';
  $stat_block_line_1 = 'investments';
  $stat_block_line_2 = '$2.5M';
 ?>
<div class="bgimage" aria-label="image for <?=$section_title;?>" style=" background:  url('<?php echo home_url(); ?>/wp-content/themes/northeastern/img/<?=$background_image;?>.jpg');"></div>
<div class="ci__wrapper">
  <div class="ci__wrapper-element">
    <div class="ci__wrapper-element-copy">
      <p>To support the development and success of community small businesses, Northeastern created <span><a href="https://news.northeastern.edu/2016/10/26/northeastern-city-and-community-leaders-hail-new-loan-program-for-local-businesses/" target="_blank">Impact Lending</a>, a $2.5 million revolving small&ndash;business loan</span> fund to provide affordable financing and procurement opportunities to women&ndash; and minority&ndash;owned local businesses. Already, Impact Lending has provided capital to 29 Boston&ndash;area businesses, 79 percent of which are minority&ndash;owned, and 66 percent of which are women&ndash;owned. When organizations spend their money with locally owned firms, those firms in turn rely on, and generate, local supply chains, creating an economic multiplier effect. Last year, Northeastern's top suppliers spent almost $65 million with underrepresented businesses in Boston. Of that total, $37.8 million went to women&ndash; and minority&ndash;owned businesses, and $27 million was spent with local and small businesses. </p>
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
    </div>
  </div>
</div>
<div class="ci__wrapper-element-fullwidth">
  <div>
    <div>
      <h3>$65M</h3>
      <small>with underrepresented businesses in Boston</small>
    </div>
    <div>
      <h3>$37.8M</h3>
      <small>went to women&ndash; and minority&ndash;owned businesses</small>
    </div>
    <div>
      <h3>$27M</h3>
      <small>was spent with local and small businesses</small>
    </div>
  </div>
</div>
