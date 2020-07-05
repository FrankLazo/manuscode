var Server;

$(document).ready(function() {
	Server = new FancyWebSocket('ws://' + urlPort);
	Server.bind('open', function()
	{
	});
	Server.bind('close', function(data)
	{
	});
	Server.bind('message', function(payload)
	{
	});
	Server.connect();
});

function send(text)
{
	Server.send('message', text);	
}

var FancyWebSocket = function(url)
{
	var callbacks = {};
	var ws_url = url;
	var conn;

	this.bind = function(event_name, callback){
		callbacks[event_name] = callbacks[event_name] || [];
		callbacks[event_name].push(callback);
		return this;// chainable
	};

	this.send = function(event_name, event_data){
		this.conn.send( event_data );
		return this;
	};

	this.connect = function() {
		if ( typeof(MozWebSocket) == 'function' )
			this.conn = new MozWebSocket(url);
		else
			this.conn = new WebSocket(url);

		// dispatch to the right handlers
		this.conn.onmessage = function(evt){
			dispatch('message', evt.data);
		};

		this.conn.onclose = function(){dispatch('close',null)}
		this.conn.onopen = function(){dispatch('open',null)}
	};

	this.disconnect = function() {
		this.conn.close();
	};

	// var dispatch = function(event_name, message){
	// 	var chain = callbacks[event_name];
	// 	if(typeof chain == 'undefined') return; // no callbacks for this event
	// 	for(var i = 0; i < chain.length; i++){
	// 		chain[i]( message )
	// 	}
	// }

	var dispatch = function(event_name, message){
		if(message == null || message == ""){
			console.log('no envio');
		}else{
			var JSONdata = JSON.parse(message);
			var nameData = JSONdata[0].name;
			var messageData = JSONdata[0].message;
			var sesionData = JSONdata[0].sesion;
			var dateTime = JSONdata[0].dateTime;
			var sesionBody = $('#submit').attr('sesionName');
			if(sesionData == sesionBody){
				$('#containerMessages').append('<li class="meMessage"><label>Yo: </label>'+messageData+' '+dateTime+'</li>');
			}else{
				$('#containerMessages').append('<li class="yourMessage"><label>'+nameData+': </label>'+messageData+' '+dateTime+'</li>');
			}
			var height = $('body').prop('scrollHeight');
			$('body').scrollTop(height);
		}
	}
};