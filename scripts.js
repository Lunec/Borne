$(document).ready(function(){
    $('.filters-container').change(function(){
        var value = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'action': value};
        $.post(ajaxurl, data, function (response) {
            document.getElementById('table-slot').innerHTML = response;
        });
    });

    $('#search').keyup(function() {
        var nom = $(this).val();
        var ajaxurl = 'ajax.php',
        data =  {'search': nom};
        $.post(ajaxurl, data, function (response) {
            document.getElementById('search-display').innerHTML = response;
        });
    });

});
