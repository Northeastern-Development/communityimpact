<?php
  $section_title = 'community service';//title/aria label
  $background_image = 'community-service';
  $section_title_line_1 = 'Community';
  $section_title_line_2 = 'Service';
  $stat_block_line_1 = 'investments';
  $stat_block_line_2 = '$8M';
 ?>
<div class="ci__wrapper">
    <div class="ci__wrapper-element">
      <div class="ci__wrapper-element-copy">
        <div class="ci__title-box">
          <div class="ci__stat-block">
            <div>
              <small><?=$stat_block_line_1;?></small>
              <h3><?=$stat_block_line_2;?></h3>
            </div>
          </div>
          <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
        </div>
        <p>Northeastern's Center for Community Service works in partnership with nearly 400 nonprofits, schools, and other organizations to meet local community needs. Last year, Northeastern students contributed an estimated $8 million over 280,000 service hours through an array of university&ndash;led civic engagement, service learning, and community service programs. </p>
        <p>Opened in 2015, <span><a href="https://news.northeastern.edu/2015/09/29/northeastern-crossing-formally-unveiled/" title="click here to learn more about northeastern crossing" aria-label="click here to learn more about northeastern crossing"  target="_blank">Northeastern Crossing</a></span> is a one&ndash;stop community center that works to connect the local community with employment and procurement opportunities at Northeastern. This outreach includes community vendor job fairs, business networking, mentoring, and other special programs. Northeastern Crossing’s mission is to: </p>
        <ul role="list">
          <li>Elevate the voices and visibility of Boston's neighborhoods, particularly those from Roxbury, Mission Hill, Fenway, and the South End</li>
          <li>Provide greater access to resources at Northeastern University for Boston residents </li>
          <li>Be a platform where Boston residents and the Northeastern University community can convene, interact, and learn from each other</li>
        </ul>
      </div>
    </div>
    <div class="ci__wrapper-element">
      <h2><span><?=$section_title_line_1;?><br/> <?=$section_title_line_2;?></span></h2>
        <div>
          <div class="bgimage" aria-label="image for <?=$section_title;?>" style="background-image: url('<?php echo home_url(); ?>/wp-content/themes/northeastern/img/<?=$background_image;?>.jpg');">
          </div>
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
</div>
