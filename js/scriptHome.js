function isElementInViewport(elem) {
  var $elem = $(elem);
  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();
  var elemTop = Math.round($elem.offset().top);
  var elemBottom = elemTop + $elem.height();
  return elemTop < viewportBottom && elemBottom > viewportTop;
}

function scrollToElement(element) {
  const rect = element.offset();
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const y = rect.top;
  console.log(
    "Position y = " + y + ", Position section = " + element.offset().top
  );
  printPosition();
  setTimeout(function () {
    window.scrollTo({ top: y, behavior: "smooth" });
  }, 300);
}

function printPosition() {
  console.log("Section 1A= " + $("#section1A").offset().top);
  console.log("Section 1B = " + $("#section1B").offset().top);
  console.log("Section 2 = " + $(".section2").offset().top);
  console.log("Section 3 = " + $(".section3").offset().top);
}

function checkAnimation(name) {
  var $elem = $(name);
  if (isElementInViewport($elem)) {
    if (!$elem.hasClass("start")) {
      $elem.addClass("start");
      setTimeout(function () {
        scrollToElement($elem);
      }, 300);

      console.log("start " + name);
    }
  } else {
    if ($elem.hasClass("start")) {
      $elem.removeClass("start");
      console.log("end " + name);
    }
  }
}

$(window).scroll(function () {
  checkAnimation("#section1A");
  checkAnimation("#section1B");
  checkAnimation(".section2");
  checkAnimation(".section3");
});

checkAnimation("#section1A");
checkAnimation("#section1B");
checkAnimation(".section2");
checkAnimation(".section3");


function gotoSection1B() {
  var $elem = $("#section1B");
  $("html, body").animate(
    {
      scrollTop: $elem.offset().top,
    },
    500
  );
}


