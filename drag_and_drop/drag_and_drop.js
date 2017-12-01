(function(){

  let generate_tab = (col, row) => {
    let height = (parseInt($('.droppable').height(), 10) / col) - 5;
    let width = (parseInt($('.droppable').width(), 10) / row) - 5;
    let num = 0;

    $('.droppable').children().remove();


    for (let i = 0; i < col; i++)
    {
      for (let j = 0; j < row; j++)
      {
        $('.droppable').append("<div class='col div-" +  num + "'></div>");
        $('.div-' + num).css({
          'height': height + 'px',
          'width': width + 'px',
          'border': '1px solid black',
          'display': 'inline-block'
        });
        num++;
      }
    }
    return (num);
  }

  $('input[type=submit]').click((e) => {
    e.preventDefault();
    let col = parseInt($('input[name=column]').val(), 10);
    let row = parseInt($('input[name=row]').val(), 10);

    let nbr_generate = generate_tab(col, row);
    bind
  });

})();
