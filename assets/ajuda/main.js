function migracao(link,fields){

    $.post(link,fields,function(data){

        if( data.success == 'error' ){
            swal("ERRO!", data.mensagem, "error");
            $('form')[0].reset();
            return;
        }else

        if(data.success == 'true'){
        
            swal({
                title: data.title,
                text: data.mensagem,
                type: "success",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Continuar",
                closeOnConfirm: true
            },
            function(){
                $('form')[0].reset();
                if(data.redirect){
                    window.location.href = data.redirect;
                }
                
            });
        }
        if(data.success == 'email'){
            swal({
                title: "Seu email já existe.",
                text: "Você será direcionado para a tela de login",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ok!",
                closeOnConfirm: true
            },
            function(){
                window.location.href = data.redirect;
            });
        }

    },'json')
    .fail(function(data){

      swal("Erro no sistema", "Volte mais tarde", "error");

      console.log(data.responseText);
    });
  }