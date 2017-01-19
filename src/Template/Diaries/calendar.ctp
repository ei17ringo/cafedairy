<head>
  <!-- カレンダープラグイン -->
  <?= $this->Html->css( '/webroot/css/fullcalendar/fullcalendar.min.css'); ?>
  <?= $this->Html->script( '/webroot/js/fullcalendar/moment.min.js'); ?>
  <?= $this->Html->script( '/webroot/js/fullcalendar/jquery-ui.min.js'); ?>
  <?= $this->Html->script( '/webroot/js/fullcalendar/fullcalendar.min.js'); ?>
</head>


<div class="container" style="margin: 40px 0 80px 0;
                               padding-right: 20px;
                               padding-left: 0px;">

    <div id="fc1" class="fc"></div>

</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#fc1').fullCalendar({
      dayClick: function(date, allDay, jsEvent, view, id) {
              if (allDay) {
                  // url: '/cake/diaries/view/' + id,
                  // →みたいな形にしたいので質問をする
              }
          },
      events: [
      <?php foreach ($diaries as $diary): ?>
            { 
                url: '/cake/diaries/view/<?= $diary->id ?>',
                id: '<?= $diary->id ?>',
                title: '<?= $diary->s_name ?>',
                start: '<?= $diary->created->format('Y-m-d') ?>'
            },
      <?php endforeach; ?>
      ]
      
    })
});
</script>