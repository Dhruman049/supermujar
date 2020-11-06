function showOneElementInArray(html_id_prefix,num_elements)
{Element.show(html_id_prefix+(Math.min((num_elements-1),Math.floor(Math.random()*num_elements))));}
function showOneElementInArrayWithNav(html_id_prefix,nav_id_prefix){showBDArticle(html_id_prefix,nav_id_prefix,selected,false,true);startSlideShow(html_id_prefix,nav_id_prefix);}
function showBDArticle(html_id_prefix,nav_id_prefix,selected_article,clicked,first)
{if(clicked)
{selected=selected_article;stopSlideShow(nav_id_prefix);}
for(var i=0;i<article_size;i++)
{Element.hide(html_id_prefix+i);Element.hide(nav_id_prefix+i+'_on');Element.show(nav_id_prefix+i+'_off');}
Effect.Appear(html_id_prefix+selected_article,{duration:0.2});Element.hide(nav_id_prefix+selected_article+'_off');Element.show(nav_id_prefix+selected_article+'_on');if(clicked&&Rgm.config.track_bigdaddy_slide){Rgm.triggerOmnitureTracking();}}
function startSlideShow(html_id_prefix,nav_id_prefix,clicked)
{stop_flag=false;if(clicked)
{selected=(selected==(article_size-1))?0:++selected;showBDArticle(html_id_prefix,nav_id_prefix,selected);}
new PeriodicalExecuter(function(pe){if(stop_flag){pe.stop;}else{selected=(selected==(article_size-1))?0:++selected;showBDArticle(html_id_prefix,nav_id_prefix,selected);}},10);Element.hide(nav_id_prefix+'pause_off');Element.show(nav_id_prefix+'pause_on');}
function stopSlideShow(nav_id_prefix)
{stop_flag=true;Element.hide(nav_id_prefix+'pause_on');Element.show(nav_id_prefix+'pause_off');}
var Drawer=Class.create();Drawer.prototype={initialize:function(id,useNumberedCancelLinks){this.id=id;this.isOpen=false;this.useNumberedCancelLinks=useNumberedCancelLinks;$(this.id).style.position='relative';var closeButton=Element.create('div');closeButton.className='close_link';closeButton.id=this.id+'_close_link';Event.observe(closeButton,'click',this.close.bind(this));$(this.id).appendChild(closeButton);var drawerContents=Element.create('div');drawerContents.id=this.id+'_contents';drawerContents.className='drawer_contents';$(this.id).appendChild(drawerContents);this.onChange="onChange";},open:function(drawersArray){Element.show(this.id);if(drawersArray)
this.closeAllExceptThis(drawersArray);this.isOpen=true;this.iHeight=$(this.id).offsetHeight;Rgm.CustomEvent.dispatch(this.onChange,{'cmd':'expand','height':this.iHeight});this.bindCancelLink();},bindCancelLink:function(){var cancelLink;if(this.useNumberedCancelLinks)
cancelLink=$(this.id+'_contents_cancel_link');else{cancelLink=$('cancel_link');}
if(cancelLink)
Event.observe(cancelLink,'click',this.closeFromLink.bind(this));},close:function(){Element.hide(this.id);this.isOpen=false;Rgm.CustomEvent.dispatch(this.onChange,{'cmd':'collapse','height':this.iHeight});},closeAllExceptThis:function(drawers){for(var i=0;i<drawers.length;i++){if(this!=drawers[i])
drawers[i].close();}},closeFromLink:function(evt){var msg=$('message').innerHTML;if(msg!=""){if(confirm(msg)){this.close();}}else{this.close();}
Event.stop(evt);},show:function(){this.open();},hide:function(){this.close();},toggle:function(){if(!this.isOpen)
this.open();else
this.close();}};function setLoginLinks(){if(Rgm.isLoggedIn())
{$('loginLink').style.display='none';$('registerLink').style.display='none';$('logoutLink').style.display='';$('message_center').style.display='';$('login_divider').style.display='none';$('unread_num').innerHTML="("+Rgm.unreadNotice()+")";$('profile_url_welcome').href=Rgm.profileUrlUser();$('profile_url_icon').href=Rgm.profileUrlUser();if($('loginLinkFooter')){$('loginLinkFooter').style.display='none';$('logoutLinkFooter').style.display='';}
var userIcon=new Element('img',{src:Rgm.photoUrlUser(),id:'user_icon_photo',alt:truncate(Rgm.firstName())+'\'s Icon'});$('profile_url_icon').innerHTML='';$('profile_url_icon').appendChild(userIcon);$('user_name').innerHTML=truncate(Rgm.firstName());$('friend_request_num').innerHTML='('+Rgm.friendshipRequestsCount()+')';$('header_user').style.display='';if($('header_msg'))
{inAccountController=((window.location.toString().indexOf('/member_workspace/account/settings')==-1)?false:true);$('header_msg').style.display=((Rgm.showEmailSuspendedNotice()&&!inAccountController)?'':'none');}
highlightText();}}
function setEditorLinks(){if(Rgm.isEditor())
{$('editorialLink').style.display='';}}
function highlightText(){if(Rgm.unreadNotice()>0)
{$('message_center').setAttribute(htmlClassAttribute(),'highlight');}
if(Rgm.friendshipRequestsCount()>0)
{$('friend_requests').setAttribute(htmlClassAttribute(),'highlight');}}
function hideLogin(){if($('loginLink')){$('loginLink').style.display='none';$('login_divider').style.display='none';}}
function truncate(str){var trunc_str=(str.length>26)?(str.slice(0,26)+"&#8230;"):str;return trunc_str.replace(/\+/g,"&nbsp;");}