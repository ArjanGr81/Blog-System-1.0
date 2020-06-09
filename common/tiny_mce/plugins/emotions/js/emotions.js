tinyMCEPopup.requireLangPack();

var EmotionsDialog = {
	init : function(ed) {
		tinyMCEPopup.resizeToInnerSize();
	},

	insert : function(file, title) {
		var ed = tinyMCEPopup.editor, dom = ed.dom;

		tinyMCEPopup.execCommand('mceInsertContent', false, file);
	}
};

tinyMCEPopup.onInit.add(EmotionsDialog.init, EmotionsDialog);
