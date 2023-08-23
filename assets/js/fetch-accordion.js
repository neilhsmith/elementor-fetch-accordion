(function ($) {
  $(document).ready(function () {
    $(".efaq-question-row").click(function () {
      var $faq = $(this).parent(".efaq-faq");
      var $question = $faq.find(".efaq-question-row").eq(0);
      var $answer = $faq.find(".efaq-answer-row").eq(0);
      var $icon = $faq.find(".efaq-icon").eq(0);

      var duration = $faq.data("duration") || 200;

      if (typeof $faq.attr("data-active") === "undefined") {
        $faq.attr("data-active", "");
        $answer.css("display", "block");
        $answer.css("max-height", $answer.prop("scrollHeight") + 1);
        $question.attr("aria-expanded", "true");
        $icon.attr("class", "");
        $icon.attr("class", "efaq-icon fa-fw " + $faq.attr("data-opened-icon"));
      } else {
        $faq.removeAttr("data-active");
        $question.attr("aria-expanded", "false");
        $answer.css("max-height", 0);
        $icon.attr("class", "");
        $icon.attr("class", "efaq-icon fa-fw " + $faq.attr("data-closed-icon"));
        setTimeout(function () {
          $answer.css("display", "none");
        }, duration);
      }
    });
  });
})(jQuery);
