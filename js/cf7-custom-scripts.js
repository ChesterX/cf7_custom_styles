jQuery(document).ready(function($) {
    $('form.wpcf7-form').on('submit', function(event) {
        let $form = $(this);
        if (!$form.find('.cfs_custom_form').length) {
            return;
        }
        $form.find('.wpcf7-response-output').insertBefore($form.find('[type="submit"]'));
    });

    let $form = $('.cfs_custom_form').parents('form.wpcf7-form');
    if($form.find('.wpcf7-response-output').length){
        console.log('test');
        $form.find('.wpcf7-response-output').insertBefore($form.find('[type="submit"]'));
    }
});