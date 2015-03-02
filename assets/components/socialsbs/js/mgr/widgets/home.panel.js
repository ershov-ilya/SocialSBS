SocialSBS.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'socialsbs-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			html: '<h2>' + _('socialsbs') + '</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: true,
			hideMode: 'offsets',
			items: [{
				title: _('socialsbs_items'),
				layout: 'anchor',
				items: [{
					html: _('socialsbs_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'socialsbs-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	SocialSBS.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(SocialSBS.panel.Home, MODx.Panel);
Ext.reg('socialsbs-panel-home', SocialSBS.panel.Home);
