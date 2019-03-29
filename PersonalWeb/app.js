var link = document.getElementById("back-to-top");
var amountScrolled = 250;

function addClass(el, className) {

  if (el.classList) {
      el.classList.add(className);
  } else {
      el.className += ' ' + className;
  }

}

function removeClass(el, className) {
  if (el.classList)
    el.classList.remove(className);
  else
    el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
}

window.addEventListener('scroll', function(e) {
   if ( window.scrollY > amountScrolled ) {
       addClass(link, 'show');
   } else {
       removeClass(link, 'show');
   }
});
var select = $("nav ul li a:first")
var back_top = $(".back-to-top i")
var resume= $(".resume")
var box_one=$(".box-one")
console.log($("nav ul li:first"))

// instantiate the scrollama
const scroller = scrollama();

// setup the instance, pass callback functions
scroller
  .setup({
    step: '.box-one'
  })
  .onStepEnter(response => {
    {'.box-one', 0,  'up' }
    back_top.addClass("off")
  select.addClass("resume")
  })
  .onStepExit(response => {
    { '.box-one', 0,  'up' }
    back_top.removeClass("off")
    select.removeClass("resume")
  });

// setup resize event
window.addEventListener('resize', scroller.resize);





$(".btn-ind-img-left").hover(function ()
{
$(".first-box img").attr("src", "img/night-code.png");
})
