<?php 
$team_active='active';
include('header.php');
?>


<!--===== AGENTS =====--> 
<section id="agent-1" class="padding">
  <div class="container">
    <div class="row">
    <?php
        $team="SELECT * FROM client where status='1' order by id DESC";
        $res=mysqli_query($con,$team);
        while($row=mysqli_fetch_assoc($res)){
      ?>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="effects clearfix">
          <div class="img">
            <div class="gri">
              <figure class="effect-layla">
                <img src="admin/media/client/<?php echo $row['image']?>" style="width:345;height:368px"alt="">
                <figcaption> </figcaption>
              </figure>
            </div>
          </div>
        </div>
        <div class="agent-text">
          <h3><?php echo ucfirst($row['name'])?></h3>
          <p><?php echo  ucfirst($row['designation'])?></p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam</p>
          <a href="team_detail.php?id=<?php echo $row['id']?>   " class="link_arrow">Read More</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!--===== #/AGENTS =====-->


<?php 
include('footer.php');
?>