$(function() {
    var alreadyFilled = false;
    var states = ['Paracetamol','Omeprazole','Insulin Regular','Folic Acid','Aspirin','IncobotulinumtoxinA','Hydrochlorothiazide and bisoprolol','Amoxicillin','Baclofen','Benicar','Bisoprolol','Eliquis','Effexor'];

    function initDialog() {
        clearDialog();
        for (var i = 0; i < states.length; i++) {
            $('.dialog').append('<div>' + states[i] + '</div>');
        }
    }
    function clearDialog() {
        $('.dialog').empty();
    }
    $('.autocomplete input').click(function() {
        if (!alreadyFilled) {
            $('.dialog').addClass('open');
        }

    });
    $('body').on('click', '.dialog > div', function() {
        $('.autocomplete input').val($(this).text()).focus();
        $('.autocomplete .close').addClass('visible');
        alreadyFilled = true;
    });
    $('.autocomplete .close').click(function() {
        alreadyFilled = false;
        $('.dialog').addClass('open');
        $('.autocomplete input').val('').focus();
        $(this).removeClass('visible');
    });

    function match(str) {
        str = str.toLowerCase();
        clearDialog();
        for (var i = 0; i < states.length; i++) {
            if (states[i].toLowerCase().startsWith(str)) {
                $('.dialog').append('<div>' + states[i] + '</div>');
            }
        }
    }
    $('.autocomplete input').on('input', function() {
        $('.dialog').addClass('open');
        alreadyFilled = false;
        match($(this).val());
    });
    $('body').click(function(e) {
        if (!$(e.target).is("input, .close")) {
            $('.dialog').removeClass('open');
        }
    });
    initDialog();
});


$(function() {
    var alreadyFilled = false;
    var state = ['Square','Incepta Pharma','Beximco','Renata','Acme','A.C.I','Ibn Sina','Sun Pharma','Globe','Bio Pharma','delta Pharma','Libra','Ziska'];

    function initDialog() {
        clearDialog();
        for (var i = 0; i < state.length; i++) {
            $('.d').append('<div>' + state[i] + '</div>');
        }
    }
    function clearDialog() {
        $('.d').empty();
    }
    $('.auto input').click(function() {
        if (!alreadyFilled) {
            $('.d').addClass('open');
        }

    });
    $('body').on('click', '.d > div', function() {
        $('.auto input').val($(this).text()).focus();
        $('.auto .close').addClass('visible');
        alreadyFilled = true;
    });
    $('.auto .close').click(function() {
        alreadyFilled = false;
        $('.d').addClass('open');
        $('.auto input').val('').focus();
        $(this).removeClass('visible');
    });

    function match(str) {
        str = str.toLowerCase();
        clearDialog();
        for (var i = 0; i < state.length; i++) {
            if (state[i].toLowerCase().startsWith(str)) {
                $('.d').append('<div>' + state[i] + '</div>');
            }
        }
    }
    $('.auto input').on('input', function() {
        $('.d').addClass('open');
        alreadyFilled = false;
        match($(this).val());
    });
    $('body').click(function(e) {
        if (!$(e.target).is("input, .close")) {
            $('.d').removeClass('open');
        }
    });
    initDialog();
});
