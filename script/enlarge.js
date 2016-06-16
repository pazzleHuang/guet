// enlarge.html
;
    (function($) {
        var methods = {
            magnifier: function(options) {
                return this.each(function() {

                    var defaults = {
                        zoomWidth: 100,
                        zoomHeight: 100,
                        largeImgWidth: 400,
                        largeImgHeight: 400
                    },
                        settings = $.extend({}, defaults, options),
                        _body = $('body'),
                        _This = $(this),
                        _imgBox = _This.find('.m_image'),
                        _imgShow = _imgBox.find('img'),
                        _thumbContent = _This.find('.m_thumb'),
                        _thumbList = _thumbContent.find('ol'),
                        _thumbLiLeft = _thumbContent.find('li').eq(0).css("margin-left"),
                        _thumbLiRight = _thumbContent.find('li').eq(0).css("margin-right"),
                        _thumbLRWidth = parseInt(_thumbLiLeft) + parseInt(_thumbLiRight),
                        _thumbWidth = _thumbList.find('a')[0].offsetWidth,
                        _thumbImg = _thumbContent.find('img'),
                        _prev = _thumbContent.find('.m_prev'),
                        _next = _thumbContent.find('.m_next'),
                        _width = _imgBox.width(),
                        _height = _imgBox.height(),
                        _positionX = _This.offset().left,
                        _positionY = _This.offset().top,
                        count = moveLen = 0,
                        _img = new Image();



                    _thumbList.find('a').on('click', function(event) {
                        var _this = $(this),
                            _src = _this.find('img').attr('src');
                        _img.src = _src;
                        $('.im_zoom_viewer').css({
                            background: 'url(' + _src + ') no-repeat'
                        });
                        _thumbList.find('a').removeClass('now');
                        _this.addClass('now');
                        _imgShow.attr('src', _src);

                        var $productText = $('.productText .show-text');
                        var imgindex = $(this).parent().index();
                        // $productText.index(imgindex).show().siblings('span').hide();
                        //alert($(this).parent().index());
                        $productText.hide();
                        $productText.eq(imgindex).show();
                        //alert($productText.eq(imgindex).text());
                    });


                    // _imgBox.on({
                    //     mouseenter: function(event) {
                    //         var _this = $(this),
                    //             _zoomX = event.pageX - _positionX - (settings.zoomWidth / 2),
                    //             _zoomY = event.pageY - _positionY - (settings.zoomHeight / 2),
                    //             _imgSrc = _imgBox.find('img').attr('src');

                    //         _this.css("cursor", "move").append('<span class="im_zoom" style="left:' + _zoomX + 'px;top:' + _zoomY + 'px;"></span>');


                    //         if (!_body.find('.im_zoom_viewer').length) {
                    //             _body.append('<div class="im_zoom_viewer" style="left:' + (_width + _positionX + 20) + 'px;top:' + _positionY + 'px;"></div>');

                    //             $('.im_zoom_viewer').css({
                    //                 background: 'url(' + _imgSrc + ') no-repeat'
                    //             });
                    //             _img.src = _imgSrc;
                    //         }


                    //     },
                    //     mouseleave: function(event) {
                    //         var _this = $(this);
                    //         _this.find('.im_zoom').remove();
                    //         _body.find('.im_zoom_viewer').hide();
                    //     },
                    //     mousemove: function(event) {
                    //         var _this = $(this),
                    //             _zoomX = event.pageX - _positionX - (settings.zoomWidth / 2),
                    //             _zoomY = event.pageY - _positionY - (settings.zoomHeight / 2);

                    //         if (_zoomX < 0) {
                    //             _zoomX = 0;
                    //         } else if (_zoomX > _width - settings.zoomWidth) {
                    //             _zoomX = _width - settings.zoomWidth;
                    //         };

                    //         if (_zoomY < 0) {
                    //             _zoomY = 0;
                    //         } else if (_zoomY > _height - settings.zoomHeight) {
                    //             _zoomY = _height - settings.zoomHeight;
                    //         };

                    //         console.log(_img.width)

                    //         var _viewX = Math.ceil(parseInt($('.im_zoom')[0].style.left) / (_width - settings.zoomWidth) * (_img.width - _width)),
                    //             _viewY = Math.ceil(parseInt($('.im_zoom')[0].style.top) / (_height - settings.zoomHeight) * (_img.height - _width));

                    //         $('.im_zoom').css({
                    //             left: _zoomX,
                    //             top: _zoomY
                    //         });


                    //         $('.im_zoom_viewer').css({
                    //             'display': 'block',
                    //             'background-position': -_viewX + 'px ' + -_viewY + 'px'
                    //         });

                    //     }
                    // });

                    if (_thumbImg.length < 5) {
                        _next.css({
                            'background-position': '-85px 0'
                        });
                        _prev.css({
                            'background-position': '-68px 0'
                        });

                    }


                    _next.on('click', function(event) {
                        event.preventDefault();
                        var _this = $(this),
                            len = _thumbList.find('a').length;
                        if (count < len - 5) {

                            _prev.removeAttr('style');
                            moveLen += _thumbWidth + _thumbLRWidth;
                            _thumbList.stop().animate({
                                "left": -moveLen
                            }, 100, 'linear');
                            count++;
                            if (count === len - 5) {
                                _this.css({
                                    'background-position': '-85px 0'
                                });
                            }
                        }
                    });

                    _prev.on('click', function(event) {
                        event.preventDefault();
                        var _this = $(this),
                            len = _thumbList.find('a').length;
                        if (count > 0) {
                            _next.removeAttr('style');
                            moveLen -= _thumbWidth + _thumbLRWidth;
                            _thumbList.stop().animate({
                                "left": -moveLen
                            }, 100, 'linear');
                            count--;
                            if (count === 0) {
                                _this.css({
                                    'background-position': '-68px 0'
                                });
                            }
                        }
                    });

                });
            }
        };

        $.fn.Plugins = function(method) {
            //初始化插件
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else {
                $.error('在Plugins中不存在' + method + '方法');
            }
        }
    })(jQuery);