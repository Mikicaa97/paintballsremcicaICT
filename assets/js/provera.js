$(document).ready(function(){
    $(document).on('click', '#btnKlik', function(){
        let opis = $('#taOpis');
        let naziv = $('#tbNaziv');

        let reOpis = /^[A-Z]{1}(\s[A-Za-z\d\.\-\s\,])+$/;
        let reNaziv = /^[A-Z]|[1,5]{1,9}(\s[A-Za-z\d\.\-\s])+$/;

        let brojGresaka = 0;
        if(!reOpis.test($(opis).val())){
            brojGresaka++;

            $(opis).addClass('error');
        }
        else{
            $(opis).removeClass('error');
        }
        if(!reNaziv.test($(naziv).val())){
            brojGresaka++;
            $(naziv).addClass('error');
        }
        else{
            $(naziv).removeClass('error');
        }
    })
})