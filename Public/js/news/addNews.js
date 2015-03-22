$(document).ready(function(){

	var cpath= $("#cpath").val();
	KindEditor.ready(function(K) {
		   var options = {
				   items : [ 'undo', 'redo', '|', 'preview', 'print', 'template', 'cut', 'copy', 'paste',
					 	        'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
						        'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
						        'superscript', 'quickformat', 'selectall', '|', 'fullscreen', '/',
						        'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
						        'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage',
						        'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'pagebreak',
						        'anchor', 'link', 'unlink']
			};
		editor = K.create('textarea[name="content"]',options);
		editor1 = K.create('textarea[name="content_en"]',options);

		});
});


function transLan()
{
	var dialog = art.dialog({id: 'N3690',title:"正在翻译",esc:false, lock: true,}).show();
	editor.sync();
	var cpath = $("#cpath").val();
	$("#am-from input").each(function(){
		var name = $(this).attr("name");
		if(name=='title' || name=="keyword")
		{
			var content = $("input[name='"+name+"']").val();
			$.getJSON(cpath+"/index.php/lan_auto?ttid="+Math.random(),{content:content},function(data){
				var dist = data.dist;
				$("input[name='"+name+"_en']").val(dist);
			});

		}

	});
	var content = editor.text();
	$.getJSON(cpath+"/index.php/lan_auto?ttid="+Math.random(),{content:content},function(data){
		var dist = data.dist;
		editor1.text(dist);
		dialog.close();
	});

}
