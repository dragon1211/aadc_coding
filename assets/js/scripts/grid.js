/*------------------------------------------

grid.js
by Wingspan Inc.

------------------------------------------*/

$(function(){
	
	// 設定項目
    // 以下のセレクタ内にあるli、および子要素を動作対象。
    var baseElementName = '.grid';

    // アニメーションのスピード。
    var animationDuration = 'fast';

    var nowColumnNum = 0;


    $(window).load(function(){
        _updateColumnNumber();
    });

    $(window).resize(function(){
        var previousColumnNum = nowColumnNum;
        _updateColumnNumber();
        if(nowColumnNum != previousColumnNum) {
            if($('li.on', baseElementName).length) {
                _showExpandViewWithTargetLiAtResize($('li.on', baseElementName));
            }
        }
        else {
            _updateArrowPosition($('li.on', baseElementName));
        }
    });

    $(".event-roll").on("click", function() {
        // 現在の列数の更新
        _updateColumnNumber();

        // 選択された項目の情報
        var targetLi = $(this).parents('li');
        var targetNo = $('li', baseElementName).index(targetLi);
        var targetRow = Math.floor(targetNo / nowColumnNum);

        // 現在表示されている項目の情報
        var presentLi = null;
        var presentRow = null;

        // 詳細表示アニメーションさせる場合はtrue
        var isAnimate = true;

        // すでに表示されている項目がある場合
        // 詳細表示アニメーションの必要があるどうか判断
        if($('li.on', baseElementName).length) {
            presentLi = $('li.on', baseElementName);
            var no = $('li', baseElementName).index(presentLi);
            presentRow = Math.floor(no / nowColumnNum);
            if(presentRow == targetRow && no != targetNo) {
                isAnimate = false;
            }
        }

        // アニメーションする切り替え
        if(isAnimate) {
            // 自分で閉じるだけ
            if(targetLi.hasClass('on')) {
                // 自分の下部マージンを元に戻す
                targetLi.removeClass('on').animate({marginBottom:0}, animationDuration);

                var closeExpandEl = $('.expand');

                // 詳細表示エレメントを削除
                if(closeExpandEl.length) {
                    closeExpandEl.animate({height:0, padding:0}, animationDuration, function(){
                        $(this).remove();
                    });
                }
            }
            // 初期状態から or 切り替わり
            else {
                // 既存の項目の下部マージンを元に戻す
                if(presentLi != null) {
                    presentLi.removeClass('on').animate({marginBottom:0}, animationDuration);
                }

                // 既存の詳細表示をアニメーションさせた上で削除
                var presentExpandEl = $('.expand');
                if(presentExpandEl.length) {
                    // y位置の微調整
                    var movePresentTop = presentExpandEl.offset().top;
                    if(presentRow != null && presentRow > targetRow) {
                        movePresentTop += presentExpandEl.height();
                    }
                    presentExpandEl.animate({ height:0, top:movePresentTop+'px' }, animationDuration, function(){
                        $(this).remove();
                    });
                }

                // 新しく表示する詳細表示要素に付加する、y位置の調整
                var expandTop = targetLi.offset().top + targetLi.height();
                var moveTop = expandTop;
                if(presentRow != null && presentRow < targetRow) {
                    moveTop -= presentExpandEl.height();
                }

                // 新しく表示する詳細表示要素の生成
                var newExtendEl = $('<div class="expand"><div class="container"></div><div class="closeBtn">×</div><div class="arrow">▲</div></div>')
                    .css('top', expandTop+'px')
                    .find('.closeBtn').click(function(){
                        $('li.on').removeClass('on').animate({ marginBottom:0 }, animationDuration);
                        $('.expand').animate({ height:0 }, animationDuration, function(){ $(this).remove(); });
                    }).end()
                    .find('div.container').html($(this).parents('li').find('div.more div.container').html()).end()
                    .appendTo('body');

                var h = newExtendEl.filter(":last").height();
                newExtendEl.filter(":last").css('height', 0).animate({height:h+'px',top:moveTop+'px'}, animationDuration);

                // 新しく表示させる
                targetLi.addClass('on').animate({marginBottom:h+'px'}, animationDuration);

                _updateArrowPosition(targetLi);
            }
        }
        // アニメーションしない切り替え
        else {
            presentLi.removeClass('on').css('marginBottom',0);

            var expandEl = $('.expand');
            var expandContainerEl = $('.expand div.container');

            expandEl.find('div.container').html($(this).parents('li').find('div.more div.container').html());

            var expandHeight = expandContainerEl.height()
                + parseInt(expandContainerEl.css('paddingTop'))
                + parseInt(expandContainerEl.css('paddingBottom'));

            expandEl.height(expandHeight);

            targetLi.addClass('on').css('marginBottom', expandHeight+'px');

            _updateArrowPosition(targetLi);
        }
    });

    // 1行あたりの列数の更新
    var _updateColumnNumber = function(){
        var defTop = null;
        nowColumnNum = 0;
        $('li', baseElementName).each(function(){
            if(defTop == null) {
                defTop = $(this).position().top;
            } else {
                if(defTop != $(this).position().top) {
                    return false;
                }
            }
            nowColumnNum++;
        });
    };

    // 詳細表示の上向き矢印の位置調整
    var _updateArrowPosition = function(targetLi) {
        if($('.expand').length) {
            var arrowX = targetLi.offset().left + targetLi.width() / 2 - 14;
            $('.expand .arrow').css('left', arrowX+'px');
        }
    };

    // リサイズによる項目の切り替え処理
    var _showExpandViewWithTargetLiAtResize = function(targetLi) {
        // 現在の列数の更新
        _updateColumnNumber();

        // y位置の微調整
        var expandTop = targetLi.offset().top + targetLi.height();
        $('.expand').css('top', expandTop+'px');

        _updateArrowPosition(targetLi);
    };
	// y位置スクロール
    $('.event-roll').click(function(){
    	var targetY = $(this).offset().top + 250;
		$('html,body').animate({scrollTop:targetY},'normal');
    });		    
});