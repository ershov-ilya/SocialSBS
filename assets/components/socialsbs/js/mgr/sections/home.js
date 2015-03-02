SocialSBS.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'socialsbs-panel-home', renderTo: 'socialsbs-panel-home-div'
		}]
	});
	SocialSBS.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(SocialSBS.page.Home, MODx.Component);
Ext.reg('socialsbs-page-home', SocialSBS.page.Home);