// section accroche
(function($) {
    wp.customize("acc_text", function(value) {
        value.bind(function(newval) {
            $("#acc_text").html(newval);
        });
    });
})(jQuery);


// section head1
(function($) {
    wp.customize("head1_text", function(value) {
        value.bind(function(newval) {
            $("#head1_text").html(newval);
        });
    });
})(jQuery);


// section head2
(function($) {
    wp.customize("head2_text", function(value) {
        value.bind(function(newval) {
            $("#head2_text").html(newval);
        });
    });
})(jQuery);


//section head3
(function($) {
    wp.customize("head3_text", function(value) {
        value.bind(function(newval) {
            $("#head3_text").html(newval);
        });
    });
})(jQuery);


//section recommandations
(function($) {
    wp.customize("reco_text", function(value) {
        value.bind(function(newval) {
            $("#reco_text").html(newval);
        });
    });
})(jQuery);


//section footer
(function($) {
    wp.customize("footer_text", function(value) {
        value.bind(function(newval) {
            $("#footer_text").html(newval);
        });
    });
})(jQuery);