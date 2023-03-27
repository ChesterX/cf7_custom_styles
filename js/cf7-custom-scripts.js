jQuery(document).ready(function($) {
    $(document).on('wpcf7mailsent', function(event) {
        var $form = $(event.target);
        if (!$form.find('.cfs_custom_form').length) {
            return;
        }
        $form.find('.wpcf7-response-output').insertBefore($form.find('[type="submit"]'));
    });
});