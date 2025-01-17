(function (window, undefined) {
  'use strict';

  $.detay = (id) => {

    $.post(site_url + "/personel_detay",{"id":id},function (cevap){

      if(cevap.durum == "basarili"){

          $("#personelGuncelleModel").modal("show");
        $("#personel_guncelle").html(cevap.cikti);
      }

    },'json');

  }
    $.firmaDetay = (id) => {

        $.post(site_url + "/firma_detay",{"id":id},function (cevap){

            if(cevap.durum == "basarili"){
                $("#firmaaGuncelleModal").modal("show");


                $("#firma_guncelle").html(cevap.cikti);
                $('.dropify').dropify();
            }

        },'json');

    }
    $.tema_detay=(id)=>{

        $.post(site_url + "/tema_detay",function (cevap){
                $("#personelListeleModel").modal("show");
                $("#tema_model23").html(cevap.cikti);
                $("#tema_id").val(id);
        },'json');

    }
    let personel_Id=0;
    $.tema_goster=(id)=>{

        var temaId= $("#tema_id").val();
        personel_Id=id;
        $.post(site_url + "/tema_goster",{"id":id,"tema_id":temaId},function (cevap){

            $("#temaPersonelModel").modal("show");
            $("#tema_personel_model").html(cevap.cikti);
            $("#firm_id").val(id);

        },'json');

    }


    $.mailgonder=(id)=> {
        let str = document.getElementById('tables').outerHTML;
        $.ajax({
            type: 'POST',
            url: site_url + "/mail_gonder",
            data: {icerik:str,personelId:personel_Id},

        });
    }
    tinymce.init({
        selector: '#myTextarea',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
            { title: 'My page 1', value: 'https://www.codexworld.com' },
            { title: 'My page 2', value: 'http://www.codexqa.com' }
        ],
        image_list: [
            { title: 'My page 1', value: 'https://www.codexworld.com' },
            { title: 'My page 2', value: 'http://www.codexqa.com' }
        ],
        image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
                callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }

            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
                callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }

            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
                callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
        },
        templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });
})(window);
