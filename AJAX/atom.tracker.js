function build(){
    $('#log').load('log.php?mode=build');
    // tally();
}
function tally(){
    $('#tally').load('log.php?mode=build');
}
$(document).ready(function(){
    build();

    setInterval(() => {
       build();
    }, 30000);

    // New task
    $('#search_section').submit(function (event) {
        event.preventDefault();

        const form = $(this);
        const data = form.serialize();
        
        $.ajax({
            url: 'log.php?mode=new',
            data: data,
            success: function(){
                build();
            }
        });

        
    });


    $('#tally').load('log.php?mode=tally');

    
    // #stop task
    $('#log').on('click', '.stop_btn', function () {
        let id = $(this).data('id');
        $.ajax({
            url: 'log.php?mode=stop&id='+id,
            success: function () {
                build();
            }
        });
    });

    // #remove task
    $('#log').on('click', '.cancle_btn', function () {
        let id = $(this).data('id');
        $.ajax({
            url: 'log.php?mode=remove&id='+id,
            success: function () {
                build();
            }
        });
    });


});