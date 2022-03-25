$(document).ready(function () {

  let getAllMethod = () => {

    let allCheckBox = $('.graphs-block__filter .form-check-input');
    let activeState = [];
    allCheckBox.each(function (index) {
      if ($(this).is(':checked')) {
        activeState.push($(this).attr('data-info'));
      }

    })
    return activeState;
  }

  

  $('.graphs-block__filter .form-check-input').on('change', function () {
    
    $.ajax({
      url: '/mpstats/referenceitems/date',
      method: 'post',
      dataType: 'text',
      data: {text: 'Текст'},
      success: function(data){
        console.log(data);
      }
    });


  })
  let renderTableReff = (dataItem) => {
    Morris.Area({
      element: 'myfirstchart',
      data: dataItem,
      xkey: 'period',
      ykeys: ['iphone', 'ipad', 'itouch'],
      labels: ['iPhone', 'iPad', 'iPod Touch'],
      pointSize: 2,
      hideHover: 'auto'
    });
  }
  $('body').on('click','.place .complitation-input button', function(e){
 
    e.preventDefault();
    let clone = $(this).parents('.add-compilation').find('.complitation-input').last();
    let newInput = clone.clone().appendTo('.place');
    console.log(newInput.find('input').val(''));
    clone.find('button').first().remove();
    // e.preventDefault();
  })
  $('.show-data').on('click', function(e){
    e.preventDefault();
    $(this).next().toggle( "slow", function() {
      $(this).show();


    });
    

  })

  // Initialize the echarts instance based on the prepared dom
var myChart = echarts.init(document.getElementById('main'));

var monthsArray = Array(30).fill().map((e, i) => i + 1),
    maxProfit = 280,
    minProfit = 140;

var option = {

  xAxis: {
    type: 'category',
    data: monthsArray,
  },
  yAxis: {
    type: 'value',
    min: minProfit,
    max: maxProfit,
    position: 'left',
    axisLabel: {
      formatter: '{value} M'
    }
  },
  tooltip: {
    trigger: 'axis',
    axisPointer: { type: 'cross' }
  },
  // legend: {
  //   data: ['Money']
  // },
  series: [
    {
      name: 'Money',
      type: 'line',
      smooth: true,
      data: [
        [1, 150],
        [5, 157],
        [7, 158],
        [15, 190],
        [22, 200],
        [25, 180],
        [29,270],
      ]
    },
  ],
//   formatter: function (params, ticket, callback) {
//     $.get('detail?name=' + params.name, function (content) {
//         callback(ticket, toHTML(content));
//     });
//     return 'Loading';
// }
};

myChart.setOption(option);


})


$('.datepicker-here').datepicker()

// Доступ к экземпляру объекта
$('.datepicker-here').data('datepicker')





