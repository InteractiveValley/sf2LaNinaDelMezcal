(function($) {

    $(function() {
        try {
            if (typeof _form == 'undefined' || _form === null)
                _form = {};

            _form = $.extend({cached: 0}, _form);

            $('div.form > form').ajaxForm({
                beforeSubmit: function(formData, jqForm, options) {
                    jqForm.formClearResponseOutput();
                    jqForm.find('img.ajax-loader').css({visibility: 'visible'});
                    return true;
                },
                beforeSerialize: function(jqForm, options) {
                    jqForm.find('[placeholder].placeheld').each(function(i, n) {
                        $(n).val('');
                    });
                    return true;
                },
                data: {'_form_is_ajax_call': 1},
                dataType: 'json',
                type: 'post',
                success: function(data) {
            
                    if (!$.isPlainObject(data) || $.isEmptyObject(data))
                        return;

                    var ro = $(data.into).find('div.form-response-output');
                    $(data.into).formClearResponseOutput();

                    $(data.into).find('.form-contacto-control').removeClass('form-not-valid');
                    $(data.into).find('form.form-contacto').removeClass('invalid spam sent failed');

                    if (data.captcha)
                        $(data.into).formRefillCaptcha(data.captcha);

                    if (data.quiz)
                        $(data.into).formRefillQuiz(data.quiz);

                    if (data.invalids) {
                        $.each(data.invalids, function(i, n) {
                            $(data.into).find(n.into).formNotValidTip(n.message);
                            $(data.into).find(n.into).find('.form-contacto-control').addClass('form-not-valid');
                        });

                        ro.addClass('form-validation-errors');
                        $(data.into).find('form.form-contacto').addClass('invalid');

                        $(data.into).trigger('invalid.form');

                    } else if (1 == data.spam) {
                        ro.addClass('form-spam-blocked');
                        $(data.into).find('form.form-contacto').addClass('spam');

                        $(data.into).trigger('spam.form');

                    } else if (1 == data.mailSent) {
                        ro.addClass('form-mail-sent-ok');
                        $(data.into).find('form.form-contacto').addClass('sent');

                        if (data.onSentOk)
                            $.each(data.onSentOk, function(i, n) {
                                eval(n)
                            });

                        $(data.into).trigger('mailsent.form');

                    } else {
                        ro.addClass('form-mail-sent-ng');
                        $(data.into).find('form.form-contacto').addClass('failed');

                        $(data.into).trigger('mailfailed.form');
                    }

                    if (data.onSubmit)
                        $.each(data.onSubmit, function(i, n) {
                            eval(n)
                        });

                    $(data.into).trigger('submit.form');

                    if (1 == data.mailSent)
                        $(data.into).find('form').resetForm().clearForm();

                    $(data.into).find('[placeholder].placeheld').each(function(i, n) {
                        $(n).val($(n).attr('placeholder'));
                    });

                    $(data.into).formFillResponseOutput(data.message);
                }
            });

            $('div.form > form').each(function(i, n) {
                if (_form.cached)
                    $(n).formOnloadRefill();

                $(n).formToggleSubmit();

                $(n).find('.form-submit').formAjaxLoader();

                $(n).find('.form-acceptance').click(function() {
                    $(n).formToggleSubmit();
                });

                $(n).find('.form-exclusive-checkbox').each(function(i, n) {
                    $(n).find('input:checkbox').click(function() {
                        $(n).find('input:checkbox').not(this).removeAttr('checked');
                    });
                });

                $(n).find('[placeholder]').each(function(i, n) {
                    var input = $(n);

                    if ('placeholder' in input.get(0))
                        return;

                    input.val(input.attr('placeholder'));
                    input.addClass('placeheld');

                    input.focus(function() {
                        if ($(this).hasClass('placeheld'))
                            $(this).val('').removeClass('placeheld');
                    });

                    input.blur(function() {
                        if ('' == $(this).val()) {
                            $(this).val($(this).attr('placeholder'));
                            $(this).addClass('placeheld');
                        }
                    });
                });
            });

        } catch (e) {
        }
    });

    $.fn.formAjaxLoader = function() {
        return this.each(function() {
            var loader = $('<img class="ajax-loader" />')
                    .attr({src: _form.loaderUrl, alt: _form.sending})
                    .css('visibility', 'hidden');

            $(this).after(loader);
        });
    };

    $.fn.formToggleSubmit = function() {
        return this.each(function() {
            var form = $(this);
            if (this.tagName.toLowerCase() != 'form')
                form = $(this).find('form').first();

            if (form.hasClass('form-acceptance-as-validation'))
                return;

            var submit = form.find('input:submit');
            if (!submit.length)
                return;

            var acceptances = form.find('input:checkbox.form-acceptance');
            if (!acceptances.length)
                return;

            submit.removeAttr('disabled');
            acceptances.each(function(i, n) {
                n = $(n);
                if (n.hasClass('form-invert') && n.is(':checked')
                        || !n.hasClass('form-invert') && !n.is(':checked'))
                    submit.attr('disabled', 'disabled');
            });
        });
    };

    $.fn.formNotValidTip = function(message) {
        return this.each(function() {
            var into = $(this);
            into.append('<span class="form-not-valid-tip">' + message + '</span>');
            $('span.form-not-valid-tip').mouseover(function() {
                $(this).fadeOut('fast');
            });
            into.find(':input').mouseover(function() {
                into.find('.form-not-valid-tip').not(':hidden').fadeOut('fast');
            });
            into.find(':input').focus(function() {
                into.find('.form-not-valid-tip').not(':hidden').fadeOut('fast');
            });
        });
    };

    $.fn.formOnloadRefill = function() {
        return this.each(function() {
            var url = $(this).attr('action');
            if (0 < url.indexOf('#'))
                url = url.substr(0, url.indexOf('#'));

            var id = $(this).find('input[name="_form"]').val();
            var unitTag = $(this).find('input[name="_form_unit_tag"]').val();

            $.getJSON(url,
                    {_form_is_ajax_call: 1, _form: id},
            function(data) {
                alert(data);
                if (data && data.captcha)
                    $('#' + unitTag).formRefillCaptcha(data.captcha);

                if (data && data.quiz)
                    $('#' + unitTag).formRefillQuiz(data.quiz);
            }
            );
        });
    };

    $.fn.formRefillCaptcha = function(captcha) {
        return this.each(function() {
            var form = $(this);

            $.each(captcha, function(i, n) {
                form.find(':input[name="' + i + '"]').clearFields();
                form.find('img.form-captcha-' + i).attr('src', n);
                var match = /([0-9]+)\.(png|gif|jpeg)$/.exec(n);
                form.find('input:hidden[name="_form_captcha_challenge_' + i + '"]').attr('value', match[1]);
            });
        });
    };

    $.fn.formRefillQuiz = function(quiz) {
        return this.each(function() {
            var form = $(this);

            $.each(quiz, function(i, n) {
                form.find(':input[name="' + i + '"]').clearFields();
                form.find(':input[name="' + i + '"]').siblings('span.form-quiz-label').text(n[0]);
                form.find('input:hidden[name="_form_quiz_answer_' + i + '"]').attr('value', n[1]);
            });
        });
    };

    $.fn.formClearResponseOutput = function() {
        return this.each(function() {
            $(this).find('div.form-response-output').hide().empty().removeClass('form-mail-sent-ok form-mail-sent-ng form-validation-errors form-spam-blocked');
            $(this).find('span.form-not-valid-tip').remove();
            $(this).find('img.ajax-loader').css({visibility: 'hidden'});
        });
    };

    $.fn.formFillResponseOutput = function(message) {
        return this.each(function() {
            $(this).find('div.form-response-output').append(message).slideDown('fast');
        });
    };

})(jQuery);