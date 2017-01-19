<div id="view-container">
  <div id="margin">
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-lg-8">
           <h1><?= $diary->created->format('Y年m月d日') ?>の投稿</h1>
            
        </div>
      </div>
    </div>

      <section class="date-pic"> 
        <div class="container">
              <div cl="assrow">
                <div class="col-lg-6 col-sm-12">
                    <h1><?= $diary->c_name ?></h1>
                </div>
              </div>    
        </div>
      </section>

      <section class="date-info">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <ul class="info-list">
                <li><i class="ion-coffee"></i>
                <span><?= $diary->s_name ?></span></li>
                <li><i class="ion-ios-timer-outline"></i>
                <span><?= $diary->time ?>H</span></li>
                <li><i class="ion-ios-chatbubble-outline"></i>
                <span><?= $diary->comment ?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    $('.date-pic').css({
        backgroundImage: 'url("/cake/<?php echo $diary['photo_dir']; ?>/<?php echo $diary['photo']; ?>")' // "" で括っていないとIEでは表示されない
    });
});
</script>