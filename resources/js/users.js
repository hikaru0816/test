$(function(){
    $('#file_photo').change(function(e){
        if (e.target.files.length) {
            let file = e.target.files[0];
            let reader = new FileReader();
            reader.onload = function() {
                let data = this.result;
                $('#userImgPreview').addClass('is-active');
                $('#thumbnail').attr('src', data);
            }
            return reader.readAsDataURL(file);
        }
    });
});
