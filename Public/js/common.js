(function (config) {
    config['lock'] = true;
    config['fixed'] = true;
    config['drag'] = false;
    config['background'] = "#000000";
    config['opacity'] = "0.8";
    //config['okVal'] = 'Ok';
    //config['cancelVal'] = 'Cancel';
    // [more..]
})(art.dialog.defaults);


/**
 * 警告
 * @param	{String}	消息内容
 */
artDialog.alert = function (content, callback) {
    return artDialog({
        id: 'Alert',
        icon: 'warning',
        fixed: true,
        lock: true,
        content: content,
        ok: true,
        close: callback
    });
};


/**
 * 确认
 * @param	{String}	消息内容
 * @param	{Function}	确定按钮回调函数
 * @param	{Function}	取消按钮回调函数
 */
artDialog.confirm = function (content, yes, no) {
    return artDialog({
        id: 'Confirm',
        icon: 'question',
        fixed: true,
        lock: true,
        opacity: .1,
        content: content,
        ok: function (here) {
            return yes.call(this, here);
        },
        cancel: function (here) {
            return no && no.call(this, here);
        }
    });
};


/**
 * 提问
 * @param	{String}	提问内容
 * @param	{Function}	回调函数. 接收参数：输入值
 * @param	{String}	默认值
 */
artDialog.prompt = function (content, yes, value) {
    value = value || '';
    var input;

    return artDialog({
        id: 'Prompt',
        icon: 'question',
        fixed: true,
        lock: true,
        opacity: .1,
        content: [
            '<div style="margin-bottom:5px;font-size:12px">',
                content,
            '</div>',
            '<div>',
                '<input value="',
                    value,
                '" style="width:18em;padding:6px 4px" />',
            '</div>'
            ].join(''),
        init: function () {
            input = this.DOM.content.find('input')[0];
            input.select();
            input.focus();
        },
        ok: function (here) {
            return yes && yes.call(this, input.value, here);
        },
        cancel: true
    });
};


/**
 * 短暂提示
 * @param	{String}	提示内容
 * @param	{Number}	显示时间 (默认1.5秒)
 */
artDialog.tips = function (content, time) {
    return artDialog({
        id: 'Tips',
        title: false,
        cancel: false,
        fixed: true,
        lock: true
    })
    .content('<div style="padding: 0 1em;">' + content + '</div>')
    .time(time || 1);
};
/**
 * 根据URL参数名称获取参数值
 * @param paramName
 * @returns
 */
function getParam(paramName)
{
        paramValue = "";
        isFound = false;
        if (this.location.search.indexOf("?") == 0 && this.location.search.indexOf("=")>1)
        {
            arrSource = unescape(this.location.search).substring(1,this.location.search.length).split("&");
            i = 0;
            while (i < arrSource.length && !isFound)
            {
                if (arrSource[i].indexOf("=") > 0)
                {
                     if (arrSource[i].split("=")[0].toLowerCase()==paramName.toLowerCase())
                     {
                        paramValue = arrSource[i].split("=")[1];
                        isFound = true;
                     }
                }
                i++;
            }
        }
   return paramValue;
}
/**
 * 设置首页
 */
function homepage()
{
	 if(document.all){
		    document.body.style.behavior = 'url(#default#homepage)';
		    document.body.setHomePage(document.URL);
		}else{
			alert("设置首页失败，请手动设置！");
		}
}
/**
 * 添加收藏
 */
function favorite()
{
	var sURL=document.URL;
	var sTitle=document.title;
	try {
		window.external.addFavorite(sURL, sTitle);
	}catch(e){

		try{
			window.sidebar.addPanel(sTitle, sURL, "");
		}catch(e){
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	}

}
