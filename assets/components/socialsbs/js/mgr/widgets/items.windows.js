SocialSBS.window.CreateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'socialsbs-item-window-create';
	}
	Ext.applyIf(config, {
		title: _('socialsbs_item_create'),
		width: 550,
		autoHeight: true,
		url: SocialSBS.config.connector_url,
		action: 'mgr/item/create',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	SocialSBS.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(SocialSBS.window.CreateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'textfield',
			fieldLabel: _('socialsbs_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('socialsbs_item_description'),
			name: 'description',
			id: config.id + '-description',
			height: 150,
			anchor: '99%'
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('socialsbs_item_active'),
			name: 'active',
			id: config.id + '-active',
			checked: true,
		}];
	}

});
Ext.reg('socialsbs-item-window-create', SocialSBS.window.CreateItem);


SocialSBS.window.UpdateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'socialsbs-item-window-update';
	}
	Ext.applyIf(config, {
		title: _('socialsbs_item_update'),
		width: 550,
		autoHeight: true,
		url: SocialSBS.config.connector_url,
		action: 'mgr/item/update',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	SocialSBS.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(SocialSBS.window.UpdateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'hidden',
			name: 'id',
			id: config.id + '-id',
		}, {
			xtype: 'textfield',
			fieldLabel: _('socialsbs_item_name'),
			name: 'name',
			id: config.id + '-name',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('socialsbs_item_description'),
			name: 'description',
			id: config.id + '-description',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('socialsbs_item_active'),
			name: 'active',
			id: config.id + '-active',
		}];
	}

});
Ext.reg('socialsbs-item-window-update', SocialSBS.window.UpdateItem);