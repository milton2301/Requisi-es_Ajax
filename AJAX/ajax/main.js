
    $('#form').submit(function(){

        let name = $('#name').val()
        let idade = $('#idade').val()

        $.ajax({
            url : 'resultado.php',
            method: 'POST',
            data: {name: name, idade: idade},
            dataType: 'json'
        }).done(function(res){
            console.log(res)
        });
        return false
    });
