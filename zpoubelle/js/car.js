$(function() {
  $('#car').countdown(new Date('2019-06-04'))
    .on('update.countdown', function(event) {
      $(this).children().html(event.strftime('%-w semaines %-d jour(s) %-H h %M min %S sec'));
    })
    .on('finish.countdown', function() {

    });
})
