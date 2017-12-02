      //** Featured Content Slider script- (c) Dynamic Drive DHTML code library: http://www.dynamicdrive.com.
      var featuredcontentslider = {
          ajaxloadingmsg: '<div style="margin: 20px 0 0 20px"><img src="loading.gif" /> Fetching slider Contents. Please wait...</div>',
          bustajaxcache: !0,
          enablepersist: !0,
          settingcaches: {},
          jumpTo: function(e, t) {
              this.turnpage(this.settingcaches[e], t)
          },
          ajaxconnect: function(e) {
              var t = !1;
              if (window.ActiveXObject) try {
                  t = new ActiveXObject("Msxml2.XMLHTTP")
              } catch (n) {
                  try {
                      t = new ActiveXObject("Microsoft.XMLHTTP")
                  } catch (n) {}
              } else {
                  if (!window.XMLHttpRequest) return !1;
                  t = new XMLHttpRequest
              }
              var i = e.contentsource[1];
              t.onreadystatechange = function() {
				  "use strict";
                  featuredcontentslider.ajaxpopulate(t, e)
              }, document.getElementById(e.id).innerHTML = this.ajaxloadingmsg;
              var a = this.bustajaxcache ? -1 != i.indexOf("?") ? "&" + (new Date).getTime() : "?" + (new Date).getTime() : "";
              t.open("GET", i + a, !0), t.send(null)
          },
          ajaxpopulate: function(e, t) {
              4 != e.readyState || 200 != e.status && -1 != window.location.href.indexOf("http") || (document.getElementById(t.id).innerHTML = e.responseText, this.buildpaginate(t))
          },
          buildcontentdivs: function(e) {
              for (var t = document.getElementById(e.id).getElementsByTagName("div"), n = 0; n < t.length; n++) this.css(t[n], "contentdiv", "check") && (e.contentdivs.push(t[n]), t[n].style.display = "none")
          },
          buildpaginate: function(e) {
              this.buildcontentdivs(e);
              var t = document.getElementById(e.id),
                  n = document.getElementById("paginate-" + e.id),
                  i = "",
                  a = e.toc,
                  c = e.nextprev;
              if ("string" == typeof a && "markup" != a || "object" == typeof a) {
                  for (var s = 1; s <= e.contentdivs.length; s++) i += '<a href="#' + s + '" class="toc">' + ("string" == typeof a ? a.replace(/#increment/, s) : a[s - 1]) + "</a> ";
                  i = ("" != c[0] ? '<a href="#prev" class="prev">' + c[0] + "</a> " : "") + i + ("" != c[1] ? '<a href="#next" class="next">' + c[1] + "</a>" : ""), n.innerHTML = i
              }
              for (var o = n.getElementsByTagName("a"), r = 0, s = 0; s < o.length; s++)
                  if (this.css(o[s], "toc", "check")) {
                      if (r > e.contentdivs.length - 1) {
                          o[s].style.display = "none";
                          continue
                      }
                      o[s].setAttribute("rel", ++r), o[s][e.revealtype] = function() {
                          return featuredcontentslider.turnpage(e, this.getAttribute("rel")), !1
                      }, e.toclinks.push(o[s])
                  } else(this.css(o[s], "prev", "check") || this.css(o[s], "next", "check")) && (o[s].onclick = function() {
                      return featuredcontentslider.turnpage(e, this.className), !1
                  });
              this.turnpage(e, e.currentpage, !0), e.autorotate[0] && (n[e.revealtype] = function() {
                  featuredcontentslider.cleartimer(e, window["fcsautorun" + e.id])
              }, t.onclick = function() {
                  featuredcontentslider.cleartimer(e, window["fcsautorun" + e.id])
              }, e.autorotate[1] = e.autorotate[1] + 1 / e.enablefade[1] * 50, this.autorotate(e))
          },
          urlparamselect: function(e) {
              var t = window.location.search.match(new RegExp(e + "=(\\d+)", "i"));
              return null == t ? null : parseInt(RegExp.$1)
          },
          turnpage: function(e, t, n) {
              var i = e.currentpage,
                  a = e.contentdivs.length,
                  c = /prev/i.test(t) ? i - 1 : /next/i.test(t) ? i + 1 : parseInt(t);
              c = 1 > c ? a : c > a ? 1 : c, (c != e.currentpage || "undefined" != typeof n) && (e.currentpage = c, e.contentdivs[c - 1].style.zIndex = ++e.topzindex, this.cleartimer(e, window["fcsfade" + e.id]), e.cacheprevpage = e.prevpage, 1 == e.enablefade[0] && (e.curopacity = 0, this.fadeup(e)), 0 == e.enablefade[0] && (e.contentdivs[e.prevpage - 1].style.display = "none", e.onChange(e.prevpage, e.currentpage)), e.contentdivs[c - 1].style.visibility = "visible", e.contentdivs[c - 1].style.display = "block", e.prevpage <= e.toclinks.length && this.css(e.toclinks[e.prevpage - 1], "selected", "remove"), c <= e.toclinks.length && this.css(e.toclinks[c - 1], "selected", "add"), e.prevpage = c, this.enablepersist && this.setCookie("fcspersist" + e.id, c))
          },
          setopacity: function(e, t) {
              var n = e.contentdivs[e.currentpage - 1];
              n.filters && n.filters[0] ? "number" == typeof n.filters[0].opacity ? n.filters[0].opacity = 100 * t : n.style.filter = "alpha(opacity=" + 100 * t + ")" : "undefined" != typeof n.style.MozOpacity ? n.style.MozOpacity = t : "undefined" != typeof n.style.opacity && (n.style.opacity = t), e.curopacity = t
          },
          fadeup: function(e) {
              e.curopacity < 1 ? (this.setopacity(e, e.curopacity + e.enablefade[1]), window["fcsfade" + e.id] = setTimeout(function() {
                  featuredcontentslider.fadeup(e)
              }, 50)) : (e.cacheprevpage != e.currentpage && (e.contentdivs[e.cacheprevpage - 1].style.display = "none"), e.onChange(e.cacheprevpage, e.currentpage))
          },
          cleartimer: function(e, t) {
              "undefined" != typeof t && (clearTimeout(t), clearInterval(t), e.cacheprevpage != e.currentpage && (e.contentdivs[e.cacheprevpage - 1].style.display = "none"))
          },
          css: function(e, t, n) {
              var i = new RegExp("(^|\\s+)" + t + "($|\\s+)", "ig");
              return "check" == n ? i.test(e.className) : void("remove" == n ? e.className = e.className.replace(i, "") : "add" == n && (e.className += " " + t))
          },
          autorotate: function(e) {
              window["fcsautorun" + e.id] = setInterval(function() {
                  featuredcontentslider.turnpage(e, "next")
              }, e.autorotate[1])
          },
          getCookie: function(e) {
              var t = new RegExp(e + "=[^;]+", "i");
              return document.cookie.match(t) ? document.cookie.match(t)[0].split("=")[1] : null
          },
          setCookie: function(e, t) {
              document.cookie = e + "=" + t
          },
          init: function(e) {
              var t = this.getCookie("fcspersist" + e.id) || 1,
                  n = this.urlparamselect(e.id);
              this.settingcaches[e.id] = e, e.contentdivs = [], e.toclinks = [], e.topzindex = 0, e.currentpage = n || (this.enablepersist ? t : 1), e.prevpage = e.currentpage, e.revealtype = "on" + (e.revealtype || "click"), e.curopacity = 0, e.onChange = e.onChange || function() {}, "inline" == e.contentsource[0] && this.buildpaginate(e), "ajax" == e.contentsource[0] && this.ajaxconnect(e)
          }
      };