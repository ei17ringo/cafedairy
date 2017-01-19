<?php 
  $time = time('H:i');
 ?>

  <div class="main">
    <div class="sidebar">
    <?php  if (6 <= $time && $time <= 11) : // 6時～11時の時間帯のとき ?>
     <p class="ana">おはようございます
     <?php  elseif (12 <= $time && $time <= 18) : // 12時〜20時の時間帯のとき ?>
     <p class="ana">こんにちは
     <?php  else : // それ以外の時間帯のとき ?>
     <p class="ana">こんばんは
     <?php endif; ?>
      、ゲストさん</p>
      <br>
      <div class="w3-card-2 w3-round w3-white">
              <div class="w3-container">
               <h4 class="w3-center">My Profile</h4>
               <p class="w3-center"><img src="/cake/webroot/img/profile.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
               <hr>
               <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>YUGA</p>
               <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>TOKYO, JAPAN</p>
              </div>
        </div>
       
      <h2>過去の投稿</h2>

      <ul>
        <li><?php echo date("Y年m月"); ?>の投稿</li>
        <li><?php echo date( "Y年m月" , strtotime('-1 month' , time()) ) ;?>の投稿</li>
        <li><?php echo date( "Y年m月" , strtotime('-2 month' , time()) ) ;?>の投稿</li>
      </ul>
      
    </div>
    
    <div class="contents" style="height: auto;">
      <div class="contents-top">
         <h1><?php echo date("Y年m月"); ?>の投稿</h1>
      </div>
      <?php foreach ($diaries as $diary): ?>
        <div class="contents-item">
          <h1><?= $this->Html->link($diary->c_name,['action' => 'view', $diary->id]) ?></h1>
          <img src="/cake/webroot/img/coffee.png"><h2><?= $diary->s_name ?></h2>
          <p><?= $diary->created->format('Y-m-d') ?>
          <small><?= $diary->created->format('H:i:s') ?></small></p>
        </div>
      <?php endforeach; ?>

      <div class="contents-bottom">
          <?php 
              echo $this->Paginator->prev('< 前へ|', array(), null, array('class' => 'prev disabled'));
              echo $this->Paginator->numbers(array('separator' => ''));
              echo $this->Paginator->next('|次へ >', array(), null, array('class' => 'next disabled'));
          ?>
      </div>

    </div>

  </div>

<!-- cssが効かなかったのでjsで対応 -->
  <script type="text/javascript">
    $(function(){
      $('.sidebar').css({
        'margin-left':'0px',
        'margin-top': '47px'
        });
    });
  </script>