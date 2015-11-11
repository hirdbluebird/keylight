/* Simple JavaScript Client Specific Functionality
* By Icavia http://icavia.com/
* MIT Licensed.
*/
(function($){
    /*defaults*/    
    $.fixClient = {        
        defaultOptions: {
            cls: "client-fix",
            filter: $.noop,
            os: null,
            browser: null,
            version: null,
            autoFix: true,
	    onMatch: null
        }    
    };

     /*create plugin*/
    $.fn.fixClient = function(options){
        /*create new */
        return $(this).each(function() {
            var detector;
            if($.isPlainObject(options)){                
                detector = new ClientDetector(this, options);
            }else{   /*call method on existing */
		console.log("detect")
                detector = $(this).data("ClientDetector") || new ClientDetector(this, {autoFix: false});
                if(detector[options]){                
                    var args = Array.prototype.slice.call(arguments, 1);
                    return detector[options].apply(this, args);   
                }
            }
            return $(this);                
        });
    };
    
    /*object to detect client and add class*/
    var ClientDetector = function(el, options){
        var _options = {}
        var _isMatch;        
        var $el;
	
        var _init = function(){
            $el = $(el);
	    $.extend(_options, $.fixClient.defaultOptions, options);	    
            /* check */
            if(_options.autoFix){                
                _fix(); 
            }
            /*set object in data*/
            $el.data("ClientDetector", _getInstance());
	    /* bind onmatch */
	    if(_options.onMatch){
		$el.bind("clientMatch", _options.onMatch);
	    }
        };
        
        var _fix = function(){	    
            _isMatch = _options.filter.apply(el) !== false &&
                     _checkBrowser(_options.browser) &&
                     _checkOS(_options.os) &&
                     _checkVersion(_options.version);           
            if(_isMatch){		
		if($el.trigger("clientMatch", _getInstance()) !== false){		    
		    $el.addClass(_options.cls);
		}
            }else{
                $el.removeClass(_options.cls);
            }  
        };           
        
        var _checkBrowser = function(browser){
            if(!browser){ return true; }
            if(!$.isArray(browser)){
                browser = [browser];
            }
            var valid = $.grep(browser, function(brw, i){
                return RegExp(brw, "gi").test($.client.browser);               
            }).length > 0;	    
            return valid;
        };
        
        var _checkVersion = function(ver){            
            if(!ver){ return true; }
            if(!$.isArray(ver)){
                ver = [ver];
            }            
            return $.inArray($.client.version, ver.toString());
        };
        
        var _checkOS = function(os){
            if(!os){ return true; }
            if(!$.isArray(os)){
                os = [os];                
            }
            return $.grep(os, function(testOS, i){		
                return RegExp(testOS, "gi").test($.client.os);               
            }).length > 0;             
        };
        
        var _getInstance = function(){
            return {
                options: _options,
                fix: _fix,
                checkOS: _checkOS,
                checkBrowser: _checkBrowser,
		checkVersion: _checkVersion
            }
        };
        
        $(_init);
        return _getInstance();
    };
    /* Detect Browser and OS */
    var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)return data[i].identity;
			}
			else if (dataProp){
			    return data[i].identity;
			}
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [{
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "Chrome"
            },{
                string: navigator.userAgent,
                subString: "OmniWeb",
                versionSearch: "OmniWeb/",
                identity: "OmniWeb"
            },{
                string: navigator.vendor,
                subString: "Apple",
                identity: "Safari",
                versionSearch: "Version"
            },{
                prop: window.opera,
                identity: "Opera"
            },{
                string: navigator.vendor,
                subString: "iCab",
                identity: "iCab"
            },{
                string: navigator.vendor,
                subString: "KDE",
                identity: "Konqueror"
            },{
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "Firefox"
            },{
                string: navigator.vendor,
                subString: "Camino",
                identity: "Camino"
            },{
                string: navigator.userAgent,
                subString: "Netscape",
                identity: "Netscape"
            },{
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "MSIE",
                versionSearch: "MSIE"
            },{
                string: navigator.userAgent,
                subString: "Gecko",
                identity: "Mozilla",
                versionSearch: "rv"
            },{
                string: navigator.userAgent,
                subString: "Mozilla",
                identity: "Netscape",
                versionSearch: "Mozilla"
            }
	],
	dataOS : [{
                string: navigator.platform,
                subString: "Win",
                identity: "Windows"
            },{
                string: navigator.platform,
                subString: "Mac",
                identity: "Mac"
            },{
                string: navigator.userAgent,
                subString: "iPhone",
                identity: "iPhone/iPod"
            },{
                string: navigator.platform,
                subString: "Linux",
                identity: "Linux"
            }
	]

    };
    BrowserDetect.init();    
    $.client = $.extend(true, $.client || {}, {
        os: BrowserDetect.OS,
        browser: BrowserDetect.browser,
        version: BrowserDetect.version
    });
})(jQuery);