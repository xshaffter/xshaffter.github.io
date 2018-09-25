	class CookieManager{
		constructor(cookieReader, cookieWriter) {
			this.cookieWriter = cookieWriter;
			this.cookieReader = cookieReader;
		}
		read(cname) {
			return this.cookieReader.read(cname);
		}
		write(cname, value) {
			this.cookieWriter.write();
		}
	}
	class CookieReader {
		constructor() {

		}
		read(cname) {
		    var name = cname + "=";
		    var decodedCookie = decodeURIComponent(unescape(document.cookie));
		    var ca = decodedCookie.split(';');
		    for(var i = 0; i <ca.length; i++) {
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
	}
	class CookieWriter {
		constructor() {

		}
		write(name, value) {
	    	document.cookie = (escape(name) + "=" + escape(value) +"; path=/");
		}
	}