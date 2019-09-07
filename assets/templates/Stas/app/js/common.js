$(function(){ 
     var navMain = $(".navbar-collapse"); 
     navMain.on("click", "a:not([data-toggle])", null, function () {
         navMain.collapse('hide');
     });
$(".main-carousel").owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    navText: ["<img src='../assets/templates/Stas/app/img/left.png'>","<img src='../assets/templates/Stas/app/img/right.png'>"],
    items:1,
    autoplay:true,
    autoplayTimeout:5000,
    loop:true,
    margin:0,
    autoplayHoverPause:false,
    smartSpeed:2000
});

var $button = $("<div id='source-button' class='btn btn-success btn-md' title='Show source'> ≡≡ </div>").click(function(){
    var html = $(this).parent().html();
    html = cleanSource(html);
    $("#source-modal pre").text(html);
    $("#source-modal").modal();
});

  $('.bs-component [data-toggle="popover"]').popover();
  $('.bs-component [data-toggle="tooltip"]').tooltip();

  $(".bs-component").hover(function(){
    $(this).append($button);
    $button.show();
  }, function(){
    $button.hide();
  });
  function cleanSource(html) {
    var lines = html.split(/\n/);

    lines.shift();
    lines.splice(-1, 1);

    var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

    lines = lines.map(function(line){
      if (line.match(re)) {
        line = line.substring(indentSize);
      }

      return line;
    });

    lines = lines.join("\n");

    return lines;
  };
 });
$('#exampleModal3').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
