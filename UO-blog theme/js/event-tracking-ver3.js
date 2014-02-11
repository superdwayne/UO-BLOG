<!---- Cross Domain Tracking ---->

/*
    xdomain.js : Automatically tracks a visitor across domains in Google Analytics, automatically tracks their downloads, and clicks on outbound links.
	
    Copyright (C) 2012  LunaMetrics

    This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the  GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

(function($) {

function listenToClicks()
{
	var domains=["urbanoutfitters.com", "urbanoutfitters.co.uk", "urbanoutfitters.fr", "urbanoutfitters.de"];
	var fileTypes=[".doc", ".xls", ".exe", ".zip", ".bmp", ".jpg", ".pdf", ".mov", ".mp3"];

	$('a[href]').each(function(index) {
 		var link = $(this);
		var href = link.attr('href');

		$.each(fileTypes, function(i) {
			if($(link).attr('href').indexOf(this)!=-1){
				valid = false;
				$(link).bind('click', function(c) {
					c.preventDefault();
	                _gat._getTrackerByName()._trackEvent('Download', 'Click - ' + $(link).attr('href'));
                        _gat._getTrackerByName(t2)._trackEvent('Download', 'Click - ' + $(link).attr('href'));
	                setTimeout('document.location = "' + $(link).attr('href') + '"', 100);
	            });
			}
		});

		var valid = false;
		$.each(domains, function(j) {
				if(($(link).attr('href').indexOf(this)!=-1)&&(window.location.href.indexOf(this)==-1)){	
					valid = true;

					if (valid)
					{
						$(link).bind('click', function(l) {
							if(typeof(_gat)=="object"){
								l.preventDefault();
								if ($(link).attr('target') != "_blank")
								{
									_gaq.push(['_link',$(link).attr('href')]);
								}
						 		else
						 		{
				 					var tracker = _gat._getTrackerByName();
									var fullUrl = tracker._getLinkerUrl($(link).attr('href'));
									window.open(fullUrl);
						 		}
							}
						});
					}
				}			
		});

		var rootDomain = document.domain.split(".")[document.domain.split(".").length - 2] + "." + document.domain.split(".")[document.domain.split(".").length - 1];

		if ( (href.match(/^http/)) && (href.indexOf(rootDomain) == -1) && !valid) {
			$(link).bind('click', function(d) {
					d.preventDefault();
			      	_gat._getTrackerByName()._trackEvent('outbound', 'click', href);
                                _gat._getTrackerByName('t2')._trackEvent('outbound', 'click', href);
			    	setTimeout('document.location = "' + href + '"', 100);
			    });			   
		}
	});

}

$(document).ready(function() {
	listenToClicks();
});

})(jQuery);


// gaAddons FREE v1.0, Copyright 2011, Stephane Hamel - http://gaAddons.com
// Licensed under a Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License
// gaAddons FREE v1.0, Copyright 2011, Stéphane Hamel - http://gaAddons.com
// gaAddons by Stéphane Hamel is licensed under a Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License.
// This code is provided as is, without guarantee or support.


<!---- Mailto Clicks ---->

jQuery(document).ready(function($) {
    $('a[href^="mailto"]').live('click', function(e) {
        _gaq.push(['_trackEvent', 'email', 'send', this.href.replace(/^mailto:/i, '')]);
	_gaq.push(['t2._trackEvent', 'email', 'send', this.href.replace(/^mailto:/i, '')]);
    });
});

<!---- Page Not Found ---->


if (document.title.search(/page not found/i) !== -1) {
    _gaq.push(['_trackPageview', '/vpv/pnf404/' + location.host + location.pathname + location.search + '?from=' + document.referrer]);
    _gaq.push(['t2._trackPageview', '/vpv/pnf404/' + location.host + location.pathname + location.search + '?from=' + document.referrer]);
}


<!---- Error Pages ---->


if (document.title.search(/Error404/i) !== -1) {
    _gaq.push(['_trackPageview', '/vpv/error404/' + location.host + location.pathname + location.search + '?from=' + document.referrer]);
    _gaq.push(['t2._trackPageview', '/vpv/error404/' + location.host + location.pathname + location.search + '?from=' + document.referrer]);
}

