var SocialSBS = function (config) {
	config = config || {};
	SocialSBS.superclass.constructor.call(this, config);
};
Ext.extend(SocialSBS, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('socialsbs', SocialSBS);

SocialSBS = new SocialSBS();