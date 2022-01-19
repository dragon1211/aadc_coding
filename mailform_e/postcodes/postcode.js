<!--
	// 郵便番号から住所を求めるjs
	//以下がフォームのHTMLから見たCGIまでのパス
	var getpostcode_cgi = location.protocol + "<this_url>";
	var postcode_form_Id = "";
	var postcode_ELM = "";
	var feedback_address = "";
	function postcode_getQuery(){
		if ((httpObj.readyState == 4) && (httpObj.status == 200)) {
			var obj = document.forms[postcode_form_Id];
			var getAddress = decodeURI(httpObj.responseText);
			var getAddressGroup = new Array();
			getAddressGroup = getAddress.split(",");
			if(getAddressGroup.length == 3){
				obj.elements[feedback_address].value = getAddressGroup[0] + getAddressGroup[1] + getAddressGroup[2];
			}
		}
	}
	function mfpc(formId,postcodeELM,fb_address){
		var obj = document.forms[formId];
		postcode_form_Id = formId;
		postcode_ELM = postcodeELM;
		feedback_address = fb_address;
		var single_char = new Array('0','1','2','3','4','5','6','7','8','9','-');
		var double_char = new Array('０','１','２','３','４','５','６','７','８','９','－');
		var border = new Array("-", "－", "ー", "―", "ｰ", "‐");
		for(i=0;i<single_char.length;i++){
			var temp = new Array();
			temp = obj.elements[postcodeELM].value.split(double_char[i]);
			obj.elements[postcodeELM].value = temp.join(single_char[i]);
		}
		for(var i = 0; i < border.length; i++){
			obj.elements[postcodeELM].value = obj.elements[postcodeELM].value.replace(border[i], "");
		}
		var query = obj.elements[postcodeELM].value;
		httpObj = createXMLHttpRequest();
		httpObj.onreadystatechange = postcode_getQuery;
		httpObj.open("GET",getpostcode_cgi+encodeURI(query),true);
		httpObj.send(null);
		return false;
	}
	function createXMLHttp() {
		try {
			return new ActiveXObject ("Microsoft.XMLHTTP");
		}catch(e){
			try {
				return new XMLHttpRequest();
			}catch(e) {
				return null;
			}
		}
		return null;
	}
	function createXMLHttpRequest(){
		var XMLhttpObject = null;
		try{
			XMLhttpObject = new XMLHttpRequest();
		}
		catch(e){
			try{
				XMLhttpObject = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e){
				try{
					XMLhttpObject = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e){
					return null;
				}
			}
		}
		return XMLhttpObject;
	}
//-->