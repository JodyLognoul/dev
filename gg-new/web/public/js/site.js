$(function(){
	Party.init({
		tpl: $("#template-list").html(),
		container: $('.container')
	});

	Party.displayAll();

});

var Party = {
	init: function(params){
		this.tpl = params.tpl;
		this.container = params.container;
	},
	displayAll: function(){
		var self = this;
		var template = Handlebars.compile( this.tpl );
		this.fetchAll().done(function (result) {
			console.log(result);
			self.container.append( template( result ) );
		});
	},
	fetchAll: function() {
		return $.getJSON('http://dev.local/gg-new/web/app_dev.php/party/');
	}
};