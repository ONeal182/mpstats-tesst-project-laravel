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

})