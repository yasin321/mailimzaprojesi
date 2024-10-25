/*Dropify Init*/
"use strict";
$(function() {
	/* Basic Init*/
	$('.dropify').dropify({
		messages: {
			'default': '<span class="main-text">Firma Logonuzu Yükleyin</span><span class="sub-text"> Tıklayıp seçin veya sürekleyip bırakın</span>',
			'replace': 'Değiştirmek için sürükleyip bırakın veya tıklayın',
			'remove':  'Sil',
			'error':   'Hay aksi, yanlış bir şey oldu.'
		},
		tpl: {
			message:'<div class="dropify-message"><span class="file-icon"></span> <p>{{ default }}</p></div>',
		}
	});
	$('.dropify-1').dropify({
		messages: {
			'default': '<span class="main-text">Firma Logonuzu Yükleyin</span><span class="sub-text"> Tıklayıp seçin veya sürekleyip bırakın</span>',
			'replace': 'Değiştirmek için sürükleyip bırakın veya tıklayın',
			'remove':  'Sil',
			'error':   'Hay aksi, yanlış bir şey oldu.'
		},
		tpl: {
			message:'<div class="dropify-message"><span class="file-icon"></span> <p>{{ default }}</p></div>',
		}
	});
	$('.dropify-2').dropify({
		  messages: {
			'default': 'Upload Logo',
		},
		tpl: {
			message:'<div class="dropify-message"><span class="file-icon"></span> <p>{{ default }}</p></div>',
		}
	});
});
