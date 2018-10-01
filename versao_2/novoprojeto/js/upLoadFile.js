var $form           = null,
    $area           = null,
    $input          = null,
    $progresso      = null,
    droppedFiles    = false;


/*-------------------------------------------------------------upLoad automatico Foto*/
function upload() {

    $area.addClass('uploading');

    $('.sweet-alert .confirm').hide();
    $('.sweet-alert .cancel').show();

    $form.ajaxForm({
        beforeSend: function (data) {
            ajax = data;
        },
        uploadProgress:
            function (event, position, total, percentComplete) {
                $progresso.css({'width': Number(percentComplete) + '%'});
            },
        success:
            function (resp) {
                if(resp.sucesso){
                    retorno_acao()
                }else{

                }
                swal.close();
            }
    }).submit();

}

function init_area_upload(){

    var isAdvancedUpload = function()
    {
        var div = document.createElement( 'div' );
        return ( ( 'draggable' in div ) || ( 'ondragstart' in div && 'ondrop' in div ) ) && 'FormData' in window && 'FileReader' in window;
    }();

    // applying the effect for every form

    $( '.area-upload' ).each( function() {
        $form           = $('.form-update');
        $area           = $(this);
        $input          = $('#file');
        $progresso      = $('.progresso-upload');
        droppedFiles    = false;

        // automatically submit the form on file select
        $input.on('change', function (e) { upload(); });

        // drag&drop files if the feature is available
        if (isAdvancedUpload) {
            $form
                .addClass('has-advanced-upload') // letting the CSS part to know drag&drop is supported by the browser
                .on('drag dragstart dragend dragover dragenter dragleave drop', function (e) {
                    // preventing the unwanted behaviours
                    e.preventDefault();
                    e.stopPropagation();
                })
                .on('dragover dragenter', function () //
                {
                    $area.addClass('is-dragover');
                    $input.focus();
                })
                .on('dragleave dragend drop', function () {
                    $area.removeClass('is-dragover');
                })
                .on('drop', function (e) {
                    $input[0].files =  e.originalEvent.dataTransfer.files  ;
                });
        }

    });


}