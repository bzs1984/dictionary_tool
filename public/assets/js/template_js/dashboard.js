$(function() {

  $('.dynamicsparkline').sparkline([10, 8, 5, 7, 5, 4, 1, 10, 8, 12, 7, 7, 4, 5, 8, 8, 7, 7, 11, 5, 9, 12, 7], {
    type: 'line',
    lineColor: '#7BB4CE',
    fillColor: '#DEF0F9'
  });

  $('.dynamicbars').sparkline([5, 6, 7, 2, 0, -4, -2, 4, 1, 10, 8, 12, 7, -2, 4, 8, 10, 8], {
    type: 'bar',
    barColor: '#7BB4CE',
    negBarColor: '#c76868'
  });

  $(".knob").knob({
    thickness: '.05',
    font: "Open Sans",
    bgColor: "#f4f4f4",
    readOnly: true
  });



  


  

  


  


  // REAL TIME CHART IMPLEMENTATION START

  var data = [],
      totalPoints = 50;

  function getRandomData() {

    if (data.length > 0)
      data = data.slice(1);

    // Do a random walk

    while (data.length < totalPoints) {

      var prev = data.length > 0 ? data[data.length - 1] : 50;
      var random_value = randomFromInterval(1, 9);
      var random_value_2 = randomFromInterval(1, 9);
      var y = prev + random_value - random_value_2;
      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }

      data.push(y);
    }

    // Zip the generated y values with the x values

    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([i, data[i]])
    }

    return [res, y];
  }

  function randomFromInterval(from,to)
  {
      return Math.floor(Math.random()*(to-from+1)+from);
  }

  // Set up the control widget

  var updateInterval = 150;
  $("#updateInterval").val(updateInterval).change(function () {
    var v = $(this).val();
    if (v && !isNaN(+v)) {
      updateInterval = +v;
      if (updateInterval < 1) {
        updateInterval = 1;
      } else if (updateInterval > 2000) {
        updateInterval = 2000;
      }
      $(this).val("" + updateInterval);
    }
  });

  

  




  // END REAL TIME CHART IMPLEMENTATION


  $('.visible-tooltip').tooltip('show');

  // Tasks list
  $('.tasks-list input[type="checkbox"]').change(function(){
    $(this).closest('li').toggleClass('task-done');
  })

});