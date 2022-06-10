$(function () {
  alert('hello world')
});

// $(function () {
//   $('.menu-arrow').on("click", function () {
//     $(".drop-menu").slideToggle();
//     if ($(".drop-menu").slideToggle()) {
//       $(".arrow").addClass('active');
//     } else {
//       $(this).removeClass('active');
//     }
//   });
// });


// $(function () {
//   $(".arrow").click(function () {
//     $(".drop-menu").slideToggle();
//   });
// });

// $(function () {
//   $('.menu-arrow').click(function () {
//     $(".arrow").css({ "transform": "rotate(270deg)", "height": "50px" });
//     $(".drop-menu").slideToggle();
//   });
// });


// $(function () {
//   $('.menu-arrow').click(function () {
//     // $(".arrow").css({ "transform": "rotate(270deg)", "height": "50px" });
//     $(".drop-menu").slideToggle();
//   });
// });

$(function () {
  $('.arrow').click(function () {
    $(".arrow").addClass("upper");
    $(".drop-menu").slideToggle();
  });
});
