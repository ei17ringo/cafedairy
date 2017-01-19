<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 content-margin-top">
      <br>
      <br>
      <br>
        <legend>Diary</legend>
        <!-- <form method="post" action="" class="form-horizontal" role="form"> -->
           
        <!-- フォーム開始 -->
        <!-- date -->
        <?php
          echo $this->Form->create($diary, ['type' => 'file']);
        ?>
        <div class="form-group">
          <label class="col-sm-4 control-label">Date</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('date', [ 
                      'type' => 'date',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
            </div>
        </div>

        <!-- c_name -->
        <div class="form-group">
          <label class="col-sm-4 control-label">Coffee</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('c_name', [ 
                      'type' => 'text',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
            </div>
        </div>         
          
        <!-- s_name -->
        <div class="form-group">
          <label class="col-sm-4 control-label">Shop</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('s_name', [ 
                      'type' => 'text',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
            </div>
        </div>

        <!-- study_time -->
        <div class="form-group">
          <label class="col-sm-4 control-label">Study time</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('time', [ 
                      'type' => 'text',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
                <small id="" class="form-text text-muted">You don't need to include "H".</small>
            </div>
        </div>

        <!-- file -->
        <div class="form-group">
          <label class="col-sm-4 control-label">File</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('photo', [ 
                      'type' => 'file',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
                <?php echo $this->Form->input('photo_dir', ['type' => 'hidden']); ?>
            </div>
        </div>

        <!-- comment -->
        <div class="form-group">
          <label class="col-sm-4 control-label">comment</label>
             <div class="col-sm-8">
                <?php
                  echo $this->Form->input('comment', [ 
                      'type' => 'textarea',
                      'div' => false,
                      'label' => false,
                      'class'=> 'form-control'
                   ]);
                ?>
                <small id="" class="form-text text-muted">Please input 40 characters or less.</small>
            </div>
        </div>

        <!-- ボタン -->
        <div class="form-group">
          <?php
            echo $this->Form->button('WROTE',['type' => 'submit',
                                     'class' => 'btn btn-primary btn-lg btn-block']);
          ?>
        </div>

          <!-- date -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Date</label>
            <div class="col-sm-8">
              <input type="date" name="date" class="form-control" placeholder="例： ice coffee" value="">
            </div>
          </div>   -->

          <!-- coffee_name -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Coffee</label>
            <div class="col-sm-8">
              <input type="text" name="c_name" class="form-control" placeholder="ex： ice coffee" value="">
            </div>
          </div> -->

          <!-- shop_name -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Shop</label>
            <div class="col-sm-8">
               <input type="text" name="s_name" class="form-control" placeholder="ex： starbucks" value="">
            </div>
          </div> -->

          <!-- study_time -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Study time</label>
            <div class="col-sm-8">
              <input type="number" name="c_name" class="form-control" placeholder="ex： 5.5" value="">
              <small id="" class="form-text text-muted">You don't need to include "H".</small>
            </div>
          </div> -->

          <!-- file -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Picture</label>
            <div class="col-sm-8">
               <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            </div>
          </div> -->

          <!-- コメント -->
          <!-- <div class="form-group">
            <label class="col-sm-4 control-label">Comment</label>
            <div class="col-sm-8">
              <textarea type="text" name="comment" class="form-control" placeholder="ex： 美味しかった。" value=""></textarea>
              <small id="" class="form-text text-muted">Please input 40 characters or less.</small>
            </div>
          </div> -->
              
          <!-- submit -->
          <!-- <div class="form-group">
              <button type="button" class="btn btn-primary btn-lg btn-block">WROTE</button>
          </div>
        </form> -->
        <?php    
          echo $this->Form->end();
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

      </div>
    </div>
  </div>