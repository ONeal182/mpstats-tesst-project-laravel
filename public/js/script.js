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
      data: { text: 'Текст' },
      success: function (data) {
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
  $('body').on('click', '.place .complitation-input button', function (e) {

    e.preventDefault();
    let clone = $(this).parents('.add-compilation').find('.complitation-input').last();
    let newInput = clone.clone().appendTo('.place');
    console.log(newInput.find('input').val(''));
    clone.find('button').first().remove();
    // e.preventDefault();
  })

  $('.show-data').on('click', function (e) {
    e.preventDefault();
    $(this).next().toggle("slow", function () {
      $(this).show();


    });


  })

  // Initialize the echarts instance based on the prepared dom
  var myChart = echarts.init(document.getElementById('main'));

  var monthsArray = Array(30).fill().map((e, i) => i + 1),
    currentMonth = 'Февраль',
    maxProfit = 280,
    minProfit = 140;

  var option = {

    tooltip: {
      trigger: 'item',
      formatter: function (params) {

        return `
        <div class="charts-block">
          <p class="charts__gray-txt">Этот месяц</p>
          <p class="charts__bold-txt">${params.data[1]}</p>
          <p class="charts__gray-txt">${currentMonth}</p> 
        </div>`

      },

    },

    xAxis: {
      type: 'category',
      data: monthsArray,
      axisLine: {
        onZero: false,
      },
    },
    yAxis: {
      type: 'value',
      min: minProfit,
      max: maxProfit,
      position: 'left',
      axisLabel: {
        formatter: '{value} M'
      },
    },

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
          [29, 270],
        ]
      },
    ],

  };

  myChart.setOption(option);


  const getElementsForChart = () => {
    const arrayChartWrapp = document.querySelectorAll('.chart-in-table');

    let arrayWithDate = [
      [1, 150],
      [5, 157],
      [7, 158],
      [15, 190],
      [22, 200],
      [25, 250],
      [29, 270],
    ]

    setChartOption(arrayChartWrapp, arrayWithDate)
  }

  const setChartOption = (arrayChartWrapp, arrayWithDate) => {
    let tableChart = [];

    arrayChartWrapp.forEach((el, i) => {
      tableChart[i] = echarts.init(document.getElementById(el.id));
    })

    const stateChart = {
      'green': {
        'bg': '#48C158',
        'line': '#0DC51F',
      },
      'red':{
        'bg': '#FD0000',
        'line': '#F51010',
      },
    };
   
    let currentLineColor, currentBgColor;

    if (arrayWithDate[arrayWithDate.length - 1][1] > arrayWithDate[arrayWithDate.length - 2][1]) {//определение цвета графика

      currentBgColor = stateChart.green.bg;
      currentLineColor = stateChart.green.line;

    } else {
      currentBgColor = stateChart.red.bg;
      currentLineColor = stateChart.red.line;
    }

    let option = {
      animation: false,

      tooltip: {
        trigger: 'none',
      },

      axisPointer: {
        show: false,
      },

      xAxis: {
        show: false,
        data: monthsArray,

      },
      yAxis: {
        show: false,
        min: minProfit,
        max: maxProfit,
        position: 'left',

      },

      series: [
        {
          name: 'Money',
          type: 'line',
          smooth: true,
          showSymbol: false,
          data: arrayWithDate, //массив с данными
          areaStyle: {
            color: currentBgColor
          },
          itemStyle: {
            color: currentLineColor
          },
        },
      ],

    };

    tableChart.forEach((el) => {
      el.setOption(option);
    })

  }

  getElementsForChart();


  $('.datepicker-here').datepicker({})

  let currentMonthNumber = new Date().getMonth(),
    monthsArrayNames = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
    currentShortMonth = monthsArrayNames[currentMonthNumber + 1].slice(0, 3);

  $('.datepicker-here').val(currentShortMonth + ' ' + new Date().getFullYear());

})