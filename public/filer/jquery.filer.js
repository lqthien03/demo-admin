!function(u) {
    "use strict";
    u.fn.filer = function(i) {
        return this.each(function(s, a) {
            var d = u(a)
              , f = u()
              , l = u()
              , p = u()
              , n = []
              , e = u.isFunction(i) ? i(d, u.fn.filer.defaults) : i
              , h = e && u.isPlainObject(e) ? u.extend(!0, {}, u.fn.filer.defaults, e) : u.fn.filer.defaults
              , _ = {
                init: function() {
                    d.wrap('<div class="jFiler"></div>'),
                    _._set("props"),
                    d.prop("jFiler").boxEl = f = d.closest(".jFiler"),
                    _._changeInput()
                },
                _bindInput: function() {
                    h.changeInput && 0 < l.length && l.on("click", _._clickHandler),
                    d.on({
                        focus: function() {
                            l.addClass("focused")
                        },
                        blur: function() {
                            l.removeClass("focused")
                        },
                        change: _._onChange
                    }),
                    h.dragDrop && (h.dragDrop.dragContainer.on("drag dragstart dragend dragover dragenter dragleave drop", function(e) {
                        e.preventDefault(),
                        e.stopPropagation()
                    }),
                    h.dragDrop.dragContainer.on("drop", _._dragDrop.drop),
                    h.dragDrop.dragContainer.on("dragover", _._dragDrop.dragEnter),
                    h.dragDrop.dragContainer.on("dragleave", _._dragDrop.dragLeave)),
                    h.uploadFile && h.clipBoardPaste && u(window).on("paste", _._clipboardPaste)
                },
                _unbindInput: function(e) {
                    h.changeInput && 0 < l.length && l.off("click", _._clickHandler),
                    e && (d.off("change", _._onChange),
                    h.dragDrop && (h.dragDrop.dragContainer.off("drop", _._dragDrop.drop),
                    h.dragDrop.dragContainer.off("dragover", _._dragDrop.dragEnter),
                    h.dragDrop.dragContainer.off("dragleave", _._dragDrop.dragLeave)),
                    h.uploadFile && h.clipBoardPaste && u(window).off("paste", _._clipboardPaste))
                },
                _clickHandler: function() {
                    if (!h.uploadFile && h.addMore && 0 != d.val().length) {
                        _._unbindInput(!0);
                        var e = u('<input type="file" />')
                          , i = d.prop("attributes");
                        u.each(i, function() {
                            "required" != this.name && e.attr(this.name, this.value)
                        }),
                        d.after(e),
                        n.push(e),
                        d = e,
                        _._bindInput(),
                        _._set("props")
                    }
                    d.click()
                },
                _applyAttrSettings: function() {
                    var e = ["name", "limit", "maxSize", "fileMaxSize", "extensions", "changeInput", "showThumbs", "appendTo", "theme", "addMore", "excludeName", "files", "uploadUrl", "uploadData", "options"];
                    for (var i in e) {
                        var t = "data-jfiler-" + e[i];
                        if (_._assets.hasAttr(t)) {
                            switch (e[i]) {
                            case "changeInput":
                            case "showThumbs":
                            case "addMore":
                                h[e[i]] = -1 < ["true", "false"].indexOf(d.attr(t)) ? "true" == d.attr(t) : d.attr(t);
                                break;
                            case "extensions":
                                h[e[i]] = d.attr(t).replace(/ /g, "").split(",");
                                break;
                            case "uploadUrl":
                                h.uploadFile && (h.uploadFile.url = d.attr(t));
                                break;
                            case "uploadData":
                                h.uploadFile && (h.uploadFile.data = JSON.parse(d.attr(t)));
                                break;
                            case "files":
                            case "options":
                                h[e[i]] = JSON.parse(d.attr(t));
                                break;
                            default:
                                h[e[i]] = d.attr(t)
                            }
                            d.removeAttr(t)
                        }
                    }
                },
                _changeInput: function() {
                    if (_._applyAttrSettings(),
                    null != h.beforeRender && "function" == typeof h.beforeRender && h.beforeRender(f, d),
                    h.theme && f.addClass("jFiler-theme-" + h.theme),
                    "input" != d.get(0).tagName.toLowerCase() && "file" != d.get(0).type)
                        l = d,
                        (d = u('<input type="file" name="' + h.name + '" />')).css({
                            position: "absolute",
                            left: "-9999px",
                            top: "-9999px",
                            "z-index": "-9999"
                        }),
                        f.prepend(d),
                        _._isGn = d;
                    else if (h.changeInput) {
                        switch (typeof h.changeInput) {
                        case "boolean":
                            l = u('<div class="jFiler-input"><div class="jFiler-input-caption"><span>' + h.captions.feedback + '</span></div><div class="jFiler-input-button">' + h.captions.button + '</div></div>"');
                            break;
                        case "string":
                        case "object":
                            l = u(h.changeInput);
                            break;
                        case "function":
                            l = u(h.changeInput(f, d, h))
                        }
                        d.after(l),
                        d.css({
                            position: "absolute",
                            left: "-9999px",
                            top: "-9999px",
                            "z-index": "-9999"
                        })
                    }
                    d.prop("jFiler").newInputEl = l,
                    h.dragDrop && (h.dragDrop.dragContainer = h.dragDrop.dragContainer ? u(h.dragDrop.dragContainer) : l),
                    (!h.limit || h.limit && 2 <= h.limit) && (d.attr("multiple", "multiple"),
                    "[]" != d.attr("name").slice(-2) && d.attr("name", d.attr("name") + "[]")),
                    d.attr("disabled") || h.disabled ? (h.disabled = !0,
                    _._unbindInput(!0),
                    f.addClass("jFiler-disabled")) : (h.disabled = !1,
                    _._bindInput(),
                    f.removeClass("jFiler-disabled")),
                    h.files && _._append(!1, {
                        files: h.files
                    }),
                    null != h.afterRender && "function" == typeof h.afterRender && h.afterRender(p, f, l, d)
                },
                _clear: function() {
                    _.files = null,
                    d.prop("jFiler").files = null,
                    h.uploadFile || h.addMore || _._reset(),
                    _._set("feedback", _._itFl && 0 < _._itFl.length ? _._itFl.length + " " + h.captions.feedback2 : h.captions.feedback),
                    null != h.onEmpty && "function" == typeof h.onEmpty && h.onEmpty(f, l, d)
                },
                _reset: function(e) {
                    if (!e) {
                        if (!h.uploadFile && h.addMore) {
                            for (var i = 0; i < n.length; i++)
                                n[i].remove();
                            n = [],
                            _._unbindInput(!0),
                            d = _._isGn ? _._isGn : u(a),
                            _._bindInput()
                        }
                        _._set("input", "")
                    }
                    _._itFl = [],
                    _._itFc = null,
                    _._ajFc = 0,
                    _._set("props"),
                    d.prop("jFiler").files_list = _._itFl,
                    d.prop("jFiler").current_file = _._itFc,
                    _._itFr = [],
                    f.find("input[name^='jfiler-items-exclude-']:hidden").remove(),
                    p.fadeOut("fast", function() {
                        u(this).remove()
                    }),
                    d.prop("jFiler").listEl = p = u()
                },
                _set: function(e, i) {
                    switch (e) {
                    case "input":
                        d.val(i);
                        break;
                    case "feedback":
                        0 < l.length && l.find(".jFiler-input-caption span").html(i);
                        break;
                    case "props":
                        d.prop("jFiler") || d.prop("jFiler", {
                            options: h,
                            listEl: p,
                            boxEl: f,
                            newInputEl: l,
                            inputEl: d,
                            files: _.files,
                            files_list: _._itFl,
                            current_file: _._itFc,
                            append: function(e) {
                                return _._append(!1, {
                                    files: [e]
                                })
                            },
                            enable: function() {
                                h.disabled && (h.disabled = !1,
                                d.removeAttr("disabled"),
                                f.removeClass("jFiler-disabled"),
                                _._bindInput())
                            },
                            disable: function() {
                                h.disabled || (h.disabled = !0,
                                f.addClass("jFiler-disabled"),
                                _._unbindInput(!0))
                            },
                            remove: function(e) {
                                return _._remove(null, {
                                    binded: !0,
                                    data: {
                                        id: e
                                    }
                                }),
                                !0
                            },
                            reset: function() {
                                return _._reset(),
                                _._clear(),
                                !0
                            },
                            retry: function(e) {
                                return _._retryUpload(e)
                            }
                        })
                    }
                },
                _filesCheck: function() {
                    var e = 0;
                    if (h.limit && _.files.length + _._itFl.length > h.limit)
                        return h.dialogs.alert(_._assets.textParse(h.captions.errors.filesLimit)),
                        !1;
                    for (var i = 0; i < _.files.length; i++) {
                        var t = _.files[i]
                          , a = t.name.split(".").pop().toLowerCase()
                          , n = {
                            name: t.name,
                            size: t.size,
                            size2: _._assets.bytesToSize(t.size),
                            type: t.type,
                            ext: a
                        };
                        if (null != h.extensions && -1 == u.inArray(a, h.extensions) && -1 == u.inArray(n.type, h.extensions))
                            return h.dialogs.alert(_._assets.textParse(h.captions.errors.filesType, n)),
                            !1;
                        if (null != h.maxSize && _.files[i].size > 1048576 * h.maxSize || null != h.fileMaxSize && _.files[i].size > 1048576 * h.fileMaxSize)
                            return h.dialogs.alert(_._assets.textParse(h.captions.errors.filesSize, n)),
                            !1;
                        if (4096 == t.size && 0 == t.type.length)
                            return h.dialogs.alert(_._assets.textParse(h.captions.errors.folderUpload, n)),
                            !1;
                        if (null != h.onFileCheck && "function" == typeof h.onFileCheck && !1 === h.onFileCheck(n, h, _._assets.textParse))
                            return !1;
                        if ((h.uploadFile || h.addMore) && !h.allowDuplicates)
                            if (0 < (n = _._itFl.filter(function(e, i) {
                                if (e.file.name == t.name && e.file.size == t.size && e.file.type == t.type && (!t.lastModified || e.file.lastModified == t.lastModified))
                                    return !0
                            })).length) {
                                if (1 == _.files.length)
                                    return !1;
                                t._pendRemove = !0
                            }
                        e += _.files[i].size
                    }
                    return !(null != h.maxSize && e >= Math.round(1048576 * h.maxSize)) || (h.dialogs.alert(_._assets.textParse(h.captions.errors.filesSizeAll)),
                    !1)
                },
                _thumbCreator: {
                    create: function(e) {
                        var i = _.files[e]
                          , t = _._itFc ? _._itFc.id : e
                          , a = i.name
                          , n = i.size
                          , r = i.file
                          , l = i.type ? i.type.split("/", 1) : "".toString().toLowerCase()
                          , o = -1 != a.indexOf(".") ? a.split(".").pop().toLowerCase() : ""
                          , s = h.uploadFile ? '<div class="jFiler-jProgressBar">' + h.templates.progressBar + "</div>" : ""
                          , d = {
                            id: t,
                            name: a,
                            size: n,
                            size2: _._assets.bytesToSize(n),
                            url: r,
                            type: l,
                            extension: o,
                            icon: _._assets.getIcon(o, l),
                            icon2: _._thumbCreator.generateIcon({
                                type: l,
                                extension: o
                            }),
                            image: '<div class="jFiler-item-thumb-image fi-loading"></div>',
                            progressBar: s,
                            _appended: i._appended
                        }
                          , f = "";
                        if (i.opts && (d = u.extend({}, i.opts, d)),
                        (f = u(_._thumbCreator.renderContent(d)).attr("data-jfiler-index", t)).get(0).jfiler_id = t,
                        _._thumbCreator.renderFile(i, f, d),
                        i.forList)
                            return f;
                        (_._itFc.html = f).hide()[h.templates.itemAppendToEnd ? "appendTo" : "prependTo"](p.find(h.templates._selectors.list)).show(),
                        i._appended || _._onSelect(e)
                    },
                    renderContent: function(e) {
                        return _._assets.textParse(e._appended ? h.templates.itemAppend : h.templates.item, e)
                    },
                    renderFile: function(e, i, t) {
                        if (0 == i.find(".jFiler-item-thumb-image").length)
                            return !1;
                        if (e.file && "image" == t.type) {
                            var a = '<img src="' + e.file + '" draggable="false" />'
                              , n = i.find(".jFiler-item-thumb-image.fi-loading");
                            return u(a).error(function() {
                                a = _._thumbCreator.generateIcon(t),
                                i.addClass("jFiler-no-thumbnail"),
                                n.removeClass("fi-loading").html(a)
                            }).load(function() {
                                n.removeClass("fi-loading").html(a)
                            }),
                            !0
                        }
                        if (window.File && window.FileList && window.FileReader && "image" == t.type && t.size < 1e7) {
                            var r = new FileReader;
                            r.onload = function(e) {
                                var u = i.find(".jFiler-item-thumb-image.fi-loading");
                                if (h.templates.canvasImage) {
                                    var c = document.createElement("canvas")
                                      , g = c.getContext("2d")
                                      , m = new Image;
                                    m.onload = function() {
                                        var e = u.height()
                                          , i = u.width()
                                          , t = m.height / e
                                          , a = m.width / i
                                          , n = t < a ? t : a
                                          , r = m.height / n
                                          , l = m.width / n
                                          , o = Math.ceil(Math.log(m.width / l) / Math.log(2));
                                        if (c.height = e,
                                        c.width = i,
                                        m.width < c.width || m.height < c.height || o <= 1) {
                                            var s = m.width < c.width ? c.width / 2 - m.width / 2 : m.width > c.width ? -(m.width - c.width) / 2 : 0
                                              , d = m.height < c.height ? c.height / 2 - m.height / 2 : 0;
                                            g.drawImage(m, s, d, m.width, m.height)
                                        } else {
                                            var f = document.createElement("canvas")
                                              , p = f.getContext("2d");
                                            f.width = .5 * m.width,
                                            f.height = .5 * m.height,
                                            p.fillStyle = "#fff",
                                            p.fillRect(0, 0, f.width, f.height),
                                            p.drawImage(m, 0, 0, f.width, f.height),
                                            p.drawImage(f, 0, 0, .5 * f.width, .5 * f.height),
                                            g.drawImage(f, l > c.width ? l - c.width : 0, 0, .5 * f.width, .5 * f.height, 0, 0, l, r)
                                        }
                                        u.removeClass("fi-loading").html('<img src="' + c.toDataURL("image/png") + '" draggable="false" />')
                                    }
                                    ,
                                    m.onerror = function() {
                                        i.addClass("jFiler-no-thumbnail"),
                                        u.removeClass("fi-loading").html(_._thumbCreator.generateIcon(t))
                                    }
                                    ,
                                    m.src = e.target.result
                                } else
                                    u.removeClass("fi-loading").html('<img src="' + e.target.result + '" draggable="false" />')
                            }
                            ,
                            r.readAsDataURL(e)
                        } else {
                            a = _._thumbCreator.generateIcon(t),
                            n = i.find(".jFiler-item-thumb-image.fi-loading");
                            i.addClass("jFiler-no-thumbnail"),
                            n.removeClass("fi-loading").html(a)
                        }
                    },
                    generateIcon: function(e) {
                        var i = new Array(3);
                        if (e && e.type && e.type[0] && e.extension)
                            switch (e.type[0]) {
                            case "image":
                                i[0] = "f-image",
                                i[1] = '<i class="icon-jfi-file-image"></i>';
                                break;
                            case "video":
                                i[0] = "f-video",
                                i[1] = '<i class="icon-jfi-file-video"></i>';
                                break;
                            case "audio":
                                i[0] = "f-audio",
                                i[1] = '<i class="icon-jfi-file-audio"></i>';
                                break;
                            default:
                                i[0] = "f-file f-file-ext-" + e.extension,
                                i[1] = 0 < e.extension.length ? "." + e.extension : "",
                                i[2] = 1
                            }
                        else
                            i[0] = "f-file",
                            i[1] = e.extension && 0 < e.extension.length ? "." + e.extension : "",
                            i[2] = 1;
                        var t = '<span class="jFiler-icon-file ' + i[0] + '">' + i[1] + "</span>";
                        if (1 == i[2] && _._assets.text2Color(e.extension)) {
                            var a = u(t).appendTo("body");
                            a.css("background-color", _._assets.text2Color(e.extension)),
                            t = a.prop("outerHTML"),
                            a.remove()
                        }
                        return t
                    },
                    _box: function(a) {
                        if (null != h.beforeShow && "function" == typeof h.beforeShow && !h.beforeShow(_.files, p, f, l, d))
                            return !1;
                        if (p.length < 1) {
                            if (h.appendTo)
                                var e = u(h.appendTo);
                            else
                                e = f;
                            e.find(".jFiler-items").remove(),
                            p = u('<div class="jFiler-items jFiler-row"></div>'),
                            (d.prop("jFiler").listEl = p).append(_._assets.textParse(h.templates.box)).appendTo(e),
                            p.on("click", h.templates._selectors.remove, function(e) {
                                e.preventDefault();
                                function i(e) {
                                    _._remove(t[0], t[1])
                                }
                                var t = [a ? a.remove.event : e, a ? a.remove.el : u(this).closest(h.templates._selectors.item)];
                                h.templates.removeConfirmation ? h.dialogs.confirm(h.captions.removeConfirmation, i) : i()
                            })
                        }
                        for (var i = 0; i < _.files.length; i++)
                            _.files[i]._appended || (_.files[i]._choosed = !0),
                            _._addToMemory(i),
                            _._thumbCreator.create(i)
                    }
                },
                _upload: function(e) {
                    var i = _._itFl[e]
                      , t = i.html
                      , a = new FormData;
                    if (a.append(d.attr("name"), i.file, !!i.file.name && i.file.name),
                    null != h.uploadFile.data && u.isPlainObject("function" == typeof h.uploadFile.data ? h.uploadFile.data(i.file) : h.uploadFile.data))
                        for (var n in h.uploadFile.data)
                            a.append(n, h.uploadFile.data[n]);
                    _._ajax.send(t, a, i)
                },
                _ajax: {
                    send: function(a, e, n) {
                        return n.ajax = u.ajax({
                            url: h.uploadFile.url,
                            data: e,
                            type: h.uploadFile.type,
                            enctype: h.uploadFile.enctype,
                            xhr: function() {
                                var e = u.ajaxSettings.xhr();
                                return e.upload && e.upload.addEventListener("progress", function(e) {
                                    _._ajax.progressHandling(e, a)
                                }, !1),
                                e
                            },
                            complete: function(e, i) {
                                n.ajax = !1,
                                _._ajFc++,
                                h.uploadFile.synchron && n.id + 1 < _._itFl.length && _._upload(n.id + 1),
                                _._ajFc >= _.files.length && (_._ajFc = 0,
                                d.get(0).value = "",
                                null != h.uploadFile.onComplete && "function" == typeof h.uploadFile.onComplete && h.uploadFile.onComplete(p, f, l, d, e, i))
                            },
                            beforeSend: function(e, i) {
                                return null == h.uploadFile.beforeSend || "function" != typeof h.uploadFile.beforeSend || h.uploadFile.beforeSend(a, p, f, l, d, n.id, e, i)
                            },
                            success: function(e, i, t) {
                                n.uploaded = !0,
                                null != h.uploadFile.success && "function" == typeof h.uploadFile.success && h.uploadFile.success(e, a, p, f, l, d, n.id, i, t)
                            },
                            error: function(e, i, t) {
                                n.uploaded = !1,
                                null != h.uploadFile.error && "function" == typeof h.uploadFile.error && h.uploadFile.error(a, p, f, l, d, n.id, e, i, t)
                            },
                            statusCode: h.uploadFile.statusCode,
                            cache: !1,
                            contentType: !1,
                            processData: !1
                        }),
                        n.ajax
                    },
                    progressHandling: function(e, i) {
                        if (e.lengthComputable) {
                            var t = Math.round(100 * e.loaded / e.total).toString();
                            null != h.uploadFile.onProgress && "function" == typeof h.uploadFile.onProgress && h.uploadFile.onProgress(t, i, p, f, l, d),
                            i.find(".jFiler-jProgressBar").find(h.templates._selectors.progressBar).css("width", t + "%")
                        }
                    }
                },
                _dragDrop: {
                    dragEnter: function(e) {
                        clearTimeout(_._dragDrop._drt),
                        h.dragDrop.dragContainer.addClass("dragged"),
                        _._set("feedback", h.captions.drop),
                        null != h.dragDrop.dragEnter && "function" == typeof h.dragDrop.dragEnter && h.dragDrop.dragEnter(e, l, d, f)
                    },
                    dragLeave: function(e) {
                        clearTimeout(_._dragDrop._drt),
                        _._dragDrop._drt = setTimeout(function(e) {
                            if (!_._dragDrop._dragLeaveCheck(e))
                                return _._dragDrop.dragLeave(e),
                                !1;
                            h.dragDrop.dragContainer.removeClass("dragged"),
                            _._set("feedback", h.captions.feedback),
                            null != h.dragDrop.dragLeave && "function" == typeof h.dragDrop.dragLeave && h.dragDrop.dragLeave(e, l, d, f)
                        }, 100, e)
                    },
                    drop: function(e) {
                        clearTimeout(_._dragDrop._drt),
                        h.dragDrop.dragContainer.removeClass("dragged"),
                        _._set("feedback", h.captions.feedback),
                        e && e.originalEvent && e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files && 0 < e.originalEvent.dataTransfer.files.length && _._onChange(e, e.originalEvent.dataTransfer.files),
                        null != h.dragDrop.drop && "function" == typeof h.dragDrop.drop && h.dragDrop.drop(e.originalEvent.dataTransfer.files, e, l, d, f)
                    },
                    _dragLeaveCheck: function(e) {
                        var i = u(e.currentTarget);
                        return !(!i.is(l) && 0 < l.find(i).length)
                    }
                },
                _clipboardPaste: function(e, i) {
                    if ((i || e.originalEvent.clipboardData || e.originalEvent.clipboardData.items) && (!i || e.originalEvent.dataTransfer || e.originalEvent.dataTransfer.items) && !_._clPsePre) {
                        var t = i ? e.originalEvent.dataTransfer.items : e.originalEvent.clipboardData.items
                          , a = function(e, i, t) {
                            i = i || "",
                            t = t || 512;
                            for (var a = atob(e), n = [], r = 0; r < a.length; r += t) {
                                for (var l = a.slice(r, r + t), o = new Array(l.length), s = 0; s < l.length; s++)
                                    o[s] = l.charCodeAt(s);
                                var d = new Uint8Array(o);
                                n.push(d)
                            }
                            return new Blob(n,{
                                type: i
                            })
                        };
                        if (t)
                            for (var n = 0; n < t.length; n++)
                                if (-1 !== t[n].type.indexOf("image") || -1 !== t[n].type.indexOf("text/uri-list")) {
                                    if (i)
                                        try {
                                            window.atob(e.originalEvent.dataTransfer.getData("text/uri-list").toString().split(",")[1])
                                        } catch (e) {
                                            return
                                        }
                                    var r = i ? a(e.originalEvent.dataTransfer.getData("text/uri-list").toString().split(",")[1], "image/png") : t[n].getAsFile();
                                    r.name = Math.random().toString(36).substring(5),
                                    r.name += -1 != r.type.indexOf("/") ? "." + r.type.split("/")[1].toString().toLowerCase() : ".png",
                                    _._onChange(e, [r]),
                                    _._clPsePre = setTimeout(function() {
                                        delete _._clPsePre
                                    }, 1e3)
                                }
                    }
                },
                _onSelect: function(e) {
                    h.uploadFile && !u.isEmptyObject(h.uploadFile) && (!h.uploadFile.synchron || h.uploadFile.synchron && 0 == u.grep(_._itFl, function(e) {
                        return e.ajax
                    }).length) && _._upload(_._itFc.id),
                    _.files[e]._pendRemove && (_._itFc.html.hide(),
                    _._remove(null, {
                        binded: !0,
                        data: {
                            id: _._itFc.id
                        }
                    })),
                    null != h.onSelect && "function" == typeof h.onSelect && h.onSelect(_.files[e], _._itFc.html, p, f, l, d),
                    e + 1 >= _.files.length && null != h.afterShow && "function" == typeof h.afterShow && h.afterShow(p, f, l, d)
                },
                _onChange: function(e, i) {
                    if (i) {
                        if (!i || 0 == i.length)
                            return _._set("input", ""),
                            _._clear(),
                            !1;
                        _.files = i
                    } else {
                        if (!d.get(0).files || void 0 === d.get(0).files || 0 == d.get(0).files.length)
                            return h.uploadFile || h.addMore || (_._set("input", ""),
                            _._clear()),
                            !1;
                        _.files = d.get(0).files
                    }
                    if (h.uploadFile || h.addMore || _._reset(!0),
                    d.prop("jFiler").files = _.files,
                    !_._filesCheck() || null != h.beforeSelect && "function" == typeof h.beforeSelect && !h.beforeSelect(_.files, p, f, l, d))
                        return _._set("input", ""),
                        _._clear(),
                        h.addMore && 0 < n.length && (_._unbindInput(!0),
                        n[n.length - 1].remove(),
                        n.splice(n.length - 1, 1),
                        d = 0 < n.length ? n[n.length - 1] : u(a),
                        _._bindInput()),
                        !1;
                    if (_._set("feedback", _.files.length + _._itFl.length + " " + h.captions.feedback2),
                    h.showThumbs)
                        _._thumbCreator._box();
                    else
                        for (var t = 0; t < _.files.length; t++)
                            _.files[t]._choosed = !0,
                            _._addToMemory(t),
                            _._onSelect(t)
                },
                _append: function(e, i) {
                    var t = !!i && i.files;
                    if (t && !(t.length <= 0) && (_.files = t,
                    d.prop("jFiler").files = _.files,
                    h.showThumbs)) {
                        for (var a = 0; a < _.files.length; a++)
                            _.files[a]._appended = !0;
                        _._thumbCreator._box()
                    }
                },
                _getList: function(e, i) {
                    var t = !!i && i.files;
                    if (t && !(t.length <= 0) && (_.files = t,
                    d.prop("jFiler").files = _.files,
                    h.showThumbs)) {
                        for (var a = [], n = 0; n < _.files.length; n++)
                            _.files[n].forList = !0,
                            a.push(_._thumbCreator.create(n));
                        i.callback && i.callback(a, p, f, l, d)
                    }
                },
                _retryUpload: function(e, i) {
                    var t = parseInt("object" == typeof i ? i.attr("data-jfiler-index") : i)
                      , a = _._itFl.filter(function(e, i) {
                        return e.id == t
                    });
                    return 0 < a.length && (!h.uploadFile || u.isEmptyObject(h.uploadFile) || a[0].uploaded ? void 0 : (_._itFc = a[0],
                    d.prop("jFiler").current_file = _._itFc,
                    _._upload(t),
                    !0))
                },
                _remove: function(e, i) {
                    if (i.binded) {
                        if (void 0 !== i.data.id && 0 == (i = p.find(h.templates._selectors.item + "[data-jfiler-index='" + i.data.id + "']")).length)
                            return !1;
                        i.data.el && (i = i.data.el)
                    }
                    function t(e, i) {
                        var t, a, n = _._itFl[i], r = [];
                        if (n.file._choosed || n.file._appended || n.uploaded) {
                            _._itFr.push(n);
                            for (var l = _._itFl.filter(function(e) {
                                return e.file.name == n.file.name
                            }), o = 0; o < _._itFr.length; o++)
                                h.addMore && _._itFr[o] == n && 0 < l.length && (_._itFr[o].remove_name = l.indexOf(n) + "://" + _._itFr[o].file.name),
                                r.push(_._itFr[o].remove_name ? _._itFr[o].remove_name : _._itFr[o].file.name)
                        }
                        t = r,
                        0 == (a = f.find("input[name^='jfiler-items-exclude-']:hidden").first()).length && (a = u('<input type="hidden" name="jfiler-items-exclude-' + (h.excludeName ? h.excludeName : ("[]" != d.attr("name").slice(-2) ? d.attr("name") : d.attr("name").substring(0, d.attr("name").length - 2)) + "-" + s) + '">')).appendTo(f),
                        t && u.isArray(t) && (t = JSON.stringify(t),
                        a.val(t)),
                        _._itFl.splice(i, 1),
                        _._itFl.length < 1 ? (_._reset(),
                        _._clear()) : _._set("feedback", _._itFl.length + " " + h.captions.feedback2),
                        e.fadeOut("fast", function() {
                            u(this).remove()
                        })
                    }
                    var a = i.get(0).jfiler_id || i.attr("data-jfiler-index")
                      , n = null;
                    for (var r in _._itFl)
                        "length" !== r && _._itFl.hasOwnProperty(r) && _._itFl[r].id == a && (n = r);
                    return !!_._itFl.hasOwnProperty(n) && (_._itFl[n].ajax ? (_._itFl[n].ajax.abort(),
                    void t(i, n)) : void (null != h.onRemove && "function" == typeof h.onRemove && !1 === h.onRemove(i, _._itFl[n].file, n, p, f, l, d) || t(i, n)))
                },
                _addToMemory: function(e) {
                    _._itFl.push({
                        id: _._itFl.length,
                        file: _.files[e],
                        html: u(),
                        ajax: !1,
                        uploaded: !1
                    }),
                    (h.addMore || _.files[e]._appended) && (_._itFl[_._itFl.length - 1].input = d),
                    _._itFc = _._itFl[_._itFl.length - 1],
                    d.prop("jFiler").files_list = _._itFl,
                    d.prop("jFiler").current_file = _._itFc
                },
                _assets: {
                    bytesToSize: function(e) {
                        if (0 == e)
                            return "0 Byte";
                        var i = Math.floor(Math.log(e) / Math.log(1e3));
                        return (e / Math.pow(1e3, i)).toPrecision(3) + " " + ["Bytes", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"][i]
                    },
                    hasAttr: function(e, i) {
                        var t = (i = i || d).attr(e);
                        return !(!t || void 0 === t)
                    },
                    getIcon: function(e, i) {
                        return -1 < u.inArray(i, ["audio", "image", "text", "video"]) ? '<i class="icon-jfi-file-' + i + " jfi-file-ext-" + e + '"></i>' : '<i class="icon-jfi-file-o jfi-file-type-' + i + " jfi-file-ext-" + e + '"></i>'
                    },
                    textParse: function(e, n) {
                        switch (n = u.extend({}, {
                            limit: h.limit,
                            maxSize: h.maxSize,
                            fileMaxSize: h.fileMaxSize,
                            extensions: h.extensions ? h.extensions.join(",") : null
                        }, n && u.isPlainObject(n) ? n : {}, h.options),
                        typeof e) {
                        case "string":
                            return e.replace(/\{\{fi-(.*?)\}\}/g, function(e, i) {
                                return (i = i.replace(/ /g, "")).match(/(.*?)\|limitTo\:(\d+)/) ? i.replace(/(.*?)\|limitTo\:(\d+)/, function(e, i, t) {
                                    var a = (i = n[i] ? n[i] : "").substring(0, t);
                                    return a = i.length > a.length ? a.substring(0, a.length - 3) + "..." : a
                                }) : n[i] ? n[i] : ""
                            });
                        case "function":
                            return e(n);
                        default:
                            return e
                        }
                    },
                    text2Color: function(e) {
                        if (!e || 0 == e.length)
                            return !1;
                        for (var i = 0, t = 0; i < e.length; t = e.charCodeAt(i++) + ((t << 5) - t))
                            ;
                        i = 0;
                        for (var a = "#"; i < 3; a += ("00" + (t >> 2 * i++ & 255).toString(16)).slice(-2))
                            ;
                        return a
                    }
                },
                files: null,
                _itFl: [],
                _itFc: null,
                _itFr: [],
                _itPl: [],
                _ajFc: 0
            };
            return d.on("filer.append", function(e, i) {
                _._append(e, i)
            }).on("filer.remove", function(e, i) {
                i.binded = !0,
                _._remove(e, i)
            }).on("filer.reset", function(e) {
                return _._reset(),
                _._clear(),
                !0
            }).on("filer.generateList", function(e, i) {
                return _._getList(e, i)
            }).on("filer.retry", function(e, i) {
                return _._retryUpload(e, i)
            }),
            _.init(),
            this
        })
    }
    ,
    u.fn.filer.defaults = {
        limit: null,
        maxSize: null,
        fileMaxSize: null,
        extensions: null,
        changeInput: !0,
        showThumbs: !1,
        appendTo: null,
        theme: "default",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-default"></ul>',
            item: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title" title="{{fi-name}}">{{fi-name | limitTo:30}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status">{{fi-progressBar}}</span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            itemAppend: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title">{{fi-name | limitTo:35}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status"></span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: !1,
            removeConfirmation: !0,
            canvasImage: !0,
            _selectors: {
                list: ".jFiler-items-list",
                item: ".jFiler-item",
                progressBar: ".bar",
                remove: ".jFiler-item-trash-action"
            }
        },
        files: null,
        uploadFile: null,
        dragDrop: null,
        addMore: !1,
        allowDuplicates: !1,
        clipBoardPaste: !0,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        onFileCheck: null,
        afterShow: null,
        onRemove: null,
        onEmpty: null,
        options: null,
        dialogs: {
            alert: function(e) {
                return alert(e)
            },
            confirm: function(e, i) {
                confirm(e) && i()
            }
        },
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            removeConfirmation: "Are you sure you want to remove this file?",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-fileMaxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB.",
                folderUpload: "You are not allowed to upload folders."
            }
        }
    }
}(jQuery);
