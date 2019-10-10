// check

(function(){
	var inputItem = [],
		item = document.getElementsByClassName('billies-mkWpLightning-item'),
		checkItem = document.checkform.chk,
		i,

		mycheck, disp_setting_btn, ok_btn, save_btn, 
		read_btn, reset_btn, menu_box, setting_btn,
		checkarea, checkareaRight, checkareaRightPx,
        settingBtn_rect, settingBtn_rect_1st, pageY, pageYpx
	;

	ok_btn = document.getElementById('ok-btn');
	save_btn = document.getElementById('save-btn');
	read_btn = document.getElementById('read-btn');
	reset_btn = document.getElementById('reset-btn');
	menu_box = document.getElementById('billies-mkWpLightning-menu-box');
  setting_btn = document.getElementById('billies-mkWpLightning-setting-btn');
  checkarea = document.getElementsByClassName('billies-mkWpLightning-check')[0];

  // checkareaすなわちsetting_btnの親要素の位置
  checkarea_rect = checkarea.getBoundingClientRect();
  // checkareaの右側の寸法(right)
  checkareaRight = document.body.clientWidth - checkarea_rect.right;
  checkareaRightPx = checkareaRight.toString() + 'px';

  window.addEventListener( 'scroll', function () {
    // checkareaの位置を測り直す
    checkarea_rect = checkarea.getBoundingClientRect();

	// ckeckareaの上が マイナス になると
    // setting_btn と menu_box を fixed にして、
    // 画面右の寸法を与える。
    if ( checkarea_rect.top < 0 ) {
      setting_btn.style.position = 'fixed';
      setting_btn.style.right = checkareaRightPx;
      menu_box.style.position = 'fixed';
      menu_box.style.right = checkareaRightPx;
    } else {
      setting_btn.style.position = 'absolute';
      setting_btn.style.right = '0px';
      menu_box.style.position = 'absolute';
      menu_box.style.right = '0px';
    }
  }, false);

	mycheck = function () {
		for (i=0; i < checkItem.length; i++) {
			if (checkItem[i].checked) {
				inputItem[i] = true;
			} else {
				inputItem[i] = false;
			}
		}
		for (i=0; i < checkItem.length; i++) {
			if (inputItem[i]) {
				item[i].style.display = "none";
			}
			// console.log(i.toString() + ': ' + inputItem[i]);
		}

	};

	disp_setting_btn = function () {
		// var elem = document.getElementById('billies-mkWpLightning-setting-btn'),
		//	menu_box = document.getElementById('billies-mkWpLightning-menu-box');

		setting_btn.style.display = "block";
		menu_box.style.display = "none";
	};

	ok_btn.onclick = function() {
		mycheck();
		disp_setting_btn();
	};
	save_btn.onclick = function() {
		var setjson = JSON.stringify(inputItem);
		// alert(setjson);
		localStorage.setItem('key', setjson);
		disp_setting_btn();
	};
	read_btn.onclick = function() {
		var getjson = localStorage.getItem('key');
		inputItem = JSON.parse(getjson);
		// alert(getjson);
		for (i=0; i < checkItem.length; i++) {
			if (inputItem[i]) {
				item[i].style.display = "none";
			}
		}
		disp_setting_btn();
	};
	reset_btn.onclick = function() {
		for (i=0; i < checkItem.length; i++) {
			inputItem[i] = false;
			checkItem[i].checked = false;
			item[i].style.display = "block";
		}
		disp_setting_btn();
	};
	setting_btn.onclick = function() {
		console.log('clicked!');
		setting_btn.style.display = "none";
		menu_box.style.display = "block";
	};

})();

