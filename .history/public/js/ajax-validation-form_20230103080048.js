$(function () {
    var $form = $("#form");
    if ($form.length) {
        $form.validate({
            rules: {
                fullname: {
                    required: true,
                }
            },
            messages: {
                fullname: "Không được để trống fullname";
            }
        })
    }
})