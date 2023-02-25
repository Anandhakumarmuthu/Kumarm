    function call(){
        var id = $('#id').val();
        var price = $('#price').val();
        var name = $('#name').val();
        var Trans = $('#Trans').val();
        var ref = $('#ref').val();
        var serial = $('#serial').val();
        var number = $('#number').val();
        var Details = $('#Details').val();
        var date = $('#date').val();
        var det = $('#det').val();
        var Duration = $('#Duration').val();
        var dnum = $('#dnum').val();
        var status = $('#status').val();
        $.ajax({
            type: 'POST',
            url: 'array.php',
            data:{
                    call:'call',
                    id:id,
                    price:price,
                    name:name,
                    Trans:Trans,
                    ref:ref,
                    serial:serial,
                    number:number,
                    Details:Details,
                    date:date,
                    det:det,
                    Duration:Duration,
                    dnum:dnum,
                    status:status
                },
            success : function(response) {
                    var text = $('#text');       
                    $(text).append(response);
                     
                    }    
    });
}
