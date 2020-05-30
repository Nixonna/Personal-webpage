(function() {
	function toJSONString( form ) {
		var obj = {};
		var elements = form.querySelectorAll( "input, select, datalist" );
		for( var i = 0; i < elements.length; ++i ) {
			var element = elements[i];
			var name = element.name;
			var value = element.value;

			if( name ) {
				obj[ name ] = value;
			}
		}

		return JSON.stringify( obj );
	}

	document.addEventListener( "DOMContentLoaded", function() {
		var form = document.getElementById( "Detail_form" );
		var output = document.getElementById( "output" );
		form.addEventListener( "submit", function( e ) {
			var json = toJSONString( this );
            output.innerHTML = checkCookie();
			output.innerHTML = json;
		}, false);
        
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
            if (c.indexOf(name) == 0) {
                 return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie() {
            var username= document.getElementsByName("name").value;
            var user = getCookie(username);
            if (user != "") {
                document.getElementById("output").value=user;
                
        } else {
            user = document.getElementById("output").value;
            if (user != "" && user != null) {
                setCookie(username, user, 30);
                }
            }
        }

	});

})();






