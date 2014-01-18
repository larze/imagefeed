ccmValidateBlockForm = function() {
	if ($("#clientID").val() == '' || $("#clientID").val() == 0) { 
		ccm_addError(ccm_t('clientID'));
	}
/*	if($("#feedType").val() == 'h') {
		if($("#tag").val == '' || $("#tag").val == 0 ) {
			ccm_addError(ccm_t('tag'));
		}
	}
	if($("#feedType").val() == 'm') {
		if($("#accessToken").val == '' || $("#accessToken").val == 0) {
			ccm_addError(ccm_t('accessToken'));
		}	
		if($("#userID").val == '' || $("#userID").val == '') {
			ccm_addError(ccm_t('userID'));
		}
	} 
	if($("#feedType").val() == 'f') {
		if($("#accessToken").val == '' || $("#accessToken").val == 0) {
			ccm_addError(ccm_t('accessToken'));
		}	
		if($("#userID").val == '' || $("#userID").val == '') {
			ccm_addError(ccm_t('userID'));
		}
	}

	if($("#feedType").val() == 'nothing') {
		ccm_addError(ccm_t('nothing'));
	}
*/
if($("#feedType").val() == 'h') {
	if(!$("#tag").val()) {
		ccm_addError(ccm_t('tag'));
	}
}
if($("#feedType").val() == 'm') {
	if(!$("#accessToken").val()) {
		ccm_addError(ccm_t('accessToken'));
	}
	if(!$("#userID").val()) {
		ccm_addError(ccm_t('userID'));
	}
}
if($("#feedType").val() == 'f') {
	if(!$("#accessToken").val()) {
		ccm_addError(ccm_t('accessToken'));
	}
	if(!$("#userID").val()) {
		ccm_addError(ccm_t('userID'));
	}	
}
if ($("#imageAmount").val() == '' || $("#imageAmount").val() == 0) { 
	ccm_addError(ccm_t('imageAmount'));
}
if($("#feedType").val() == 'nothing') {
	ccm_addError(ccm_t('nothing'));
}
	return false;
}

if($("#feedType :selected").length == 0) {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").hide();
		$(".accessTokenIDLabel").hide();
		$("#userID").hide();
		$(".userIDLabel").hide();
}
	if($("#feedType").val() == "h") {
		$("#tag").show();
		$(".tagLabel").show();
		$("#accessToken").hide();
		$(".accessTokenIDLabel").hide();
		$("#userID").hide();
		$(".userIDLabel").hide();
	}
	if($("#feedType").val() == "m") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").show();
		$(".accessTokenIDLabel").show();
		$("#userID").show();
		$(".userIDLabel").show();
	}
	if($("#feedType").val() == "f") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").show();
		$(".accessTokenIDLabel").show();
		$("#userID").show();
		$(".userIDLabel").show();
	}
	if($("#feedType").val() == "nothing") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").hide();
		$(".accessTokenIDLabel").hide();
		$("#userID").hide();
		$(".userIDLabel").hide();	
	}


$("#feedType").change(function() {
	if($(this).val() == "h") {
		$("#tag").show();
		$(".tagLabel").show();
		$("#accessToken").hide();
		$(".accessTokenIDLabel").hide();
		$("#userID").hide();
		$(".userIDLabel").hide();
	}
	if($(this).val() == "m") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").show();
		$(".accessTokenIDLabel").show();
		$("#userID").show();
		$(".userIDLabel").show();
	}
	if($(this).val() == "f") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").show();
		$(".accessTokenIDLabel").show();
		$("#userID").show();
		$(".userIDLabel").show();
	}
	if($(this).val() == "nothing") {
		$("#tag").hide();
		$(".tagLabel").hide();
		$("#accessToken").hide();
		$(".accessTokenIDLabel").hide();
		$("#userID").hide();
		$(".userIDLabel").hide();	
	}
});

