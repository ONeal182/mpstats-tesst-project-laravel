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
  $('.complitation-input button').on('click', function(e){
    e.preventDefault();
    console.log(3);
    console.log($(this).parents().find('.complitation-input:nth-child(1)').clone().appendTo('.add-compilation'));
  })
})