$(function()
{
    $('#formChat').on('submit', function()
    {
        var type = $('#formChat').attr('type');

        if(type == 'name')
        {
            var name = $('#name').val();

            if(name.length > 0)
            {
                $.ajax(
                {
                    type: 'POST',
                    url: 'php/sesion.php',
                    success: function(data)
                    {
                        $('#formChat table tr').html('<td width="90%"><input type="text" placeholder="Escribe un mensaje..." id="message" autocomplete="off"></td><td><input type="submit" value="Enviar" id="submit"></td>');
                        $('#submit').attr('userName', name);
                        $('#submit').attr('sesionName', data);
                        $('#formChat').attr('type', 'chat');
                        $('#userName').html(name);
                        $('#name').val('');
                        $('#message').focus();
                    }
                });
            }
            else
            {
                alert('Completa tu nombre, gracias. =)');
                $('#name').focus();
            }
            return false;
        }
        else if(type == 'chat')
        {
            var message = $('#message').val();
            var name = $('#submit').attr('userName');

            if(message.length > 0)
            {
                $.ajax(
                {
                    type: 'POST',
                    url: 'php/send.php',
                    data: 'name=' + name + '&message=' + message,
                    dataType: 'html',
                    success: function(data)
                    {
                        send(data);
                        $('#message').val('').focus();
                    }
                });
            }
            else
            {
                alert('Completa tu mensaje, gracias. =)');
                $('#name').focus();
            }
            return false;
        }
    });
});